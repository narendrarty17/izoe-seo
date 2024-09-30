<script src="https://izoe.in/bootstrap/js/jquery-slim.min.js"></script>
<script src="https://izoe.in/js/jquery-3.4.1.js"></script>
<script src="https://izoe.in/bootstrap/js/popper.min.js"></script>
<script src="https://izoe.in/owlcarousel/owl.carousel.min.js"></script>
<script src="https://izoe.in/bootstrap/js/bootstrap.min.js"></script>
<script src="https://izoe.in/js/custom.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    var contactModal = document.getElementById("contactModal");

    $(document).ready(function() {
        // Handle opening the modal for all buttons with class "openModalBtn"
        $('.openModalBtn').click(function(event) {
            event.preventDefault(); // Prevent the default link behavior
            $('#contactModal').modal('show');
        });
        
         $('#openModalBtn').click(function(event) {
            event.preventDefault(); // Prevent the default link behavior
            $('#contactModal').modal('show');
        });

        // Handle closing the modal
        $('#closeModalBtn').click(function() {
            $('#contactModal').modal('hide');
        });

        // Handle clicking outside the modal to close it
        $(window).click(function(event) {
            if (event.target === contactModal) {
                $('#contactModal').modal('hide');
            }
        });
    });
});
</script>