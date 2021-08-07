<script>
    $(document).on('ready', function() { 
        function editUser() {
            var button = document.querySelector('.btn-edit-user');
            if (button.innerText == 'Chỉnh sửa hồ sơ') {
                document.querySelector('.user-info').style.display = 'none';
                document.querySelector('.user-info-edit').style.display = 'block';
                button.innerText = 'Cập nhật hồ sơ';
            }
        }

    })
</script>