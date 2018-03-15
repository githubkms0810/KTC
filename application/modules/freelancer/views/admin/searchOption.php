<input type="hidden" name="searchKeyOption[]" value="freelancer.apply_field">
통역/번역
<select class="form-control" name="searchValueOption[]" id="">
        <option value ="">선택</option>
        <option <?=set_select("","")?>>통역</option>
        <option>번역</option>
</select>

<input type="hidden" name="searchKeyOption[]" value="freelancer.sex">
성별
<select class="form-control" name="searchValueOption[]" id="">
        <option value ="">선택</option>
        <option>남성</option>
        <option>여성</option>
</select>

<input type="hidden" name="searchKeyOption[]" value="freelancer_translation_field.field_detail">
분야
<input type="text" name="searchValueOption[]">

<input type="hidden" name="searchKeyOption[]" value="freelancer.translation_direction">
언어방향
<select class="form-control" name="searchValueOption[]" id="">
        <option value ="">선택</option>
        <option>외국어->한국어</option>
        <option>한국어->외국어</option>
        <option>외국어<->한국어</option>
</select>


<input type="hidden" name="searchKeyOption[]" value="freelancer_translation_language.language">
언어
<select class="form-control" name="searchValueOption[]" id="">
        <option value ="">선택</option>
        <?php foreach ( $languages as $language ): ?>
            <option><?=$language?></option>
        <?php endforeach; ?>
</select>

<input type="hidden" name="searchKeyOption[]" value="freelancer.translation_direction">
언어방향
<select class="form-control" name="searchValueOption[]" id="">
        <option value ="">선택</option>
        <option>외국어->한국어</option>
        <option>한국어->외국어</option>
        <option>외국어<->한국어</option>
</select>


<input type="hidden" name="searchKeyOption[]" value="freelancer.university">
대학
<input type="text" name="searchValueOption[]">


<input type="hidden" name="searchKeyOption[]" value="freelancer.university_major">
전공
<input type="text" name="searchValueOption[]">

<input type="hidden" name="searchKeyOption[]" value="freelancer.graduate_school">
대학원
<input type="text" name="searchValueOption[]">


<input type="hidden" name="searchKeyOption[]" value="freelancer.graduate_school_degree">
학위
<input type="text" name="searchValueOption[]">

<input type="hidden" name="searchKeyOption[]" value="freelancer.graduate_school_major">
전공
<input type="text" name="searchValueOption[]">

<input type="hidden" name="searchKeyOption[]" value="freelancer.admin_score">
관리자 점수
<input type="text" name="searchValueOption[]">

<input type="hidden" name="searchKeyOption[]" value="freelancer.admin_memo">
관리자 메모
<input type="text" name="searchValueOption[]">

<?php for ( $i = 0 ; $i < count(get("searchKeyOption")) ; $i++ ): ?>
        <p><?=get("searchValueOption")[$i]?></p>
<?php endfor; ?>

