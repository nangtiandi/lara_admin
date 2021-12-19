@if(session('status'))
    <script>
        let sessionAlert = @json(session('status'));
        const Toast = Swal.mixin({
            toast: true,
            position: 'center',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: sessionAlert.icon,
            title: sessionAlert.title
        })
    </script>
@endif
