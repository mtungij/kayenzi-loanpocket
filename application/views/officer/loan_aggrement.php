<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOMU YA MAOMBI YA MKOPO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2, h3 {
            text-align: center;
            margin: 10px 0;
        }

        .section {
            margin-bottom: 5px;
        }

        .signature {
            margin-top: 10px;
        }

        .header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .passport-box {
            flex: 0 0 auto;
        }

        .passport {
            width: 100px;
            height: 120px;
            object-fit: cover;
            border: 1px solid #000;
        }

        .logo {
            flex: 1 1 100%;
            text-align: center;
            margin: 10px 0;
        }

        @media (min-width: 640px) {
            .logo {
                flex: 1 1 auto;
                margin: 0;
            }
        }
    </style>
</head>
<body>

    <div class="header">
        <div class="passport-box left">
            <img src="<?= $customer->passport; ?>" alt="Passport Left" class="passport">
        </div>

        <div class="logo">
            <img src="<?= $compdata->comp_logo ?>" alt="Company Logo" width="150">
        </div>

        <div class="passport-box right">
            <img src="<?= $customer->passport; ?>" alt="Passport Right" class="passport">
        </div>
    </div>

    <h2>FOMU YA MAOMBI YA MKOPO</h2>   
    
    <div class="section">
        <p>Mkataba huu umefanyika leo tarehe <strong>…………</strong> mwezi <strong>……...</strong> mwaka <strong>20……</strong></p>
        <p>Kati ya <b><?= strtoupper($compdata->comp_name) ?></b> wa <b><?= $compdata->adress ?></b>, kampuni iliyosajiliwa Tanzania (Ambaye katika Mkataba huu utajulikana kama <b>Mkopeshaji</b>) Na <b><?= strtoupper($customer->f_name . " " . $customer->m_name . " " . $customer->l_name) ?></b> (ambaye katika mkataba huu atajulikana kama <strong>mkopaji</strong>) ambaye ni mkazi wa wilaya <b><?= $customer->district ?></b> kata ya <b><?= $customer->ward ?></b> mtaa wa <b><?= $customer->street ?></b> Simu: <?= $customer->phone_no; ?>.</p>
        <p>Anathibitisha kudaiwa na <b><?= strtoupper($compdata->comp_name) ?></b> kiasi cha Tsh <b><?= number_format($customer->how_loan); ?></b>.</p>

        <br><b>HIVYO MKATABA HUU UNASHUHUDIWA NA MAKUBALIANO YAFUATAYO</b>

        <p>(1) Kwa hiari yake mwenyewe ameweka dhamana ya kitu au vitu vyenye thamani kama sehemu ya ukiri wa kurejesha fedha. Endapo atashindwa kufanya hivyo, dhamana zitakuwa mali ya kampuni.</p>

        <br><b>ORODHA YA DHAMANA</b><br>
        <p>
            <?php if (!empty($collateral)): ?>
                <?php foreach ($collateral as $key => $collater): ?> 
                    (<?= $key + 1; ?>) <b><?= $collater->description; ?></b><br>
                <?php endforeach; ?>
            <?php else: ?>
                <i>Hazijajazwa kwenye mfumo</i>
            <?php endif; ?>
        </p>

        <p>(2) Wahusika wamekubaliana kuwa mkopo unahusisha riba na mkopaji atailipa kwa hiari.</p>
        <p>(3) Wahusika wamekubaliana kuwa kutakuwa na adhabu au kuvunjwa kwa mkataba endapo mkopaji atakiuka masharti.</p>
        <p>(4) Marejesho ya kila 
            <?php
                if ($customer->day == 1) {
                    echo "<strong>SIKU (" . $customer->session . ")</strong>";
                } elseif ($customer->day == 7) {
                    echo "<strong>WIKI (" . $customer->session . ")</strong>";
                } elseif ($customer->day == 30) {  
                    echo "<strong>MWEZI (" . $customer->session . ")</strong>";
                } else {
                    echo "<strong>HAIJULIKANI (" . $customer->session . ")</strong>";
                }
            ?>
        </p>

        <p>(5) Mkopo huu umeombwa kupitia biashara ya <b><?= $customer->reason ?></b>.</p>
        <p>(6) Mkopaji atakuwa na mdhamini ambaye atawajibika ikiwa mkopaji atashindwa kurejesha mkopo.</p>

        <br><b>SEHEMU YA MDHAMINI</b><br>
        <?php if (!empty($mdhamini) && is_array($mdhamini)) : ?>
            <?php foreach ($mdhamini as $index => $guarantor): ?>
                <p>
                    Mimi <b><?= strtoupper($guarantor->sp_name . " " . $guarantor->sp_mname . " " . $guarantor->sp_lname) ?></b> simu <b><?= $guarantor->sp_phone_no ?></b> uhusiano wangu na mkopaji <b><?= strtoupper($customer->f_name . " " . $customer->m_name . " " . $customer->l_name) ?></b> ni <b><?= $guarantor->sp_relation ?></b>. Nakubali kwa hiari yangu kumdhamini mkopaji na nitawajibika ikiwa atashindwa kulipa.
                </p>
                <p><b>SAINI YA MDHAMINI</b> ................................ <b>DOLE GUMBA</b> .......................</p>
                <br>
            <?php endforeach; ?>
        <?php else : ?>
            <p>Taarifa za mdhamini hazijajazwa kwenye mfumo.</p>
        <?php endif; ?>
    </div>

    <h3>SAHIHI YA MKOPAJI</h3>
    <p>JINA: <strong><?= strtoupper($customer->f_name . " " . $customer->m_name . " " . $customer->l_name) ?></strong></p>
    <p>SAHIHI: ________________________ SIMU: <?= $customer->phone_no; ?></p>

    <div class="signature">
        <h3>AFISA WA KAMPUNI</h3>
        <p>JINA: <b><?= $customer->empl_name ;?></b></p>
        <p>Simu: <b><?= $customer->empl_no ;?></b></p>
        <p>Ofisi: <b><?= $customer->blanch_name ;?></b></p>
        <p>Wadhifa: ________________________</p>
        <p>SAHIHI: ________________________</p>
    </div>

</body>
</html>
