
    <div id="parcel-form" class="container">
        <h3>Already sent a parcel?</h3>
        <!--<form class="parcel-tracker" name="parcel-tracker" action="https://addlee.netcourier.net/" method="get">-->
            <!--<input type="hidden" name="module" value="track">-->
            <div class="col-md-4">
                <label for="hawb">Track your job</label>
            </div>
            <div class="col-md-4">
                <input type="text" id="hawb" onclick="doTrack();" onfocus="if (this.value == 'AWB Number') {this.value = '';}" onblur="if (this.value == '') {this.value = 'AWB Number';}" value="AWB Number" class="text watermark">
                <script>
                    function doTrack() {
                        var hawb = document.getElementById('hawb').value;
                        if (hawb)
                        window.location.href =
                        "https://addlee.netcourier.net/online/tracking/trackinginfo/"  + hawb;
                    }
                </script>
            </div>
            <div class="col-md-3">
                <button onclick="doTrack();" class="cta inverse">
                    <span>Find</span>
                </button>
            </div>
        <!--</form>-->
    </div>

    <div class="textwidget">
        <p class="enquiries">
            <span class="uppercase">Delivery Service Enquiries</span> 
            <span class="uppercase">020 7380 6010</span>
            <span>
                <a href="mailto:international@addisonlee.com">
                international@addisonlee.com
                </a>
            </span>
        </p>
    </div>
