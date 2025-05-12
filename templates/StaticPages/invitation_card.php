<script language="javascript" type="text/javascript">
    function printDiv(divID) {
        //Get the HTML of div
        var divElements = document.getElementById(divID).innerHTML;
        //Get the HTML of whole page
        var oldPage = document.body.innerHTML;

        //Reset the page's HTML with div's HTML only
        document.body.innerHTML =
            "<html><head><title></title></head><body>" +
            divElements + "</body>";

        //Print Page
        window.print();

        //Restore orignal HTML
        document.body.innerHTML = oldPage;
    }
</script>
<div id="card_image" >
    <img class="img-responsive" style="width: 100%" src="<?php echo Router::url('/', true); ?>assets/public/images/Invitation_Card.png" alt="">
</div>
<br>
<div style="text-align: center"><a class="btn btn-large btn-primary" href="<?php echo Router::url('/', true); ?>assets/public/images/Invitation_Card.png" download="Invitation_Card.png" id="download_card">Download</a>&nbsp;<button class="btn btn-large btn-success" onclick="javascript:printDiv('card_image')">Print</button></div>
<h2 style="color: #f00; text-align: center;">Please print it & bring it to the event</h2>