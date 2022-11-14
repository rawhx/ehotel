@if (session()->has('berhasil'))
<script>alert('{{session("berhasil")}}')</script>
@endif

@if (session()->has('gagalp'))
<script>alert('{{session("gagalp")}}')</script>
@endif

@if (session()->has('login'))
<script>alert('{{session("login")}}')</script>
@endif

@if (session()->has('gagal'))
<script>alert('{{session("gagal")}}')</script>
@endif

@if (session()->has('logout'))
<script>alert('{{session("logout")}}')</script>
@endif


