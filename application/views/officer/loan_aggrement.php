<!DOCTYPE html>
<html lang="sw">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FOMU YA MAOMBI YA MKOPO</title>
  <style>
    body { font-family: Arial, sans-serif; }
    h2, h3 { text-align: center; margin-top: 10px; margin-bottom: 10px; }
    .section { margin-bottom: 5px; }
    .signature { margin-top: 10px; }

    .header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      margin-bottom: 10px;
      padding: 0 10px;
    }

    .passport-box {
      flex: 0 0 auto;
    }

    .passport {
      width: 100px;
      height: 120px;
      border: 1px solid #000;
      object-fit: cover;
    }

    .logo {
      text-align: center;
      flex: 1 1 100%;
      margin-top: 10px;
    }

    @media (min-width: 640px) {
      .logo {
        flex: 1 1 auto;
        margin-top: 0;
      }
    }
  </style>
</head>
<body>

  <div class="header">
    <div class="passport-box left">
      <img src="<?= $customer->passport; ?>" alt="Passport Image" class="passport">
    </div>

    <div class="logo">
      <img src="<?= $compdata->comp_logo ?>" alt="Company Logo" width="150">
    </div>

    <div class="passport-box right">
      <img src="<?= $customer->passport; ?>" alt="Passport Image" class="passport">
    </div>
  </div>

  <h2>FOMU YA MAOMBI YA MKOPO</h2>   

  <div class="section">
    <p>Mkataba huu umefanyika leo tarehe <strong>…………</strong> mwezi <strong>……...</strong> mwaka <strong>20……</strong></p>
    <p>Kati ya <b><?= strtoupper($compdata->comp_name) ?></b> wa <b><?= $compdata->adress ?></b>, kampuni iliyosajiliwa Tanzania (Ambaye katika Mkataba huu utajulikana kama <b>Mkopeshaji</b>) Na <b><?= strtoupper($customer->f_name . " " . $customer->m_name . " " . $customer->l_name) ?></b> (ambaye katika mkataba huu atajulikana kama <strong>Mkopaji</strong>) ambaye ni mkazi wa wilaya <b><?= $customer->district ?></b> kata ya <b><?= $customer->ward ?></b> mtaa wa <b><?= $customer->street ?></b> Simu: <?= $customer->phone_no; ?> Na kwamba Mkopeshwaji anakubaliana na uwajibikaji wa majukumu yote yalipo kwenye mkataba huu na anathibitisha kudaiwa na <b><?= strtoupper($compdata->comp_name) ?></b> kiasi cha Tsh <b><?= number_format($customer->how_loan);?></b>.</p>

    <br>
    <b>HIVYO MKATABA HUU UNASHUHUDIWA NA MAKUBALIANO YAFUATAYO</b>

    <p>(1) Kwamba Mkopeshwaji kwa hiari yake mwenyewe ameweka dhamana ya kitu ama vitu vyenye thamani kama sehemu ya ukiri wake wa kuwa na jukumu la kurejesha fedha na endapo atashindwa kufanya hivyo basi dhamana zitakuwa mali ya kampuni kwa mujibu wa sheria.</p>

    <br><br>
    <b>ORODHA YA DHAMANA</b>
    <p>
      <?php if (!empty($collateral)): ?>
        <?php foreach ($collateral as $key => $collater): ?> 
          (<?= $key + 1; ?>) <b><?= $collater->description; ?></b> <br>
        <?php endforeach; ?>
      <?php else: ?>
        <i>Hazijajazwa kwenye mfumo</i>
      <?php endif; ?>
    </p>

    <br>
    <p>(2) Na kwamba wahusika kwa mkataba huu wote kwa pamoja wamekubaliana na kuhiari kuwa mkopo huu unahusisha riba na mkopaji atakuwa na kuhiari kukopa pesa itakayolipwa kwa riba.</p>

    <p>(3) Na kwamba wahusika kwa mkataba huu wote kwa pamoja wamekubaliana kuwa mkopo huu utakuwa na adhabu (faini) au kuvunjiwa mkataba ikiwa mkopaji ataenda kinyume na mkataba huu.</p>

    <p>(4) Kwamba mkataba huu unahusisha mkopo wa MAREJESHO YA KILA  
      <?php
        if ($customer->day == 1) {
          echo "<strong>SIKU (" . $customer->session . ")</strong>";
        } elseif ($customer->day == 7) {
          echo "<strong>WIKI (" . $customer->session . ")</strong>";
        } elseif ($customer->day == 30) {  
          echo "<strong>MWEZI (" . $customer->session . ")</strong>";
        } else {
          echo "<strong>haijulikani (" . $customer->session . ")</strong>";
        }
      ?>
    </p>

    <p>(5) Mkopaji na Mkopeshwaji wanakubaliana na majukumu yote yaliyomo kwenye mkataba huu na wanakiri mkopaji kudaiwa na <b><?= $compdata->comp_name ?></b> kiasi cha Tsh <b><?= number_format($customer->how_loan); ?></b> Na kwamba mkopo huu umeombwa kupitia biashara ya <b><?= $customer->reason ?></b></p>

    <p>(6) Kwamba wahusika wote wa mkataba huu wamekubaliana kuwa mkopaji atapaswa kuwa na mdhamini/wadhamini wake kama mkopaji namba mbili na ambaye atakuwa na jukumu la kuhakikisha mkopaji namba moja analipa mkopo kwa wakati, na endapo atashindwa kulipa kwa uzembe basi yeye atakuwa na jukumu la kulipa mkopo huo uliobaki wote haraka.</p>

    <br><br>
    <b>SEHEMU YA MDHAMINI</b>
    <br>
    <?php if (!empty($mdhamini) && is_array($mdhamini)) : ?>
      <?php if (count($mdhamini) == 1) : ?>
        <?php $guarantor = $mdhamini[0]; ?>
        Mimi <b><?= strtoupper($guarantor->sp_name . " " . $guarantor->sp_mname . " " . $guarantor->sp_lname) ?></b> simu <b><?= $guarantor->sp_phone_no ?></b>
        uhusiano wangu na mkopaji <b><?= strtoupper($customer->f_name . " " . $customer->m_name . " " . $customer->l_name) ?></b> ni <b><?= $guarantor->sp_relation ?></b>. Nakubali kumdhamini mkopaji kwa hiari yangu mwenyewe...
        <br><br>
        <b>SAINI YA MDHAMINI</b> ................................ <b>DOLE GUMBA</b> .......................
      <?php elseif (count($mdhamini) == 2) : ?>
        <?php $guarantor1 = $mdhamini[0]; $guarantor2 = $mdhamini[1]; ?>
        Mimi <b><?= strtoupper($guarantor1->sp_name . " " . $guarantor1->sp_mname . " " . $guarantor1->sp_lname) ?></b> simu <b><?= $guarantor1->sp_phone_no ?></b> ...
        <br><br>
        <b>SAINI YA MDHAMINI</b> ................................ <b>DOLE GUMBA</b> .......................

        <br><br>

        Mimi <b><?= strtoupper($guarantor2->sp_name . " " . $guarantor2->sp_mname . " " . $guarantor2->sp_lname) ?></b> simu <b><?= $guarantor2->sp_phone_no ?></b> ...
        <br><br>
        <b>SAINI YA MDHAMINI</b> ................................ <b>DOLE GUMBA</b> .......................
      <?php endif; ?>
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
    <p>Simu:  <b><?= $customer->empl_no ;?></b></p>
    <p>Ofisi:  <b><?= $customer->blanch_name ;?></b></p>
    <p>Wadhifa: ________________________</p>
    <p>SAHIHI: ________________________</p>
  </div>

</body>
</html>
