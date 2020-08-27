
<div class="container">
            
    <input id="mindate" type="text">
    
    <input id="Maxdate" type="text" data-range="true"
     data-multiple-dates-separator=" - " data-language="en" class="datepicker-here">

</div>

<script>
    $('#mindate').datepicker({
        language: 'en',
        minDate: new Date
    })
    var sel = $('#mindate').val();
    $('#mindate').on('change',function(){
        alert(sel);
    })
</script>




