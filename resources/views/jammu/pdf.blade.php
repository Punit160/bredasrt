<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-size: 14px;
        }

        @media print {

            /* / top-level divs with ids / */
            body>div[id] {
                page-break-before: always;
            }
        }
    </style>
</head>

<body>

    <!-- Annexure-1 -->
    <div id="page1" style="margin: 20px 20px 400px 20px;">
        <table style="width: 100%; border-collapse: collapse">
            <tbody>
                <tr style="text-align: right;">
                    <th style="text-decoration: underline;">
                        <p style="margin: 5px 80px 5px 5px;">Annexure-1</p>
                    </th>
                </tr>
                <tr style="text-align: center">
                    <th style="text-decoration: underline;">DETAILS OF AFTER SALE SERVICE CENTERS IN THE DISTRICT</th>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%; margin-top: 5rem; border-collapse: collapse">
            <tbody>
                <tr style="text-align: center; padding: 4rem 7rem 0 4rem;">
                    <td style="width: 15%;"></td>
                    <td style="width: 20%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">DISTRICT</span></td>
                    <td style="width: 5%; font-weight: 600;"><span style="font-size: 13px;">:</span></td>
                    <td style="width: 5%;"></td>
                    <td style="width: 45%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">{{ $jammus->first()->district }}</span></td>
                </tr>
                <tr style="text-align: center; padding: 4rem 7rem 0 4rem;">
                    <td style="width: 15%;"></td>
                    <td style="width: 20%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">NAME OF THE FIRM</span></td>
                    <td style="width: 5%; font-weight: 600;"><span style="font-size: 13px;">:</span></td>
                    <td style="width: 5%;"></td>
                    <td style="width: 45%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">KLK VENTURES Pvt. Ltd.</span></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 80%; margin-top: 5rem; border: 1px solid #000000; margin-left: auto; margin-right: auto; border-collapse: collapse">
            <thead>
                <tr>
                    <th style="width: 5%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">S. No.</th>
                    <th style="width: 35%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Name of Dealer/Culture</th>
                    <th style="width: 30%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Complete Address</th>
                    <th style="width: 30%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Name of Contact Person With Contact Number and e-mail ID</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width: 5%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">01</td>
                    <td style="width: 35%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">KLK Ventures Pvt. Ltd.</td>
                    <td style="width: 30%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">4<sup>th</sup> Floor, 2<sup>nd</sup> Flat, Trikuta Complex, Trikuta Nagar, Jammu</td>
                    <td style="width: 30%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">Sarteej-7501108320/1914010990 jammu@klkindia.com</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%; margin-top: 5rem; border-collapse: collapse">
            <tbody>
                <tr style="text-align: right;">
                    <td style="text-decoration: underline;">
                        <p style="margin: 5px 160px 5px 5px;">(Seal & Sig.)</p>
                    </td>
                </tr>
                <tr style="text-align: right;">
                    <td style="text-decoration: underline;">
                        <p style="margin: 5px 180px 5px 5px; margin-top: 0.2rem;">Vendor</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Annexure-2 -->
    <div id="page2" style="margin: 20px 20px 80px 20px;">
        <table border-collapse: collapse;">
            <tbody>
                <tr style="text-align: right;">
                    <th style="text-decoration: underline;">
                        <p style="margin: 5px 80px 5px 5px;">Annexure-2</p>
                    </th>
                </tr>
                <tr style="text-align: center">
                    <th style="text-decoration: underline;">HANDING OVER CERTIFICATE & WARRANT CARD</th>
                </tr>
                <tr style="text-align: center">
                    <th style="text-decoration: underline;">TO BE PROVIDED TO EACH BENEFICIARY</th>
                </tr>
                <tr style="text-align: left">
                    <td style="text-decoration: none;">
                        <p style="margin: auto; display: block; max-width: fit-content; margin-top: 10px;">It is hereby declared that the solar water pumping system with following details has been commissioned &</p>
                        <p style="margin: auto; display: block; max-width: fit-content;">handed over to the user in satisfactory working condition. It is further certified that the system has been</p>
                        <p style="margin: auto; display: block; max-width: fit-content; margin-bottom: 7px;">covered with five-year warranty as per the terms & conditions of the contract.</p>
                    </td>
                </tr>
            </tbody>
        </table>

        <table style="width: 90%; border: 1px solid #000000; margin: 10px auto 10px auto; border-collapse: collapse">
            <thead>
                <tr>
                    <th style="width: 5%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">S. No.</th>
                    <th style="width: 45%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Items</th>
                    <th style="width: 50%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Details</th>
                </tr>
            </thead>
            @php $all_module = DB::table('jammu_modules')->where('jammu_id', $jammus->first()->id )->get();@endphp
            <tbody>
                <tr>
                    <td style="width: 5%; border: 1px solid #000000; padding: 5px 5px 5px 20px;">1</td>
                    <td style="width: 45%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Pumps Capacity & Type</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">{{ $jammus->first()->p_pump_capacity }} HP / {{ $jammus->first()->p_pump_type }} / {{ $jammus->first()->p_pump_subtype }}</td>
                </tr>
                <tr>

                    <td style="width: 5%; border: 1px solid #000000; padding: 5px 5px 5px 20px;">2</td>
                    <td style="width: 45%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Work Order No.& Date</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">{{ $jammus->first()->work_order }} <br> {{$jammus->first()->work_order_date }}<br>
                        Dt:
                    </td>
                </tr>
                <tr>
                    <td style="width: 5%; border: 1px solid #000000; padding: 5px 5px 5px 20px;">3</td>
                    <td style="width: 45%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Pump No.Name of Beneficiary (with mobile number)</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">{{ $jammus->first()->f_customer_no }} / {{ $jammus->first()->f_farmer_name }} / {{ $jammus->first()->contact_number }}</td>
                </tr>
                <tr>
                    <td style="width: 5%; border: 1px solid #000000; padding: 5px 5px 5px 20px;">4</td>
                    <td style="width: 45%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Exact location on installation (latitude-longitude)</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">{{ $jammus->first()->s_latitude }} - {{ $jammus->first()->s_longitude }}</td>
                </tr>
                <tr>
                    <td style="width: 5%; border: 1px solid #000000; padding: 5px 5px 5px 20px;">5</td>
                    <td style="width: 45%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Date of installation</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">{{ $jammus->first()->f_file_submit_date }}</td>
                </tr>
                <tr>
                    <td style="width: 5%; border: 1px solid #000000; padding: 5px 5px 5px 20px;">6</td>
                    <td style="width: 45%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Warranty expires on</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">365 Days</td>
                </tr>
                <tr>
                    <td style="width: 5%; border: 1px solid #000000; padding: 5px 5px 5px 20px;">7</td>
                    <td style="width: 45%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Name & Address of the Manufacturer/Supplier of the system<br>
                        Contact number<br>
                        e-mail</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">M/S KLK VENTURES PVT. LTD.,NOIDA<br>
                        9354904191<br>
                        <span style="text-decoration: underline;">jammu@klkindia.com</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 5%; border: 1px solid #000000; padding: 5px 5px 5px 20px;">8</td>
                    <td style="width: 45%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">SPV Module installed Sr.No<br>
                        Make<br>
                        Model</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 0px 5px 0px 5px;font-size:9px">
                        @foreach($all_module as $mod )
                        {{$mod->sr_no}},
                        @endforeach
                        <br>
                        KLK
                    </td>
                </tr>
                <tr>
                    <td style="width: 5%; border: 1px solid #000000; padding: 5px 5px 5px 20px;">9</td>
                    <td style="width: 45%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Motor Pump Sr.No<br>
                        Model</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">{{ $jammus->first()->mt_motor_no}}</td>
                </tr>
                <tr>
                    <td style="width: 5%; border: 1px solid #000000; padding: 5px 5px 5px 20px;">10</td>
                    <td style="width: 45%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Motor Pump Controller Sr.No<br>
                        Make<br>
                        Model</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">{{ $jammus->first()->mt_controller_no }}/
                        KLK 
                      
                    </td>
                </tr>
                <tr>
                    <td style="width: 5%; border: 1px solid #000000; padding: 5px 5px 5px 20px;">11</td>
                    <td style="width: 45%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Mechanical component and installation as per NIT</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Yes</td>
                </tr>
                <tr>
                    <td style="width: 5%; border: 1px solid #000000; padding: 5px 5px 5px 20px;">12</td>
                    <td style="width: 45%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Earthing Provided</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Yes</td>
                </tr>
                <tr>
                    <td style="width: 5%; border: 1px solid #000000; padding: 5px 5px 5px 20px;">13</td>
                    <td style="width: 45%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Training for operation & maintenance of the system</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Provided</td>
                </tr>
                <tr>
                    <td style="width: 5%; border: 1px solid #000000; padding: 5px 5px 5px 20px;">14</td>
                    <td style="width: 45%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Technical literature operation & maintenance manual in
                        English/Hindi</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">Provided</td>
                </tr>
                <tr>
                    <td style="width: 5%; border: 1px solid #000000; padding: 5px 5px 5px 20px;">15</td>
                    <td style="width: 45%; border: 1px solid #000000; padding: 0px 5px 0px 5px;">In case of complaint dial number <span style="text-decoration: underline;">7051108320</span> or e-mail at
                        <span style="text-decoration: underline;">jammu@klkindia.com</span> for complaint lodging.
                    </td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 0px 5px 0px 5px;"></td>
                </tr>

            </tbody>
        </table>
        <table style="width: 100%; margin-top: 2rem; margin-bottom: 4rem; border-collapse: collapse">
            <tbody>
                <tr style="text-align: left;">
                    <td style="text-decoration: underline;">
                        <p style="margin: 5px 5px 5px 70px;">(Seal & Sig.)</p>
                    </td>
                    <td style="text-decoration: underline; text-align: right;">
                        <p style="margin: 5px 105px 5px 5px; ">Field Official, JAKEDA</p>
                    </td>
                </tr>
                <tr style="text-align: left;">
                    <td style="text-decoration: underline;">
                        <p style="margin: 5px 5px 5px 83px; ">Vendor</p>
                    </td>
                </tr>
                <!-- <tr style="text-align: right;">
                    <td style="text-decoration: underline;"><p style="margin: 5px 205px 5px 5px; ">Field Official, JAKEDA</p></td>
                </tr> -->
                <tr style="text-align: left;">a
                    <td style="text-decoration: underline;">
                        <p style="margin: 45px 5px 5px 70px; ">Sig.of Beneficiary</p>
                    </td>
                    <td style="text-decoration: underline; text-align: right;">
                        <p style="margin: 5px 105px 5px 5px;">C/S by Regional Officer<br> JAKEDA</p>
                    </td>
                </tr>
                <!-- <tr style="text-align: right;">
                    <td style="text-decoration: underline;"><p style="margin: 5px 205px 5px 5px;">C/S by Regional Officer<br> JAKEDA</p></td>
                </tr> -->
            </tbody>
        </table>
    </div>


    <!-- Annexure-3-->
    <div id="page3" style="margin: 20px 20px 90px 20px;">
        <table style="width: 100%; border-collapse: collapse">
            <tbody>
                <tr style="text-align: right;">
                    <th style="text-decoration: underline;">
                        <p style="margin: 5px 5px 5px 5px;">Annexure-3</p>
                    </th>
                </tr>
                <tr style="text-align: center">
                    <th style="text-decoration: underline;">JOINT COMMSSIONING REPORT (JCR) OF INDIVIDUAL</th>
                </tr>
                <tr style="text-align: center">
                    <th style="text-decoration: underline;">BENEFICIARY/Vendor/JAKEDA Official</th>
                </tr>
                <tr style="text-align: center">
                    <th style="text-decoration: underline;">(To be kept in district office)</th>
                </tr>
            </tbody>
        </table>
        <table style="width: 80%; margin-top: 5rem; border: 1px solid #000000; margin-left: auto; margin-right: auto; border-collapse: collapse">
            <tbody>
                <tr>
                    <td style="width: 50%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">Name of system</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">
                        <p>{{ $jammus->first()->p_pump_capacity }} HP, {{ $jammus->first()->p_pump_type }} TYPE</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">Work order no. & date</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">{{ $jammus->first()->work_order }}
                    <br>Dt : {{$jammus->first()->work_order_date }}<br>
                        
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">Supplier</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">KLK VENTURES PVT LTD, NOIDA</td>
                </tr>
                <tr>
                    <td style="width: 50%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">Date of supply of Material by the firm</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">{{ $jammus->first()->m_date }}</td>
                </tr>
                <tr>
                    <td style="width: 50%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">Date of complete installation and commission of the system(s) by the firm.</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">{{ $jammus->first()->f_file_submit_date }}</td>
                </tr>
                <tr>
                    <td style="width: 50%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">Date of Handing over the system(s) to the beneficiary</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">{{ $jammus->first()->f_file_submit_date }}</td>
                </tr>
                <tr>
                    <td style="width: 50%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">Details of Beneficiary: (Pump No., Name Address etc. )</td>
                    <td style="width: 50%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">{{ $jammus->first()->f_customer_no }}/{{ $jammus->first()->f_farmer_name }}/{{ $jammus->first()->contact_number }}</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2" style="border: 1px solid #000000; padding: 10px 10px 10px 10px;">
                        <p>Certified that ONE no of {{ $jammus->first()->p_pump_capacity }} HP {{ $jammus->first()->p_pump_type }} {{ $jammus->first()->p_pump_subtype }}  Solar water Pumping Systems in reference to work order no - {{ $jammus->first()->work_order }} Dated - {{$jammus->first()->work_order_date }} and further pre-dispatch inspection carried out on Dated - {{ $jammus->first()->f_inspect_date }} has been installed and commissioned at the place mentioned above and taken over the system by beneficiary in working condition.</p>
                    </td>
                </tr>
            </tfoot>
        </table>
        <table style="width: 100%; margin-top: 2rem; margin-bottom: 4rem; border-collapse: collapse">
            <tbody>
                <tr style="text-align: left;">
                    <td style="text-decoration: underline;">
                        <p style="margin: 5px 5px 5px 70px;">(Seal & Sig.)</p>
                    </td>
                    <td style="text-decoration: underline; text-align: right;">
                        <p style="margin: 5px 105px 5px 5px; ">Field Official, JAKEDA</p>
                    </td>
                </tr>
                <tr style="text-align: left;">
                    <td style="text-decoration: underline;">
                        <p style="margin: 5px 5px 5px 83px; ">Vendor</p>
                    </td>
                </tr>
                <!-- <tr style="text-align: right;">
                    <td style="text-decoration: underline;"><p style="margin: 5px 205px 5px 5px; ">Field Official, JAKEDA</p></td>
                </tr> -->
                <tr style="text-align: left;">
                    <td style="text-decoration: underline;">
                        <p style="margin: 45px 5px 5px 70px; ">Sig.of Beneficiary</p>
                    </td>
                    <td style="text-decoration: underline; text-align: right;">
                        <p style="margin: 5px 105px 5px 5px;">C/S by Regional Officer<br> JAKEDA</p>
                    </td>
                </tr>
                <!-- <tr style="text-align: right;">
                    <td style="text-decoration: underline;"><p style="margin: 5px 205px 5px 5px;">C/S by Regional Officer<br> JAKEDA</p></td>
                </tr> -->
            </tbody>
        </table>
    </div>


    <!-- Annexure-4-1 -->
    <div id="page4" style="margin: 20px 20px 40px 20px;">
        <table style="width: 100%; border-collapse: collapse">
            <tbody>
                <tr style="text-align: right;">
                    <th style="text-decoration: underline;">
                        <p style="margin: 5px 80px 5px 5px;">Annexure-4</p>
                    </th>
                </tr>
                <tr style="text-align: center">
                    <th style="text-decoration: underline;">JOINT COMMSSIONING REPORT (JCR)</th>
                </tr>
                <tr style="text-align: center">
                    <th style="text-decoration: underline;">(To be submitted to Central Office, JAKEDA)</th>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%; margin-top: 5rem; border-collapse: collapse">
            <tbody>
                <tr style="text-align: center; padding: 4rem 7rem 0 4rem;">
                    <td style="width: 15%;"></td>
                    <td style="width: 20%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">Name of District</span></td>
                    <td style="width: 5%; font-weight: 600;"><span style="font-size: 13px;">:  </span></td>
                    <td style="width: 5%;"></td>
                    <td style="width: 45%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">{{ $jammus->first()->district }}</span></td>
                </tr>
                <tr style="text-align: center; padding: 4rem 7rem 0 4rem;">
                    <td style="width: 15%;"></td>
                    <td style="width: 20%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">Name of Item</span></td>
                    <td style="width: 5%; font-weight: 600;"><span style="font-size: 13px;">:</span></td>
                    <td style="width: 5%;"></td>
                    <td style="width: 45%; font-weight: 600; text-align: left;"><span style="font-size: 13px;"></span></td>
                </tr>
                <tr style="text-align: center; padding: 4rem 7rem 0 4rem;">
                    <td style="width: 15%;"></td>
                    <td style="width: 20%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">NAME OF THE FIRM</span></td>
                    <td style="width: 5%; font-weight: 600;"><span style="font-size: 13px;"></span></td>
                    <td style="width: 5%;"></td>
                    <td style="width: 45%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">KLK VENTURES Pvt. Ltd.</span></td>
                </tr>
                <tr style="text-align: center; padding: 4rem 7rem 0 4rem;">
                    <td style="width: 15%;"></td>
                    <td style="width: 20%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">Work order no. and date</span></td>
                    <td style="width: 5%; font-weight: 600;"><span style="font-size: 13px;">:</span></td>
                    <td style="width: 5%;"></td>
                    <td style="width: 45%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">{{ $jammus->first()->work_order }}/{{ $jammus->first()->work_order_date }}</span></td>
                </tr>
                <tr style="text-align: center; padding: 4rem 7rem 0 4rem;">
                    <td style="width: 15%;"></td>
                    <td style="width: 20%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">Total Quantity (as per work order)</span></td>
                    <td style="width: 5%; font-weight: 600;"><span style="font-size: 13px;">:</span></td>
                    @php $qty_count = DB::table('jammus')->where('work_order', $jammus->first()->work_order)->count(); @endphp
                    <td style="width: 5%;"></td>
                    <td style="width: 45%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">{{$qty_count}}</span></td>
                </tr>
                <tr style="text-align: center; padding: 4rem 7rem 0 4rem;">
                    <td style="width: 15%;"></td>
                    <td style="width: 20%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">Quantity ordered for district</span></td>
                    <td style="width: 5%; font-weight: 600;"><span style="font-size: 13px;">: </span></td>
                    <td style="width: 5%;"></td>
                    <td style="width: 45%; font-weight: 600; text-align: left;"><span style="font-size: 13px;"> {{ $jammus->first()->district }}</span></td>
                </tr>
                <tr style="text-align: center; padding: 4rem 7rem 0 4rem;">
                    <td style="width: 15%;"></td>
                    <td style="width: 20%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">Details of Beneficiaries</span></td>
                    <td style="width: 5%; font-weight: 600;"><span style="font-size: 13px;">:</span></td>
                    <td style="width: 5%;"></td>
                    <td style="width: 45%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">{{ $jammus->first()->f_customer_no }}/{{ $jammus->first()->f_farmer_name }}/{{ $jammus->first()->contact_number }}</span></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 80%; margin-top: 5rem; border: 1px solid #000000; margin-left: auto; margin-right: auto; border-collapse: collapse">
            <tbody>
                <tr>
                    <th style="width: 12.5%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">Pump No.</th>
                    <th style="width: 12.5%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">Name of Beneficiary</th>
                    <th style="width: 12.5%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">Complete Address</th>
                    <th style="width: 12.5%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">Contact No</th>
                    <th style="width: 12.5%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">Date of predispatch inspection</th>
                    <th style="width: 12.5%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">Date of supply of material</th>
                    <th style="width: 12.5%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">Date of complete installation and commission inq</th>
                    <th style="width: 12.5%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">Delay if any (in days)</th>
                </tr>
                <tr>
                    <th style="width: 12.5%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">{{ $jammus->first()->f_customer_no }}</th>
                    <th style="width: 12.5%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">{{ $jammus->first()->f_farmer_name }}</th>
                    <th style="width: 12.5%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">{{ $jammus->first()->district }},
                    {{ $jammus->first()->post }},
                    {{ $jammus->first()->district }},
                    {{ $jammus->first()->village }},
                    {{ $jammus->first()->tehsil }},
                    {{ $jammus->first()->f_pin }}</th>
                    <th style="width: 12.5%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">{{ $jammus->first()->contact_number }}</th>
                    <th style="width: 12.5%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">{{ $jammus->first()->f_inspect_date }}</th>
                    <th style="width: 12.5%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">{{ $jammus->first()->m_date }}</th>
                    <th style="width: 12.5%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">{{ $jammus->first()->f_file_submit_date }}</th>
                    <th style="width: 12.5%; border: 1px solid #000000; padding: 10px 10px 10px 10px;">0</th>
                </tr>
            </tbody>
        </table>
        <p style="margin-left: 2rem;">It is certified that</p>
        <p style="margin-left: 2rem;">1. The above said 1 Nos. of {{ $jammus->first()->p_pump_capacity }} HP/{{ $jammus->first()->p_pump_type }}/{{ $jammus->first()->p_pump_subtype }} Type solar water Pumping systems in reference to<br>
            the said work order have been installed and commissioned at the places mentioned and taken over the<br>
            system by beneficiary in good working condition and the beneficiaries have given this in writing.
        </p>
        <p style="margin-left: 2rem;">2. The firm has also submitted the RMS data and Geo-tagged photographs of each site. </p>
        <p style="margin-left: 2rem;">3. The firm has provided Operation, Instruction and Maintenance Manual to the individual beneficiary</p>
        <p style="margin-left: 2rem;">4. The firm has submitted the report with labelled photograph regard completion of village community<br>
            training awareness/sensitization capacity building measures undertaken and development of<br>
            entrepreneurship etc. in each village.
        </p>
        <p style="margin-left: 2rem;">5. The firm has submitted the handing over certificates of solar photovoltaic water pumping system duly<br>
            signed by beneficiary and has been duly certified by JAKEDA Official.
        </p>
        <p style="margin-left: 2rem;">6. The firm has submitted the Performance report for 1 day after commissioning based on data received<br>
            from remote monitoring system or data logger in cases where internet services are not available.
        </p>
        <p style="margin-left: 2rem;">7. The firm has submitted the undertaking certifying that the civil work will withstand the wind speed of<br>
            150 km/hr or for load combination as per IS875 part-V,1997 whichever is critical for a specific region in<br>
            all weather conditions.
        </p>
    </div>


    <!-- Annexure-4-2 -->
    <div id="page42" style="margin: 20px 20px 600px 20px;">
        <p style="margin-left: 2rem; margin-top: 4rem;">8. The Certificate from IAKEDA Official have been issued to the said beneficiaries. Also, the Handing<br>
            Over Certificate & Warranty Card have been provided to each beneficiary.
        </p>
        <p style="margin-left: 2rem;">9. The firm submitted the insurance details/certificate of the said beneficiaries.</p>

        <table style="width: 100%; margin-top: 2rem; margin-bottom: 4rem; border-collapse: collapse">
            <tbody>
                <tr style="text-align: left;">
                    <td style="text-decoration: underline;">
                        <p style="margin: 5px 5px 5px 70px;">(Seal & Sig.)</p>
                        <p style="margin: 25px 5px 5px 83px; ">Vendor</p>
                    </td>
                    <td style="text-decoration: underline; text-align: right;">
                        <p style="margin: 65px 105px 5px 5px; ">(Seal & Sig.)</p>
                        <p style="margin: 15px 105px 5px 5px; ">Field Official,</p>
                        <p style="margin: 15px 115px 5px 5px; ">JAKEDA</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Annexure-5 -->
    <div id="page5" style="margin: 20px 20px 400px 20px;">
        <table style="width: 100%; border-collapse: collapse">
            <tbody>
                <tr style="text-align: right;">
                    <th style="text-decoration: underline;">
                        <p style="margin: 5px 80px 5px 5px;">Annexure-5</p>
                    </th>
                </tr>
                <tr style="text-align: center">
                    <th style="text-decoration: underline;">Certificate from Regional Officer, JAKEDA</th>
                </tr>
            </tbody>
        </table>
        <p style="margin-left: 2rem; margin-top: 2rem;">Following are certified in reference to work order no  - {{ $jammus->first()->work_order }} dated - {{ $jammus->first()->work_order_date }}<br>
            for supply installation & commissioning of 1/2/5/7.5/10 HP Solar Water Pumping<br> System installed by the supplier Mr. {{ $jammus->first()->c_contractor_name }}.
        </p>
        <p style="margin-left: 2rem; margin-top: 0.5rem;">1. The material supplied is as per pre-dispatch inspection clearance of the approved team of MNRE/ JAKEDA.</p>
        <p style="margin-left: 2rem; margin-top: 0.5rem;">2. The system has been installed & commissioned in good condition as per technical specification of<br> tender document.</p>
        <p style="margin-left: 2rem; margin-top: 0.5rem;">3. The work has been completed on dated {{ $jammus->first()->f_file_submit_date }} (With in stipulated period /<br> with a delay of zero days)</p>
        <p style="margin-left: 2rem; margin-top: 0.5rem;">4. Instruction Manual and Guarantee Card have been provided to beneficiaries.</p>
        <p style="margin-left: 2rem; margin-top: 0.5rem;">5. The Supplier hds provided basic training to the beneficiaries for routine care & maintenance of the<br> system / plant.</p>
        <p style="margin-left: 2rem; margin-top: 0.5rem;">6. The name, complete address, contact person and contact number along with e-mail address of the<br>
            supplier has been provided to thebeneficiaries.</p>
        <table style="width: 100%; margin-top: 2rem; margin-bottom: 4rem; border-collapse: collapse">
            <tbody>
                <tr style="text-align: left;">
                    <td style="text-decoration: underline; text-align: right;">
                        <p style="margin: 65px 105px 5px 5px; ">(Seal & Sig.)</p>
                        <p style="margin: 15px 90px 5px 5px; ">Regional Official,</p>
                        <p style="margin: 15px 115px 5px 5px; ">JAKEDA</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>



    <!-- Annexure-6 -->
    <div id="page6" style="margin: 20px 20px 80px 20px;">
        <table style="width: 100%; border-collapse: collapse">
            <tbody>
                <tr style="text-align: right;">
                    <th style="text-decoration: underline;">
                        <p style="margin: 5px 80px 5px 5px;">Annexure-6</p>
                    </th>
                </tr>
                <tr style="text-align: center">
                    <th style="text-decoration: underline;">QUARTERLY PROGRESS/INSPECTION REPORT</th>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%; margin-top: 2rem; border-collapse: collapse">
            <tbody>
                <tr style="text-align: center; padding: 4rem 7rem 0 4rem;">
                    <td style="width: 15%;"></td>
                    <td style="width: 20%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">District</span></td>
                    <td style="width: 5%; font-weight: 600;"><span style="font-size: 13px;">:</span></td>
                    <td style="width: 5%;"></td>
                    <td style="width: 45%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">{{ $jammus->first()->district }}</span></td>
                </tr>
                <tr style="text-align: center; padding: 4rem 7rem 0 4rem;">
                    <td style="width: 15%;"></td>
                    <td style="width: 20%; font-weight: 600; text-align: left;"><span style="font-size: 13px;">NAME OF THE FIRM</span></td>
                    <td style="width: 5%; font-weight: 600;"><span style="font-size: 13px;">:</span></td>
                    <td style="width: 5%;"></td>
                    <td style="width: 45%; font-weight: 600; text-align: left;"><span style="font-size: 13px;"> {{ $jammus->first()->c_firm }}</span></td>
                </tr>
            </tbody>
        </table>
        <p style="margin-left: 2rem; margin-top: 2rem;">It is certified that the said firm has installed a total of {{$qty_count}} nos. of {{ $jammus->first()->p_pump_capacity }} HP 
            capacity {{ $jammus->first()->p_pump_type }} / {{ $jammus->first()->p_pump_subtype }} <br> type solar water pumping system in the District {{ $jammus->first()->district }}.
        </p>
        <p style="margin-left: 2rem; margin-top: 1rem;">Out of total {{$qty_count}} nos.of system {{$qty_count}} systems are working satisfactory and the remaining 0 nos.of systems are out of order as per details given below:
        </p>
        <table style="width: 100%; margin-top: 3rem; border-collapse: collapse; border: 1px solid black;">
            <thead>
                <tr>
                    <th style="padding: 5px 5px 5px 5px; border: 1px solid black; width: 10%;">Sr. No.</th>
                    <th style="padding: 5px 5px 5px 5px; border: 1px solid black; width: 15%;">Pump No.</th>
                    <th style="padding: 5px 5px 5px 5px; border: 1px solid black; width: 15%;">Name of Beneficiary & Address</th>
                    <th style="padding: 5px 5px 5px 5px; border: 1px solid black; width: 15%;">Contact No.</th>
                    <th style="padding: 5px 5px 5px 5px; border: 1px solid black; width: 15%;">Out of order sonce (date)</th>
                    <th style="padding: 5px 5px 5px 5px; border: 1px solid black; width: 15%;">Nature of defect</th>
                    <th style="padding: 5px 5px 5px 5px; border: 1px solid black; width: 15%;">Delay in repair (more than 3 days)(in days)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 10%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                </tr>
                <tr>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 10%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                </tr>
                <tr>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 10%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                </tr>
                <tr>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 10%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                </tr>
                <tr>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 10%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                    <td style="padding: 25px 5px 25px 5px; border: 1px solid black; width: 15%;"></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%; margin-top: 2rem; margin-bottom: 4rem; border-collapse: collapse">
            <tbody>
                <tr style="text-align: left;">
                    <td style="text-decoration: underline;">
                        <p style="margin: 5px 5px 5px 70px;">(Seal & Sig.)</p>
                        <p style="margin: 25px 5px 5px 83px; ">Vendor</p>
                    </td>
                    <td style="text-decoration: underline; text-align: right;">
                        <p style="margin: 65px 105px 5px 5px; ">(Sig. of Field Official, JAKEDA)</p>
                        <p style="margin: 15px 105px 5px 5px; ">Name: </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-decoration: underline; text-align: center;">
                        <p style="margin: 65px 105px 5px 5px; text-align: center;">Regional Officer, JAKEDA</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Annexure-7 -->
    <div id="page7" style="margin: 20px 20px 80px 20px;">
        <table style="width: 100%; border-collapse: collapse">
            <tbody>
                <tr style="text-align: right;">
                    <th style="text-decoration: underline;">
                        <p style="margin: 5px 80px 5px 5px;">Annexure-7</p>
                    </th>
                </tr>
                <tr style="text-align: center">
                    <th style="text-decoration: underline;">Check List For Submission Of Invoice</th>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%; border-collapse: collapse; margin-top: 2rem;">
            <thead>
                <tr>
                    <th style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 10%;">Sr.No</th>
                    <th style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 70%;">Description</th>
                    <th style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 20%;">Submitted/Not Submitted</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 5px 5px 5px 20px; border: 1px solid #000000; width: 10%;">01</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 70%;">Submission of detailed work plan (Project execution plan) within timeline for the lot supplied duly a JAKEDA.</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 20%;"></td>
                </tr>
                <tr>
                    <td style="padding: 5px 5px 5px 20px; border: 1px solid #000000; width: 10%;">02</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 70%;">Submission of evidence in hard copy regarding completion of installation of SWPS in good condition at site duly verified and acknowledged by JAKEDA and the beneficiary.</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 20%;"></td>
                </tr>
                <tr>
                    <td style="padding: 5px 5px 5px 20px; border: 1px solid #000000; width: 10%;">03</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 70%;">Submission of original supply invoices/Bills duly verifi ed/certifi ed by JAKEDA.</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 20%;"></td>
                </tr>
                <tr>
                    <td style="padding: 5px 5px 5px 20px; border: 1px solid #000000; width: 10%;">04</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 70%;">Submission of report supported with labelled photograph on completion of village community training awareness/ sensitization capacity building measures undertaken and development of entrepreneurship etc. in each village with relevant photographs.</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 20%;"></td>
                </tr>
                <tr>
                    <td style="padding: 5px 5px 5px 20px; border: 1px solid #000000; width: 10%;">05</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 70%;">Submission of installation and commissioning report as per prescribed format of JAKEDA with RMS data Geo-tagged Photographs.</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 20%;"></td>
                </tr>
                <tr>
                    <td style="padding: 5px 5px 5px 20px; border: 1px solid #000000; width: 10%;">06</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 70%;">Operation and Maintenance manual to be provided to each beneficiaries.</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 20%;"></td>
                </tr>
                <tr>
                    <td style="padding: 5px 5px 5px 20px; border: 1px solid #000000; width: 10%;">07</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 70%;">Submission of handing over certificates of so photovoltaic water pumping system signed by beneficiary and duly certified by JAKEDA'</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 20%;"></td>
                </tr>
                <tr>
                    <td style="padding: 5px 5px 5px 20px; border: 1px solid #000000; width: 10%;">08</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 70%;">Performance report for l day after commissioning based on data received from data logger.</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 20%;"></td>
                </tr>
                <tr>
                    <td style="padding: 5px 5px 5px 20px; border: 1px solid #000000; width: 10%;">09</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 70%;">An undertaking shall need to be submitted by the Contractor certifying that the civil work will withstand the wind speed of 150 km/hr in all weather conditions or for load combination as per IS-875 part-V,1997 whichever is critical for a specific region.</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 20%;"></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%; margin-top: 2rem; margin-bottom: 4rem; border-collapse: collapse">
            <tbody>
                <tr style="text-align: left;">
                    <td style="text-decoration: underline;">
                        <p style="margin: 5px 5px 5px 70px;">(Seal & Sig.)</p>
                        <p style="margin: 25px 5px 5px 83px; ">Vendor</p>
                    </td>
                    <td style="text-decoration: underline; text-align: right;">
                        <p style="margin: 65px 105px 5px 5px; ">(Sig. of Field Official, JAKEDA)</p>
                        <p style="margin: 15px 105px 5px 5px; ">Name: </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-decoration: underline; text-align: center;">
                        <p style="margin: 65px 105px 5px 5px; text-align: center;">Regional Officer, JAKEDA</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Annexure-8 -->
    <div id="page8" style="margin: 20px 20px 80px 20px;">
        <table style="width: 100%; border-collapse: collapse">
            <tbody>
                <tr style="text-align: right;">
                    <th style="text-decoration: underline;">
                        <p style="margin: 5px 80px 5px 5px;">Annexure-8</p>
                    </th>
                </tr>
                <tr style="text-align: center">
                    <th style="text-decoration: underline;">Check list for submission of invoice</th>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%; border-collapse: collapse; margin-top: 2rem;">
            <thead>
                <tr>
                    <th style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 10%;">Sr.No</th>
                    <th style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 70%;">Description</th>
                    <th style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 20%;">Submitted/Not Submitted</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 5px 5px 5px 20px; border: 1px solid #000000; width: 10%;">01</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 70%;">All the relevant Warranty and Quality (performance test reports) of the lot to be submitted.</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 20%;"></td>
                </tr>
                <tr>
                    <td style="padding: 5px 5px 5px 20px; border: 1px solid #000000; width: 10%;">02</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 70%;">Signing of contract agreement with the Department.</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 20%;"></td>
                </tr>
                <tr>
                    <td style="padding: 5px 5px 5px 20px; border: 1px solid #000000; width: 10%;">03</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 70%;">Submission of Contract Performance Guarantee (CPG) as per relevant CPG clause to JAKEDA.</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 20%;"></td>
                </tr>
                <tr>
                    <td style="padding: 5px 5px 5px 20px; border: 1px solid #000000; width: 10%;">04</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 70%;">Performance report for 1 day after commissioning based on data received from remote monitoring system or data logger in case where internet services are not available.</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 20%;"></td>
                </tr>
                <tr>
                    <td style="padding: 5px 5px 5px 20px; border: 1px solid #000000; width: 10%;">05</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 70%;">An undertaking shall need to be submitted by the Contractor certifying that the civil work will withstand the wind speed of 150 km/hr in all weather conditions or for load combination as per IS-875 part-V,1997 whichever is critical for a specific region.</td>
                    <td style="padding: 5px 5px 5px 5px; border: 1px solid #000000; width: 20%;"></td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%; margin-top: 6rem; margin-bottom: 4rem; border-collapse: collapse">
            <tbody>
                <tr style="text-align: left;">
                    <td style="text-decoration: underline;">
                        <p style="margin: 5px 5px 5px 70px;">(Seal & Sig.)</p>
                        <p style="margin: 25px 5px 5px 83px; ">Vendor</p>
                    </td>
                    <td style="text-decoration: underline; text-align: right;">
                        <p style="margin: 65px 105px 5px 5px; ">T.O</p>
                        <p style="margin: 15px 105px 5px 5px; ">JAKEDA</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-decoration: underline; text-align: center;">
                        <p style="margin: 65px 105px 5px 5px; text-align: center;">Executive Engineer, JAKEDA</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>