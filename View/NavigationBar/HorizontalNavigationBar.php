<?php
declare( strict_types = 1 );
namespace JasonWKeith\View\NavigationBar;


class HorizontalNavigationBar
{
    public function render()
    {
?>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">';
            <div class="container-fluid">
                <h2><a class="navbar-brand" href="#">JASON W KEITH</a></h2>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Who Am I</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Curriculum Vitae</a>
                        </li>                    
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Reading Notes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>  
<?php
    }
}