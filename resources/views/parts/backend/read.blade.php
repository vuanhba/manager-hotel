<script>
    $(function(){
            function readURL(input, selector) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();
        
                    reader.onload = function (e) {
                        $(selector).attr('src', e.target.result);
                    };
        
                    reader.readAsDataURL(input.files[0]);
                }
            }
             $("#cmt_truoc").change(function () {
                readURL(this, '#mat_truoc');
            });
            // $("#cmt_truocs").change(function () {
            //     readURL(this, '#mat_truocs');
            // });
         
        });
</script>