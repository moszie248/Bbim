$(function(){
    var provinceObject = $('#province');
    var districtObject = $('#district');
    var subdistrictObject = $('#subdistrict');
 
    // on change province
    provinceObject.on('change', function(){
        var provinceId = $(this).val();
        console.log(provinceId);
 
        districtObject.html('<option value=""> --- เลือกอำเภอ --- </option>');
        subdistrictObject.html('<option value=""> --- เลือกตำบล --- </option>');
 
        $.get('get_district.php?province_id=' + provinceId, function(data){
            var result = JSON.parse(data);
            $.each(result, function(index, item){
                districtObject.append(
                    $('<option></option>').val(item.district_id).html(item.district_name)
                );
            });
        });
    });
 
    // on change amphure
    districtObject.on('change', function(){
        var districtId = $(this).val();
 
        subdistrictObject.html('<option value=""> --- เลือกตำบล --- </option>');
        
        $.get('get_subdistrict.php?district_id=' + districtId, function(data){
            var result = JSON.parse(data);
            $.each(result, function(index, item){
                subdistrictObject.append(
                    $('<option></option>').val(item.subdistrict_id).html(item.subdistrict_name)
                );
            });
        });
    });
});    

