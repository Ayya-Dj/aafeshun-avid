<style type="text/css">
    .lds-ripple {
      margin: -40px;
      width: 80px;
      height: 80px;
    }
    .lds-ripple div {
      position: absolute;
      border: 4px solid #34e1eb;
      opacity: 1;
      border-radius: 50%;
      animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
    }
    .lds-ripple div:nth-child(2) {
      animation-delay: -0.5s;
    }
    @keyframes lds-ripple {
      0% {
        top: 36px;
        left: 36px;
        width: 0;
        height: 0;
        opacity: 1;
      }
      100% {
        top: 0px;
        left: 0px;
        width: 72px;
        height: 72px;
        opacity: 0;
      }
    }

</style>
<div class="min-h-screen w-full af-bg fixed top-0 left-0 loader" style="z-index: 100;">
    <div class="lds-ripple top-1/2 right-1/2 fixed"><div></div><div></div></div>
</div>