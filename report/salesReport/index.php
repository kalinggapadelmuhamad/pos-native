<?php

include '../../app/config/config.php';

if (isset($_POST)) {

    if (isset($_POST['month'])) {

        $month  = date('m');
        $year   = date('Y');

        //selct by month
        $selMonth   = "SELECT detailinvoice.*,  employes.* FROM detailinvoice, employes WHERE MONTH(inputDate) = '$month' AND YEAR(inputDate) = '$year' AND detailinvoice.idUser = employes.idUser ";
        $selMonthx  = $conn->query($selMonth);
        $selMonthr  = $selMonthx->num_rows;

        //sum by month
        $selDetinsum   = "SELECT detailinvoice.idDetailinvoice,
                                employes.fullName,
                                detailinvoice.noInvoice,
                                SUM(detailinvoice.qtyTotal) as totalQty,
                                SUM(detailinvoice.grandTotal) as subtotal,
                                detailinvoice.pay,
                                detailinvoice.change,
                                detailinvoice.inputDate
                                FROM detailinvoice, employes
                                WHERE MONTH(inputDate) = '$month' AND YEAR(inputDate) = '$year'
                                AND detailinvoice.idUser = employes.idUser;";

        $selDetinsumx  = $conn->query($selDetinsum);
        $selDetinsumd  = $selDetinsumx->fetch_object();

        //profit
        $selMonthR   = "SELECT detailinvoice.*,  employes.* FROM detailinvoice, employes WHERE MONTH(inputDate) = '$month' AND YEAR(inputDate) = '$year' AND detailinvoice.idUser = employes.idUser ";
        $selMonthRx  = $conn->query($selMonthR);

        $submodal = 0;

        while ($selMonthRxd = $selMonthRx->fetch_object()) {

            $selInvp     = "SELECT invoice.*, items.* FROM invoice, items WHERE invoice.noInvoice = '$selMonthRxd->noInvoice' AND invoice.idItems = items.idItems";
            $selInvpx    = $conn->query($selInvp);
            $selInvpxd   = $selInvpx->fetch_object();

            $totalmodal = $selInvpxd->capitalPrice * $selInvpxd->qty;
            $submodal   += $totalmodal;
        }

        if ($selMonthr > 0) {

            include '../../app/views/dashboard/report/month/month.php';
        } else {
        }

        //day
    } else if (isset($_POST['day'])) {

        $day   = date('d');
        $month = date('m');
        $year  = date('Y');

        //select by day
        $selDay     = "SELECT detailinvoice.*,  employes.* FROM detailinvoice, employes WHERE DAY(inputDate) = '$day' AND MONTH(inputDate) = '$month' AND YEAR(inputDate) = '$year' AND detailinvoice.idUser = employes.idUser";
        $selDayx    = $conn->query($selDay);
        $selDayr    = $selDayx->num_rows;

        //sum by day
        $selDetinsum   = "SELECT detailinvoice.idDetailinvoice,
                                employes.fullName,
                                detailinvoice.noInvoice,
                                SUM(detailinvoice.qtyTotal) as totalQty,
                                SUM(detailinvoice.grandTotal) as subtotal,
                                detailinvoice.pay,
                                detailinvoice.change,
                                detailinvoice.inputDate
                            FROM detailinvoice, employes
                            WHERE MONTH(inputDate) = '$month' AND YEAR(inputDate) = '$year' AND DAY(inputDate) = '$day'
                            AND detailinvoice.idUser = employes.idUser;";

        $selDetinsumx  = $conn->query($selDetinsum);
        $selDetinsumd  = $selDetinsumx->fetch_object();

        //profit
        $seldayR   = "SELECT detailinvoice.*,  employes.* FROM detailinvoice, employes WHERE DAY(inputDate) = '$day' AND MONTH(inputDate) = '$month' AND YEAR(inputDate) = '$year' AND detailinvoice.idUser = employes.idUser ";
        $seldayRx  = $conn->query($seldayR);

        $submodal = 0;

        while ($seldayRxd = $seldayRx->fetch_object()) {

            $selInvp     = "SELECT invoice.*, items.* FROM invoice, items WHERE invoice.noInvoice = '$seldayRxd->noInvoice' AND invoice.idItems = items.idItems";
            $selInvpx    = $conn->query($selInvp);
            $selInvpxd   = $selInvpx->fetch_object();

            $totalmodal = $selInvpxd->capitalPrice * $selInvpxd->qty;
            $submodal   += $totalmodal;
        }

        if ($selDayr > 0) {

            include '../../app/views/dashboard/report/day/day.php';
        } else {
        }

        //periode
    } else if (isset($_POST['periode'])) {

        $from = $_POST['from'];
        $to   = $_POST['to'];

        //select data by periode
        $selPeriod  = "SELECT detailinvoice.*, employes.* FROM detailinvoice, employes WHERE DATE(inputDate) BETWEEN '$from' AND '$to' AND detailinvoice.idUser = employes.idUser;";
        $selPeriodx = $conn->query($selPeriod);
        $selPeriodr = $selPeriodx->num_rows;

        //sum by periode
        $selDetinsum   = "SELECT detailinvoice.idDetailinvoice,
                                employes.fullName,
                                detailinvoice.noInvoice,
                                SUM(detailinvoice.qtyTotal) as totalQty,
                                SUM(detailinvoice.grandTotal) as subtotal,
                                detailinvoice.pay,
                                detailinvoice.change,
                                detailinvoice.inputDate
                            FROM detailinvoice, employes
                            WHERE DATE(inputDate) BETWEEN '$from' AND '$to'
                            AND detailinvoice.idUser = employes.idUser;";

        $selDetinsumx  = $conn->query($selDetinsum);
        $selDetinsumd  = $selDetinsumx->fetch_object();

        //profit
        $selPeriodR   = "SELECT detailinvoice.*,  employes.* FROM detailinvoice, employes WHERE DATE(inputDate) BETWEEN '$from' AND '$to' AND detailinvoice.idUser = employes.idUser ";
        $selPeriodRx  = $conn->query($selPeriodR);

        $submodal = 0;

        while ($selPeriodRxd = $selPeriodRx->fetch_object()) {

            $selInvp     = "SELECT invoice.*, items.* FROM invoice, items WHERE invoice.noInvoice = '$selPeriodRxd->noInvoice' AND invoice.idItems = items.idItems";
            $selInvpx    = $conn->query($selInvp);
            $selInvpxd   = $selInvpx->fetch_object();

            $totalmodal = $selInvpxd->capitalPrice * $selInvpxd->qty;
            $submodal   += $totalmodal;
        }

        if ($selPeriodr > 0) {

            include '../../app/views/dashboard/report/periode/periode.php';
        } else {
        }
    }
}
