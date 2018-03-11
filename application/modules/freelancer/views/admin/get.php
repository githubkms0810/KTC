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
            <div class="col-sm-12">이름 : <?=$row->name?></div>
            <div class="col-sm-12">생년월일 : <?=$row->birth_year?>년 <?=$row->birth_month?>월 <?=$row->birth_day?>일</div>
            <div class="col-sm-12">국가 : <?=$row->nation?></div>
            <div class="col-sm-12">성별 : <?=$row->sex?></div>
            <div class="col-sm-12">연락처 : <?=$row->tel?></div>
            <div class="col-sm-12">휴대폰 : <?=$row->phone?></div>
            <div class="col-sm-12">이메일 : <?=$row->email?></div>
            <div class="col-sm-12">우편번호 : <?=$row->post_number?></div>
            <div class="col-sm-12">도로명주소 : <?=$row->new_address?></div>
            <div class="col-sm-12">지번주소 : <?=$row->old_address?></div>
            <div class="col-sm-12">상세주소 : <?=$row->address_detail?></div>
            <div class="col-sm-12">계좌정보 : <?=$row->account_bank?> <?=$row->account_number?> <?=$row->account_name?></div>
        </div>
        
    </div>  
</div>  

<div class="row">
    <div class="col-sm-12">지원분야 : <?=$row->apply_field?></div>
</div>
<div class="row">
    <div class="col-sm-12">경력 : <?=$row->is_have_career?></div>
</div>
<div class="row">
    <div class="col-sm-12">언어방향 : <?=$row->translation_direction?></div>
</div>
<div class="row">
    <div class="col-sm-12">재직유무: <?=$row->is_employed?></div>
</div>
<div class="row">
    <div class="col-sm-12">대학: <?=$row->university?> <?=$row->university_major?></div>
</div>
<div class="row">
    <div class="col-sm-12">대학원: <?=$row->graduate_school?> <?=$row->graduate_school_degree?> <?=$row->graduate_school_major?></div>
</div>
<div class="row">
    <div class="col-sm-12">경력 : <?=$row->experience?></div>
</div>
<div class="row">
    <div class="col-sm-12">그외 : <?=$row->etc?></div>
</div>
<div class="row">
    <div class="col-sm-12">언어수준 : <?=$row->level?></div>
</div>
<div class="row">
    <div class="col-sm-12">일할 수 있는 날짜 : <?=$row->can_working_day?></div>
</div>
<div class="row">
    <div class="col-sm-12">하루에 번역 가능 페이지수 : <?=$row->num_translation_per_day?></div>
</div>

<div class="row">
    <div class="col-sm-12">관리자 점수 : <?=$row->admin_score?></div>
</div>
<div class="row">
    <div class="col-sm-12">관리자 메모 : <?=$row->admin_memo?></div>
</div>
<div class="row">
    <div class="col-sm-12">
    승인 상태 : <?=$row->is_admin_confirm?> 
    <?php if ( $row->is_admin_confirm === "0" ): ?>
        <a href="/admin/freelancer/confirm/<?=$row->id?>">승인하기</a>
       
    <?php else:?>
        <a href="/admin/freelancer/cancelConfirm/<?=$row->id?>">승인취소</a>
    <?php endif; ?>
    <?php if ( $row->is_send_email === "0" ): ?>
        <a target="_blank"href="/admin/email/add?email=<?=$row->email?>">이메일 보내기</a>
    <?php endif; ?>
    </div>
</div>
<?php foreach ( $application_files as $application_file ): ?>
<div class="row">
    <div class="col-sm-12">지원서파일 : <a href="/download/<?=$application_file->id?>"><?=$application_file->original_name?></a></div>
</div>
<?php endforeach; ?>
<div class="row">
    <div class="col-sm-12">지원서파일 : <?=$row->application_file_directory1?></div>
</div>
<div class="row">
    <div class="col-sm-12">지원서파일 : <?=$row->application_file_directory2?></div>
</div>
