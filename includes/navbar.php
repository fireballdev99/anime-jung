<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'], ".php"); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-alpha fixed-top">
    <div class="container">
        <a class=" navbar-brand" href="index.php">
            <img src="assets/image/logo white.png" width="210" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto text-center">
                <li class="nav-item <?php echo $file_name == 'index' || $file_name == 'anime' ? 'active' : '' ?>">
                    <a class="nav-link" href="index.php">อนิเมะทั้งหมด<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item <?php echo $file_name == 'sub-th' ? 'active' : '' ?>">
                    <a class="nav-link" href="sub-th.php">ซับไทย</a>
                </li>
                <li class="nav-item <?php echo $file_name == 'th' ? 'active' : '' ?>">
                    <a class="nav-link" href="th.php">พากย์ไทย</a>
                </li>
                <li class="nav-item <?php echo $file_name == 'the-movie' ? 'active' : '' ?>">
                    <a class="nav-link" href="the-movie.php">เดอะมูฟวี่</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 jung-center">
                <input class="form-control mr-sm-2" type="search" placeholder="ค้นหา" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ค้นหาการ์ตูน</button>
            </form>
        </div>
    </div>
</nav>