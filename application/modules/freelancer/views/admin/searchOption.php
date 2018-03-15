<link rel="stylesheet" href="/public/css/jy.css">

<table class="table table-bordered" >
    <tbody>
        <tr>
            <td class="jy-td-name jy-line-height">통역/번역</td>
            <td colspan="2">
                <input type="hidden" name="searchKeyOption[]" value="freelancer.apply_field">
                <select class="form-control" name="searchValueOption[]" id="">
                        <option value ="">선택</option>
                        <option <?=set_select("","")?>>통역</option>
                        <option>번역</option>
                </select>

            </td>
        </tr>

        <tr>
            <td class="jy-td-name jy-line-height">성별</td>
            <td colspan="2">
                <input type="hidden" name="searchKeyOption[]" value="freelancer.sex">
                <select class="form-control" name="searchValueOption[]" id="">
                        <option value ="">선택</option>
                        <option>남성</option>
                        <option>여성</option>
                </select>
            </td>
        </tr>

        
        <tr>
            <td class="jy-td-name jy-line-height">분야</td>
            <td colspan="2">
                <input type="hidden" name="searchKeyOption[]" value="freelancer_translation_field.field_detail">
                <input type="text" name="searchValueOption[]">
            </td>
        </tr>

        <tr>
            <td class="jy-td-name jy-line-height">언어방향</td>
            <td colspan="2">
                <input type="hidden" name="searchKeyOption[]" value="freelancer.translation_direction">
               
                <select class="form-control" name="searchValueOption[]" id="">
                        <option value ="">선택</option>
                        <option>외국어->한국어</option>
                        <option>한국어->외국어</option>
                        <option>외국어<->한국어</option>
                </select>
            </td>

            <td class="jy-td-name jy-line-height">언어</td>
            <td colspan="2">
                <input type="hidden" name="searchKeyOption[]" value="freelancer.language">
               
                <select class="form-control" name="searchValueOption[]" id="">
                    <option value ="">선택</option>
                    <?php foreach ( $languages as $language ): ?>
                        <option><?=$language?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>


        <tr>
            <td class="jy-td-name jy-line-height">대학</td>
            <td colspan="2">
            <input type="hidden" name="searchKeyOption[]" value="freelancer.university">
          
            <input type="text" name="searchValueOption[]">
        
            </td>
            <td class="jy-td-name jy-line-height">전공</td>
            <td colspan="2">
                <input type="hidden" name="searchKeyOption[]" value="freelancer.university_major">
                <input type="text" name="searchValueOption[]">
            </td>
        </tr>

        <tr>
            <td class="jy-td-name jy-line-height">대학원</td>
            <td colspan="2">
                <input type="hidden" name="searchKeyOption[]" value="freelancer.graduate_school">
                <input type="text" name="searchValueOption[]">
            </td>
            <td class="jy-td-name jy-line-height">학위</td>
            <td colspan="2">
                <input type="hidden" name="searchKeyOption[]" value="freelancer.graduate_school_degree">
                <input type="text" name="searchValueOption[]">
            </td>

            <td class="jy-td-name jy-line-height">전공</td>
            <td colspan="2">
                <input type="hidden" name="searchKeyOption[]" value="freelancer.graduate_school_major">
                <input type="text" name="searchValueOption[]">
            </td>
        </tr>

        <tr>
            <td class="jy-td-name jy-line-height">관리자 점수</td>
            <td colspan="2">
                <input type="hidden" name="searchKeyOption[]" value="freelancer.admin_score">
                <input type="text" name="searchValueOption[]">
            </td>
            <td class="jy-td-name jy-line-height">관리자 메모</td>
            <td colspan="2">
                <input type="hidden" name="searchKeyOption[]" value="freelancer.admin_memo">
                <input type="text" name="searchValueOption[]">
            </td>
        </tr>

    </tbody>
</table>









<?php for ( $i = 0 ; $i < count(get("searchKeyOption")) ; $i++ ): ?>
        <p><?=get("searchValueOption")[$i]?></p>
<?php endfor; ?>

