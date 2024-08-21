<div class="logo-container overflow-hidden py-6 bg-[#fff9ef] h-full relative">
    <h2 class="text-4xl font-bold mb-4 text-center pt-serif-regular">Our Client Trust</h2>
    <div class="logo-inner flex animate-slide">
        <img src="/assets/img/ajinomoto.png" alt="Logo 1" class="h-36 mx-12">
        <img src="/assets/img/burung-dara.png" alt="Logo 3" class="h-36 mx-12">
        <img src="/assets/img/cj.png" alt="Logo 4" class="h-36 mx-12">
        <img src="/assets/img/easy.png" alt="Logo 5" class="h-36 mx-12">
        <img src="/assets/img/garudafood.png" alt="Logo 6" class="h-36 mx-12">
        <img src="/assets/img/hokben.png" alt="Logo 7" class="h-36 mx-12">
        <img src="/assets/img/jco.png" alt="Logo 8" class="h-36 mx-12">
        <img src="/assets/img/jordan.png" alt="Logo 9" class="h-36 mx-12">
        <img src="/assets/img/mr-bread.png" alt="Logo 10" class="h-36 mx-12">
        <img src="/assets/img/myroti.png" alt="Logo 11" class="h-36 mx-12">
        <img src="/assets/img/nabati.png" alt="Logo 12" class="h-36 mx-12">
        <img src="/assets/img/nissin.png" alt="Logo 13" class="h-36 mx-12">
        <img src="/assets/img/pizza.png" alt="Logo 14" class="h-36 mx-12">
        <img src="/assets/img/pokphand.png" alt="Logo 15" class="h-36 mx-12">
        <img src="/assets/img/sari-roti.png" alt="Logo 16" class="h-36 mx-12">
        <img src="/assets/img/sharon.png" alt="Logo 17" class="h-36 mx-12">
        <img src="/assets/img/suzana.png" alt="Logo 18" class="h-36 mx-12">
        <img src="/assets/img/swiss.png" alt="Logo 19" class="h-36 mx-12">
        <img src="/assets/img/terigukita.png" alt="Logo 20" class="h-36 mx-12">
        <img src="/assets/img/tpsfood.png" alt="Logo 21" class="h-36 mx-12">
        <img src="/assets/img/wijaya.png" alt="Logo 22" class="h-36 mx-12">
        <img src="/assets/img/bolamas.png" alt="Logo 2" class="h-36 mx-12">
    </div>
</div>

<style>
    .logo-container {
        position: relative;
        overflow: hidden;
        max-width: 100%;
    }

    .logo-inner {
        display: flex;
        white-space: nowrap;
        will-change: transform;
    }

    .logo-inner::after {
        content: "";
        flex: 0 0 auto;
        width: 100%;
        height: 100%;
    }

    .animate-slide {
        animation: slide-left 28s linear infinite;
    }

    @keyframes slide-left {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-100%);
        }
    }
</style>
