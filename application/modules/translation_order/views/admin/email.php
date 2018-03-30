<link rel="shortcut icon" href="<?=site_url()?>public/images/favicon.ico">
<link rel="canonical" href="http://www.ktrans.kr">
<link rel="stylesheet" type="text/css" media="all" href="<?=site_url()?>public/subpage/css/reset/styles.css">
<link rel="stylesheet" href="<?=site_url()?>public/css/jy.css">
<link rel="stylesheet" href="<?=site_url()?>public/css/beautiful.css">
<link rel="stylesheet" href="<?=site_url()?>public/css/animate.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css" integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" crossorigin="anonymous">
<link href="//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSans-kr.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?=site_url()?>public/css/jy.css">


<hr/>
<div class="row">
    <div class="col-sm-4"><h3>상태: <?=$row->translation_status?></h3></div>
    <div class="col-sm-4">
       
    </div>
    
</div>
<hr/>


<table class="table table-bordered">
    
    <tbody>
  
     

    <tr>
        <td class="jy-td-name">종류</td>
        <td colspan="8"><?=$row->type?></td>
    </tr>
    <tr>
        <td class="jy-td-name">구매자종류</td>
        <td colspan="8"><?=$row->buyer?></td>
    </tr>

<?php if ( $row->buyer ==="회사" ): ?>

<tr>
    <td class="jy-td-name">회사명</td>
    <td colspan="8"><?=$row->company?></td>
</tr>
<tr>
    <td class="jy-td-name">부서명</td>
    <td colspan="8"><?=$row->department?></td>
</tr>
<tr>
    <td class="jy-td-name">회사번호</td>
    <td colspan="8"><?=$row->company_phone?></td>
</tr>
<tr>
    <td class="jy-td-name">담당자</td>
    <td colspan="8"><?=$row->manager?></td>
</tr>
<tr>
    <td class="jy-td-name">담당자번호</td>
    <td colspan="8"><?=$row->manager_phone?></td>
</tr>



    
<?php endif; ?>
<?php if ( $row->buyer ==="개인" ): ?>
<tr>
    <td class="jy-td-name">이름</td>
    <td colspan="8"><?=$row->personal_name?></td>
</tr>

<tr>
    <td class="jy-td-name">번호</td>
    <td colspan="8"><?=$row->personal_phone?></td>
</tr>

<?php endif; ?>
    <tr>
        <td class="jy-td-name">팩스여부</td>
        <td colspan="3"><?=$row->is_exist_fax?></td>
        <td class="jy-td-name">팩스번호</td>
        <td colspan="4"><?=$row->fax?></td>
    </tr>
    <tr>
        <td class="jy-td-name">이메일</td>
        <td colspan="8"><?=$row->email?></td>
    </tr>
</tbody>
  </table>

<hr/>
<?php if ($row->type ==="통역" ): ?>

<table class="table table-bordered">
    
    <tbody>
      <tr>
        <td class="jy-td-name">통역종류</td>
        <td colspan="8"><?=$row->interpret_kind?></td>
      </tr>
      <tr>
        <td class="jy-td-name">우편번호</td>
        <td colspan="8"><?=$row->interpret_post_number?></td>
      </tr>
      <tr>
        <td class="jy-td-name">도로명</td>
        <td colspan="3"><?=$row->interpret_new_address?></td>
        <td class="jy-td-name">지번명</td>
        <td colspan="4"><?=$row->interpret_old_address?></td>
      </tr>
      <tr>
      <td class="jy-td-name">상세 주소</td>
      <td colspan="8"><?=$row->interpret_address_detail?></td>
    </tr>
      <tr>
      <td class="jy-td-name">시작일</td>
      <td colspan="3"><?=$row->interpret_start_date?></td>
      <td class="jy-td-name">마지막일</td>
      <td colspan="4"><?=$row->interpret_end_date?></td>
    </tr>
      <tr>
      <td class="jy-td-name">희망 납기일</td>
      <td colspan="8"><?=$row->interpret_pay_date?></td>
    </tr>
      <tr>
      <td class="jy-td-name">장비유무</td>
      <td colspan="3"><?=$row->is_need_equiment?></td>
      <td class="jy-td-name">장비갯수</td>
      <td colspan="4"><?=$row->num_equiment?></td>
    </tr>
    <tr>
      <td class="jy-td-name">프로필 유무</td>
      <td colspan="8"><?=$row->is_need_profile?></td>
    </tr>
    </tbody>
  </table>


<?php endif; ?>

<table class="table table-bordered">
    
    <tbody>
      <tr>
        <td class="jy-td-name">번역종류</td>
        <td colspan="8" ><?=$row->translation_kind?></td>
      </tr>
      <tr>
        <td class="jy-td-name">번역전</td>
        <td colspan="3" ><?=$row->translation_before?></td>
        <td class="jy-td-name">번역후</td>
        <td colspan="4" ><?=$row->translation_after?></td>
      </tr>
      <tr>
        <td class="jy-td-name">예산여부</td>
        <td colspan="3" ><?=$row->is_exist_budget?></td>
        <td class="jy-td-name">예산</td>
        <td colspan="4" ><?=$row->budget?></td>
      </tr>
      <tr>
        <td class="jy-td-name">마감일</td>
        <td colspan="8" ><?=$row->deadline?></td>
      </tr>
      <tr>
        <td class="jy-td-name">요구사항</td>
        <td colspan="8" ><?=$row->requirements?></td>
      </tr>
      <tr>
        <td class="jy-td-name">세금계산서 여부</td>
        <td colspan="8" ><?=$row->is_get_tax_bill?></td>
      </tr>
      <tr>
        <td class="jy-td-name">현금 영수증</td>
        <td colspan="8" ><?=$row->is_get_cash_receipt?></td>
      </tr>
     
      <tr>
        <td class="jy-td-name">메세지 여부</td>
        <td colspan="8" ><?=$row->message?></td>
      </tr>
      <tr>
        <td class="jy-td-name">분야 설정</td>
        <td colspan="4" ><?=$row->field?></td>
        <td colspan="4" >
      
        </td>
      </tr>
      <tr>
        <td class="jy-td-name">기밀 여부</td>
        <td colspan="4" ><?=$row->is_use_confidential?></td>
        <td colspan="4" >
        
        </td>
      </tr>
      <tr>
        <td class="jy-td-name">포트폴리오 여부</td>
        <td colspan="4" ><?=$row->is_portfolio?></td>
        <td colspan="4">
          
        </td>
      </tr>
     
    </tbody>
  </table>


<hr/>

<div class="row">
    <div class="col-sm-12"><h2>첨부파일 리스트</h2></div>
</div>
<?php foreach ( $files as $file ): ?>
<div class="row">
    <div class="col-sm-12">
    <h4 style="display:inline-block"><a href="<?=site_url()?>download/<?=$file->id?>"><?=$file->original_name?></a></h4>
    </div>
</div>
<?php endforeach; ?>

<hr/>



<br>
<br>
