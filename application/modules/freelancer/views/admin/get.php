<style>
@media (min-width : 768px)
{
    .col-border:before
    {
        content: "";
        position : absolute;
        top : 0 ;
        bottom : 0;
        border-left : 1px solid black;
    }
}
</style>
<div class="row">
    <div class="col-sm-4">사진</div>
    <div class="col-sm-8">
        <div class="row">
            <div class="col-sm-12"><h4>이름 : <?=$row->name?></h4></div>
            <div class="col-sm-12"><h4>생년월일 : <?=$row->birth_year?>년 <?=$row->birth_month?>월 <?=$row->birth_day?>일</h4></div>
            <div class="col-sm-12"><h4>국가 : <?=$row->nation?></h4></div>
            <div class="col-sm-12"><h4>성별 : <?=$row->sex?></h4></div>
            <div class="col-sm-12"><h4>연락처 : <?=$row->tel?></h4></div>
            <div class="col-sm-12"><h4>휴대폰 : <?=$row->phone?></h4></div>
            <div class="col-sm-12"><h4>이메일 : <?=$row->email?></h4></div>
            <div class="col-sm-12"><h4>우편번호 : <?=$row->post_number?></h4></div>
            <div class="col-sm-12"><h4>도로명주소 : <?=$row->new_address?></h4></div>
            <div class="col-sm-12"><h4>지번주소 : <?=$row->old_address?></h4></div>
            <div class="col-sm-12"><h4>상세주소 : <?=$row->address_detail?></h4></div>
            <div class="col-sm-12"><h4>계좌정보 : <?=$row->account_bank?> <?=$row->account_number?> <?=$row->account_name?></h4></div>
        </div>
        
    </div>  
</div>  

<div class="row">
    <div class="col-sm-12"><h4>지원분야 : <?=$row->apply_field?></h4></div>
</div>
<div class="row">
    <div class="col-sm-12"><h4>경력 : <?=$row->is_have_career?></h4></div>
</div>
<div class="row">
    <div class="col-sm-12"><h4>언어방향 : <?=$row->translation_direction?></h4></div>
</div>
<div class="row">
    <div class="col-sm-12"><h4>언어종류 : <?=$row->language?></h4></div>
</div>

<div class="row">
    <div class="col-sm-12"><h4>분야 : <?=$row->field_detail?></h4></div>
</div>

<div class="row">
    <div class="col-sm-12"><h4>재직유무: <?=$row->is_employed?></h4></div>
</div>
<div class="row">
    <div class="col-sm-12"><h4>대학: <?=$row->university?> <?=$row->university_major?></h4></div>
</div>
<div class="row">
    <div class="col-sm-12"><h4>대학원: <?=$row->graduate_school?> <?=$row->graduate_school_degree?> <?=$row->graduate_school_major?></h4></div>
</div>
<div class="row">
    <div class="col-sm-12"><h4>경력 : <?=$row->experience?></h4></div>
</div>
<div class="row">
    <div class="col-sm-12"><h4>그외 : <?=$row->etc?></h4></div>
</div>
<div class="row">
    <div class="col-sm-12"><h4>언어수준 : <?=$row->level?></h4></div>
</div>
<div class="row">
    <div class="col-sm-12"><h4>일할 수 있는 날짜 : <?=$row->can_working_day?></h4></div>
</div>
<div class="row">
    <div class="col-sm-12"><h4>하루에 번역 가능 페이지수 : <?=$row->num_translation_per_day?></h4></div>
</div>

<div class="row">
    <div class="col-sm-12"><h4>관리자 점수 : <?=$row->admin_score?></h4></div>
</div>
<div class="row">
    <div class="col-sm-12"><h4>관리자 메모 : <?=$row->admin_memo?></h4></div>
</div>
<div class="row">
    <div class="col-sm-4">
    <h4>승인 상태 : <?=$row->is_admin_confirm?> 
    </h4>
    </div>
    <div class="col-sm-4">
        <form <?=$this->ajax_helper->form("/admin/freelancer/update/{$row->id}")?>>
            <div class="form-group">
                <label for="sel1">변경</label>
                <select name="is_admin_confirm" class="form-control" id="sel1">
                    <option value="1">승인</option>
                    <option value="0">비승인</option>
                </select>
            </div>
            <button class="btn btn-default">확인</button>
        </form>
    </div>
    <div class="col-sm-4">
        <h4><button class="btn btn-default clickable" target="_blank" data-href="/admin/email/add?email=<?=$row->email?>">이메일 보내기</button></h4>
    </div>

</div>
<?php foreach ( $application_files as $application_file ): ?>
<div class="row">
    <div class="col-sm-12"><h4>지원서파일 : <a href="/download/<?=$application_file->id?>"><?=$application_file->original_name?></a></h4></div>
</div>
<?php endforeach; ?>
<div class="row">
    <div class="col-sm-12"><h4>지원서파일 : <?=$row->application_file_directory1?></h4></div>
</div>
<div class="row">
    <div class="col-sm-12"><h4>지원서파일 : <?=$row->application_file_directory2?></h4></div>
</div>
