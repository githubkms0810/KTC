<div class="row">
    <div class="col-sm-4"><h3><?=$row->type?>/<?=$row->buyer?></h3></div>
</div>
<hr/>
<div class="row">
    <div class="col-sm-4"><h3>상태: <?=$row->translation_status?></h3></div>
    <div class="col-sm-4">
        <form <?=$this->ajax_helper->form("/admin/translation_order/update/{$row->id}")?>>
        <div class="form-group">
            <label for="sel1">상태변경</label>
            <select name="translation_status" class="form-control" id="sel1">
                <option>전달중</option>
                <option>전달완료</option>
                <option>진행중</option>
                <option>완료</option>
            </select>
        </div>
        <button class="btn btn-default">확인</button>
        </form>
    </div>
    
</div>
<hr/>
<?php if ( $row->buyer ==="회사" ): ?>
<div class="row">
    <div class="col-sm-4"><h4>회사명 : <?=$row->company?></h4></div>
    <div class="col-sm-4"><h4>부서명 : <?=$row->department?></h4></div>    
    <div class="col-sm-4"><h4>회사번호 : <?=$row->company_phone?></h4></div>    
</div>
<div class="row">
    <div class="col-sm-4"><h4>담당자 : <?=$row->manager?></h4></div>
    <div class="col-sm-8"><h4>담당자번호 : <?=$row->manager_phone?></h4></div>    
</div>
    
<?php endif; ?>
<?php if ( $row->buyer ==="개인" ): ?>
    <div class="row">
        <div class="col-sm-4"><h4>이름 : <?=$row->personal_name?></h4></div>
        <div class="col-sm-8"><h4>번호 : <?=$row->personal_phone?></h4></div>    
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-sm-4"><h4>팩스여부 : <?=$row->is_exist_fax?></h4></div>
    <div class="col-sm-8"><h4>팩스번호 : <?=$row->fax?></h4></div>    
</div>
<div class="row">
    <div class="col-sm-12"><h4>이메일 : <?=$row->email?></h4></div>
</div>
<hr/>
<?php if ($row->type ==="통역" ): ?>
<div class="row">
    <div class="col-sm-12"><h4>통역종류 : <?=$row->interpret_kind?></h4></div>
    <div class="col-sm-12"><h4>우편번호 : <?=$row->interpret_post_number?></h4></div>
    <div class="col-sm-12"><h4>도로명 : <?=$row->interpret_new_address?></h4></div>
    <div class="col-sm-12"><h4>지번명 : <?=$row->interpret_old_address?></h4></div>
    <div class="col-sm-12"><h4>상세 주소 : <?=$row->interpret_address_detail?></h4></div>
    <div class="col-sm-12"><h4>시작일 : <?=$row->interpret_start_date?></h4></div>
    <div class="col-sm-12"><h4>마지막일 : <?=$row->interpret_end_date?></h4></div>
    <div class="col-sm-12"><h4>희망 납기일 : <?=$row->interpret_pay_date?></h4></div>
    <div class="col-sm-12"><h4>장비유무 : <?=$row->is_need_equiment?></h4></div>
    <div class="col-sm-12"><h4>장비 갯수 : <?=$row->num_equiment?></h4></div>
    <div class="col-sm-12"><h4>프로필 유무 : <?=$row->is_need_profile?></h4></div>
</div>
<hr/>
<hr/>
<?php endif; ?>

<div class="row">
    <div class="col-sm-12"><h4>번역종류 : <?=$row->translation_kind?></h4></div>
</div>
<div class="row">
    <div class="col-sm-6"><h4>번역전 : <?=$row->translation_before?></h4></div>
    <div class="col-sm-6"><h4>번역후 : <?=$row->translation_after?></h4></div>
</div>
<div class="row">
    <div class="col-sm-12"><h4>마감일 : <?=$row->deadline?></h4></div>
</div>

<div class="row">
    <div class="col-sm-6"><h4>예산여부 : <?=$row->is_exist_budget?></h4></div>
    <div class="col-sm-6"><h4>예산 : <?=$row->budget?></h4></div>
</div>
<div class="row">
    <div class="col-sm-12"><h4>요구사항 : <?=$row->requirements?></h4></div>
</div>
<div class="row">
    <div class="col-sm-12"><h4>세금계산서 여부 : <?=$row->is_get_tax_bill?></h4></div>
    <div class="col-sm-12"><h4>현금 영수증 : <?=$row->is_get_cash_receipt?></h4></div>
    <div class="col-sm-12"><h4>기밀 여부 : <?=$row->is_use_confidential?></h4></div>
    <div class="col-sm-12"><h4>메세지 : <?=$row->message?></h4></div>
</div>
<hr/>

<div class="row">
    <div class="col-sm-12"><h2>첨부파일 리스트</h2></div>
</div>
<?php foreach ( $files as $file ): ?>
<div class="row">
    <div class="col-sm-12"><h4><a href="/download/<?=$file->id?>"><?=$file->original_name?></a></h4></div>
</div>
<?php endforeach; ?>

<hr/>

<div class="row">
    <div class="col-sm-12">
        <form <?=$this->ajax_helper->form("/admin/translation_order/update/{$row->id}")?>>
        <?=$this->component->ajaxImage(["displayName"=>"포트폴리오 대표이미지","inputName"=>"image","row"=>$row,"default"=>portfolioDefaultImage])?>
        <button class="btn btn-default" type="submit">보내기</button>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-sm-12"><h2>포트폴리오 여부 :<?=$row->is_portfolio?></h2></div>
    <div class="col-sm-12">
        <form <?=$this->ajax_helper->form("/admin/translation_order/update/{$row->id}")?>>
            <div class="form-group">
                <label for="sel1">변경</label>
                <select name="is_portfolio" class="form-control" id="sel1">
                    <option value="1">포트폴리오로 전환</option>
                    <option value="0">비전환</option>
                </select>
            </div>
            <button class="btn btn-default">확인</button>
        </form>
    </div>
</div>
