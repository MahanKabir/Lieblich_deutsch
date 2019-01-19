
<style>
    /*-footer---------------------------------------*/
    #footer{
        width: 100%;
        height: 250px;
        background-color: #005cbf;
        margin: auto;
        display: inline-flex;
    }

    /*-about---------------------------------------*/

    #about{
        width: 50%;
        background-color: #424242;
        text-align: right;
        direction: rtl;
    }
    #about h3{
        margin-right: 25px;
    }
    #about p{
        margin-right: 25px;
        direction: rtl;
    }
    /*-footer-menu---------------------------------------*/
    #footer_menu{
        width: 25%;
        background-color: #424242;
        text-align: right;
        direction: rtl;
    }
    #footer_menu h3{
        margin-right: 25px;
    }
    #footer_menu ul{
        list-style-type: none;
        margin-right: 25px;
    }
    #footer_menu ul li{
        text-align: right;
        direction: rtl;
    }
    /*---------------------------------------media screen-*/

    @media screen and (max-width: 840px) {
        #footer{
            width: 100%;
            height: 250px;
            display: inline;

            margin: 0;
            padding: 0;

        }
        #about,#footer_menu{
            width: 100%;
            height: 100px;
            margin: 0;
            padding: 0;
        }
        #footer_menu ul li{
            display: inline-flex;
            margin: 20px;
        }
    }
</style>


<div>
    <div id="footer">

        <div id="about">
            <h3>درباره وبسایت</h3>
            <hr width="75%">
            <p>

            </p>
        </div>
        <div id="footer_menu">
            <h3>بخش های وبسایت</h3>
            <hr width="75%">
            <ul>
                <li><a>کتب آموزشی</a></li>
                <li><a>فرهنگ لغت</a></li>
                <li>فیلم های آموزشی</li>
                <li>آهنگ های آلمانی</li>
                <li>دوره های آموزشی</li>
            </ul>
        </div>
        <div id="about">
            <h3>درباره وبسایت</h3>
            <hr width="75%">
            <p>
                ما با تکیه بر تکنولوژی و برپایه رسانه هایی که در اختیار داریم
                تمامی تلاش خود را بکار گرفته ایم که در زمان کوتاه و با کیفیت بالا
                بتوانیم شما را تا سطح پیشرفته بدرقه کنیم.
            </p>
        </div>

    </div>

    <div style="width: 100%; height: 75px; background-color: #212121;display: inline-flex; margin: auto">
        <div><img style="width: 25px;height: 25px;margin: 2.5px" src="/icons/instagram.png"></div>
        <div><img style="width: 25px;height: 25px;margin: 2.5px" src="/icons/instagram.png"></div>
        <div><img style="width: 25px;height: 25px;margin: 2.5px" src="/icons/instagram.png"></div>
        <div><img style="width: 25px;height: 25px;margin: 2.5px" src="/icons/instagram.png"></div>
    </div>

</div>
