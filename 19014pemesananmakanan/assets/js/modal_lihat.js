$('#ModalLihat').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Tombol yang memicu modal
    var userId = button.data('id'); // Ambil ID user dari tombol
    var modal = $(this);
    
    // Lakukan permintaan AJAX untuk mengambil data user berdasarkan ID
    $.ajax({
        url: 'get_user_details.php', // File untuk mengambil detail user
        type: 'GET',
        data: { id: userId },
        success: function(response) {
            modal.find('.modal-body').html(response);
        }
    });
});
