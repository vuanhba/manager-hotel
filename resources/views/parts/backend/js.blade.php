<script>
    $(document).ready(function() {
    $('#dataTable').DataTable();
});


$(function () {
    function readURL(input, index, isMultiple = false) {
        if (input.files[index]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                const imagePreview = `
                    <img src="${e.target.result}" alt="your image"
                    style="max-width: 300px; height:200px; margin-bottom: 10px;" class="img-fluid" />
                `;
                if (isMultiple) {
                    $("#images-preview").append(imagePreview);
                } else {
                    $("#image-preview").html(imagePreview);
                }
            };
            reader.readAsDataURL(input.files[index]);
        }
    }

    $(".image-input").change(function () {
        $(".image").empty(); // Clear previous preview
        let files = this.files;
        for (let i = 0; i < files.length; i++) {
            readURL(this, i);
        }
    });

    $(".image-inputs").change(function () {
        $(".images").empty(); // Clear previous previews
        let files = this.files;
        for (let i = 0; i < files.length; i++) {
            readURL(this, i, true);
        }
    });
});


