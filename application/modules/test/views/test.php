<script src="http://lite.payapp.kr/public/api/payapp-lite.js"></script>
<script>
function myPay() {
    PayApp.setForm('MyForm');
    PayApp.call();
}
</script>

<form name="MyForm">
    <input type="hidden" name="userid"   value="payapptest">
    <input type="hidden" name="shopname" value="좋은상점">
    <input type="hidden" name="goodname" value="착한상품">
    <input type="hidden" name="price"    value="1000">
</form>

<a href="#" onclick="myPay();">결제하기</a>