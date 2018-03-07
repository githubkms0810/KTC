<form <?=$this->ajax_helper->form("/user/login?return_url=".urlencode($this->input->get("return_url")),null,false)?>>

<div class="form-group">
  <label for="usr">아이디</label>
  <input class="form-control" type="text" name="userName_orEmail_orPhone">
</div>
<div class="form-group">
  <label for="password">비밀번호</label>
  <input class="form-control" type="password" name="password">
</div>
    
<input class="btn" type="submit" value="로그인">
<button type="button"class="btn clickable"data-href="<?=site_url("/user/add?return_url=".urlencode($this->input->get("return_url")))?>">회원가입</button>
</form>
<?=$this->load->view('base/oauthBtn', ["oauth_mode"=>"로그인"]);?>

<br>
<br>
<ol class="breadcrumb">
   
    <li>
        <form style="display:inline" action="<?=site_url("/user/find_password")?>" method="post">
            <input type="hidden" name="resend_auth_code" value="1">
            <button class="linkButton" type="submit">비밀번호 찾기</button>
        </form>
    </li>
    
  <li><button class="linkButton clickable" data-href="<?=site_url("user/find_userName")?>">아이디찾기</button></li>
</ol>
     
        


