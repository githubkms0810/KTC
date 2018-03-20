
function changeZIndexBySelector(zIndexValue,selector)
{
	document.querySelector(selector).style.zIndex  = zIndexValue;
}

var Jy;
(function (Jy){
    (function (KTC){
        var Portfolio = (function(){

            var _$JyDim = $(".jy-dim");
            function Portfolio(){
            }
            Portfolio.prototype.ClickPortfolio = function(t){
                $this =$(t);
                $wrapper = _GetItemWapper($this);
                $ModalContainer =_GetModalContainer($wrapper);
                $ModalContainer.css('display','block');
                // _$JyDim.css("display","block");
                $wrapper.css('z-index','999999');
                $ModalContainer.css('z-index','99999');
                // $ModalContainer.css('position','fixed !important');
                $ModalContainer[0].style.top = 0;
                // $ModalContainer[0].style.marginTop= 0;
                // $ModalContainer.css('margin-top','20');

                // $(".jscroll-inner").css('z-index','99999');
                // $(".home-section__portfolio").css('z-index','99999');
                // $("#jscroll-wapper").css('z-index','99999');
                // $(".bc-container").css('z-index','99999');
            }
            Portfolio.prototype.ClosePortfolio =  function(t)
            {
                $this =$(t);
                $wrapper = _GetItemWapper($this);
                $ModalContainer =_GetModalContainer($wrapper);
                $ModalContainer.css('display','none');
                _$JyDim.css("display","none");
            }
            var _GetModalContainer = function($wrapper){
                return $($wrapper.children(".container-contact100")[0]);
            }
            var _GetItemWapper = function($this){
                return $($this.parents(".jy-portfolio-item-wrapper")[0]);
            }            
            var _Get
            return Portfolio;
        })();
        KTC.Portfolio = Portfolio;
    })(Jy.KTC || (Jy.KTC = {}));    
    var KTC = Jy.KTC;
})(Jy || (Jy = {}));


