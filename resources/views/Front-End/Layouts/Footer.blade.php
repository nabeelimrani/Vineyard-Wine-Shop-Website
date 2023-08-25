
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<script src="{{asset('front-end/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('front-end/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('front-end/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('front-end/js/sb-admin-2.min.js')}}"></script>
<script src="{{asset('front-end/vendor/chart.js/Chart.min.js')}}"></script>
<script src="https://cdn.tiny.cloud/1/YOUR_TINYMCE_API_KEY/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'link image code',
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | code',
        height: 300
    });
</script>
<script>
    const printButton = document.getElementById('print-button');
    printButton.addEventListener('click', () => {
        window.print();
    });
</script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="{{asset('front-end/js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('front-end/js/demo/chart-pie-demo.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
