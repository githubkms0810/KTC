
<form action="" method="post">
  <!-- <label >성별 -->
  <label for="">성별
    <input type="radio" name="sex" value="여성" id="a" >
    <label for="a">여성</label>
    <input type="radio" name="sex" value="남성" id="b">
    <label for="b">남성</label>
  </label>
  <input type="submit">
</form>

<!-- input 태그의 id와 label의 for를 맞춰주면 둘이 연결됨 -->
<label for="c">클릭시 하면체크</label>
<div>내용없음</div>
<input type="radio" name="sex" value="여성" id="c" >

<br>
<br>

<!-- label태그안에 input태그를 넣으면 자동으로 연결됨-->
<label>
  <input type="radio" name="sex" value="남성" >
  클릭하면체크
</label>