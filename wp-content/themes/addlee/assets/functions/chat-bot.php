<!-- Fresh Chat Bot Start -->
<script>
  function initFreshChat() {
    window.fcWidget.init({
               token: "7d7fcc82-40f5-4156-91e1-2b324010a3d1",
              host: "https://addisonlee.freshchat.com"
    });
  }
  function initialize(i,t){var e;i.getElementById(t)?
  initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,
  e.src="https://addisonlee.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}
  function initiateCall(){initialize(document,"Freshchat-js-sdk")}
  window.addEventListener?window.addEventListener("load",initiateCall,!1):
  window.attachEvent("load",initiateCall,!1);
</script>

<!-- Fresh Chat Bot End -->