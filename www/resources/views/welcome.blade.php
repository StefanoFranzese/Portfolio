
<x-layout.template>
    <div class="container mt-3 mt-md-5">
        <div class="row mb-5">
            <div class="col-12">
                <h1 id="cambioTesto" style="font-size: 64px" class=" text-white ">Front-End</h1>
                <h6 class=" text-white ">Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="row align-items-center my-5 py-5">
            <div class="col-12 col-md-5 text-white">
                <h2 class="mb-4"><a class="text-white text-decoration-none" href="#">Project  <i class="bi bi-arrow-up-right"></i> </a></h2>
                <h6 class="mb-4" style=" border-bottom: 1px solid white;">Category: Web Site</h6>
                <h6 class="mb-4" style=" border-bottom: 1px solid white;">Role: Full-Stack</h6>
                <h6 class="mb-4" style=" border-bottom: 1px solid white;">Team Size: Individual</h6>
            </div>
            <div class="col-1"></div>
            <div class="col-12 col-md-6">
                <img class="img-fluid" src="\img\1.jpg" alt="Immagine progetto uno">
            </div>
        </div>
        <div class="row align-items-center my-5 py-5">
            <div class="col-12 col-md-6">
                <img class="img-fluid" src="\img\3.gif" alt="Immagine progetto uno">
            </div>
            <div class="col-1"></div>
            <div class="col-12 col-md-5 text-white">
                <h2 class="mb-4"><a class="text-white text-decoration-none" href="#">Project2  <i class="bi bi-arrow-up-right"></i> </a></h2>
                <h6 class="mb-4" style=" border-bottom: 1px solid white;">Category: Web Site</h6>
                <h6 class="mb-4" style=" border-bottom: 1px solid white;">Role: Full-Stack</h6>
                <h6 class="mb-4" style=" border-bottom: 1px solid white;">Team Size: Individual</h6>
            </div>
        </div>
        <div class="row align-items-center my-5 py-5">
            <div class="col-12 col-md-5 text-white">
                <h2 class="mb-4"><a class="text-white text-decoration-none" href="#">Project3  <i class="bi bi-arrow-up-right"></i> </a></h2>
                <h6 class="mb-4" style=" border-bottom: 1px solid white;">Category: Web Site</h6>
                <h6 class="mb-4" style=" border-bottom: 1px solid white;">Role: Full-Stack</h6>
                <h6 class="mb-4" style=" border-bottom: 1px solid white;">Team Size: Individual</h6>
            </div>
            <div class="col-1"></div>
            <div class="col-12 col-md-6">
                <img class="img-fluid" src="\img\2.jpg" alt="Immagine progetto uno">
            </div>
        </div>
    </div>
    <x-slot name="scripts">
        <script>
            console.log("Script 1 is running.");
            document.addEventListener("DOMContentLoaded", function() {
                const changingTextElement = document.getElementById("cambioTesto");
                const texts = ["Front-End", "Back-End", "Full-Stack"];
                let currentIndex = 0;

                function changeText() {
                    changingTextElement.textContent = texts[currentIndex];
                    currentIndex = (currentIndex + 1) % texts.length;
                }
                setInterval(changeText, 1000); 
            });
        </script>
    </x-slot>
</x-layout.template>

