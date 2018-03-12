
<form action="" method="post">
<!-- label로 전체를 감싸면 css 내부적으로 뭔가 꼬여셔 for=""를 추가해야되는것 같음 -->
  <label for="">성별
    <input type="radio" name="sex" value="여성" id="a" >
    <label for="a">여성</label>
    <input type="radio" name="sex" value="남성" id="b">
    <label for="b">남성</label>
  </label>
  <input type="submit">
</form>
