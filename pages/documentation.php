<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/all.css">
    <link rel="stylesheet" href="../styles/nav.css">
    <link rel="stylesheet" href="../styles/multilevel-select.css">
    <link rel="stylesheet" href="../styles/documentation.css">
    <script defer src="../scripts/multilevel-select.js"></script>
    <script defer src="../scripts/documentation.js"></script>
    <title>Documentation</title>
</head>

<body>
    <header class="page-header">
        <h1>Pseudocontent generator documentation</h1>
        <?php include("../includes/nav.php")?>
    </header>
    <div class="documentation" data-level1="UI">
        <div class="doc-nav">
            <select id="doc-nav-l1" class="ml-sel-parent">
                <option value="UI">User Interface</option>
                <option value="GenModes">Generation Modes</option>
                <option value="GenSettings">Generation settings</option>
            </select>
            <select id="doc-nav-l2" class="ml-sel-collapse ml-sel-parent">
                <option data-filter-value="GenModes" value="normal">Normal</option>
                <option data-filter-value="GenModes" value="list">List</option>
                <option data-filter-value="GenModes" value="table">Table</option>
                <option data-filter-value="GenModes" value="header">Header</option>
                <option data-filter-value="GenModes" value="image">Image</option>
            </select>
        </div>
        <section class="user-interface-doc">
            <h2>User Interface</h2>
            <img src="../images/UserInterface.PNG" alt="Picture of pseudocontent generator's user interface.">
            <h3>Regenerate button</h3>
            <p>
                When this button is clicked the app will generate content according the generation mode
                and generations settings. The generated content will replace the content in the
                content area.
            </p>
            <h3>Append button</h3>
            <p>
                When this button is clicked the app will generate content according the generation mode
                and generations settings. The generated content will be appended to the content in the
                content area.
            </p>
            <h3>Prepend button</h3>
            <p>
                When this button is clicked the app will generate content according the generation mode
                and generations settings. The generated content will be prepended to the content in the
                content area.
            </p>
            <h3>Web preview/show HTML button</h3>
            <p>
                This button which displays text according to what will happen when it is pressed.
                It allows the user to toggle between seeing the content as it would appear on a
                web page or seeing the raw HTML.
            </p>
            <h3>Toggle Theme button</h3>
            <p>
                This button allows the user to toggle the color theme of content area which
                defaults to dark mode.
            </p>
        </section>
        <section class="generation-modes-doc">
            <section class="normal-mode-doc">
                <h2>Normal</h2>
                <p>
                    In this mode the generator will produce plain content in form of paragraphs
                    and sentences.
                </p>
                <a href="#header-paragraph">Paragraphs</a>
                <a href="#header-sentence">Sentence</a>
                <section>
                    <h3 id="header-paragraph">Paragraphs</h3>
                    <p>
                        This mode will produce a series of paragraphs. The number of which will be the paragraph count.
                        There will be a random number of sentences between the min and max paragraph length.
                        The sentences will be a random number of words between sentence min and max lengths.
                    </p>
                    <h4>Settings</h4>
                    <ul>
                        <li>Paragraph count</li>
                        <li>Paragraph min length</li>
                        <li>Paragraph max length</li>
                        <li>Sentence min length</li>
                        <li>Sentence max length</li>
                    </ul>
                    <h4>Sample</h4>
                    <div>
                        <p>Iuenetvu maolsnr oi liystzrg rntese kitoee nrzt uatln wfiew. Ososcbitrra iael tmeo ycvee
                            ewycdtem
                            egioadus falncbr ivaoti iditati dgynw c tposji rasralliif. Ietso titbgsi oatniman lrcsd t
                            aknrze
                            onelim
                            gtuws t snicr eis nhits ososcbitrra. Mt ssnk bcng l ilsilae oatniman eplono tlqa nir mdniic
                            ikrsc irett
                            evpubna hameh. Pgcp rst t gercyt ipgaeul ciabrid ogs aseail iyulias ussb iayo. Islnir almsmg
                            cihe reor
                            sidtceo olss cn udto nrs. Hsnfg soiaa sudieou ginopm oeha nccraiig cyye nuins ljrp ieer cyye
                            lsf. Uttbtu
                            ismai inl chlta htsii nmbnk lsf loigli ontied nretu. Urssiaw st ueeee nabpus cepfo oatlers
                            rasiesl chlta
                            rhtesoeo ueeee sudieou ha ccflro. Ngpou t re sussoe iuenetvu dydta ancuodbso elac gngmdg
                            smnesgbh ltr.
                            Asudoo iaysi s tgha sinls asepput ismai oss itnbii menp msgs vue stb elnku. Eoin siin onn
                            diynsaes tst
                            iesrwlir orsias areitiayw. </p>
                        <p>Denh lancnpi uni upavs ipgaeul pruheba irett rpanei strgks adtqemrr soiaa rasralliif
                            aaseolon.
                            Pdksr
                            rhtesoeo onelim tldru cra tposji tlluol aynaiiosde ii meu. Iig efsid nicnesjr gistt pter
                            htrrr
                            ipuea rcr
                            ueeee rte okhreg. Dua wfiew cpls mdsau rnce rhtesoeo loigli ttg. Uni tnemdsi tldru nnueaa
                            rleut
                            lb ttg
                            onn. Ietso tjabussn onn idad nael oolctt warleegt strgks sssfr uni. Mkno ekxn aa mtt syosgr
                            elh
                            rst de
                            ebp. Uaoae nccraiig hncr yior inl oatniman tjabussn eeotoyotn aef srmspium lsf eliigift
                            ghrrf.
                            Dernl ze
                            nir mceiz adtqemrr ulaenot uaoae siin iikcsp thom codx. </p>
                        <p>Edsen ha iikcsp oee eop ohxv epiln ssnk iraaairc ulgnair eeotoyotn. Trlioe obepg eis mdsau
                            codx
                            esaibsloa
                            sdtlcass edtsgpt. Seo rasiesl ayosr aas nltory l criokn aef pruheba asudoo. Wslsns stb oetre
                            e
                            lii
                            falncbr idad efsid nrscs nlst rragtkn sdatki eamnini pvut. Tvn uaaeaa s mdniic irett edsen
                            iagls
                            crfuo
                            upavs nlr ebdeki. A ltr toroo icercr xakgitf kitoee aerghts neuun lidmow pssy. Csa ttg
                            eliigift
                            kaii
                            ncant oiio dua wfiew thom asaoasgsn. Ccflro talsuc nteila olat itoei aiouio eliigift rieece
                            nser
                            sosedr
                            tmeo fdktlgue. Lpie qbngeml codx eetoeo dua dna beeecytb cba eesoe. Gtuws edpii e dgb cienua
                            hameh gt
                            areitiayw ebdeki evair trlioe ylevab tipe. L agptrm fdktlgue dgb silla lt lsn fnruasc nser.
                            Suiashsg
                            nltso nhnasir nlaprrti seaoia nser ibnfiubzitar pter. </p>
                        <p>Lt ssmt aidca yeutpi lancnpi cublbuiti prhnwou nhits. K unrsel dmkss ilrneh ilsilae eonsen
                            rleut
                            rcr nrs
                            pndndo uatln hecdae ccflro tlqa. Cenog diynsaes nlim dacztai rsiimcnat espnv iearli neuun
                            csa
                            aihddm
                            soiaa rkrgc giuhrcsf. Ieer rrl a tlqa menp cmz iraaairc nt teahl. Uil yliw nabpus cmz sinls
                            ueg
                            tipe gt
                            olss trnc iaysi verrsor l. Idad heaoem hhgnra cmz oss hameh pruheba lmimh phnowese hgois
                            rddie.
                            Oatlers
                            tear ltr ipuea cienua mnonprdpao tpoa prhnwou. </p>
                    </div>
                </section>
                <section>
                    <h3 id="header-sentence">Sentences</h3>
                    <p>
                        This mode will produce a series of sentences structure in a single paragraph.
                        There will be as many sentences as specified by sentence count.
                        The sentences will be a random number of words between sentence min and max lengths.
                    </p>
                    <h4>Settings</h4>
                    <ul>
                        <li>Sentence count</li>
                        <li>Sentence min length</li>
                        <li>Sentence max length</li>
                    </ul>
                    <h4>Sample</h4>
                    <div>
                        <p>Ruaspsl hrmdhse aaseolon ipuea plrdenesp asaoasgsn syosgr ibaegc espnv k dshvtaaoi rlt
                            redhrm.
                            Iaysi
                            eiioe uaaeaa tl drurxger sssfr aus ovcd ngst iael ebp hecdae mkno. Nrs rlnrt aewhtu ntm fuar
                            rasiesl aas
                            aosrb csfyeas menp. Rlt aef uclootn stb dydta aas esnss nlr yae ndaf. Tee rragtkn nlst
                            seciir
                            ebp shlu
                            mpclm dsard iuenetvu ltr rlshint. Pvut insoeg lt ulgnair tst agptrm srdonh sdtlcass eafoatu
                            hecdae
                            aynaiiosde uil rte mtt. Nltory dg rasralliif itro rtsumn erbi mpclm ocin ngcse ismai. </p>
                    </div>
                </section>
            </section>
            <section class="list-mode-doc">
                <h2>List</h2>
                <p>
                    This mode allows the user to generate a list of items. The list can be made up of Sentences
                    or paragraphs. The list can be both an unorder and ordered list.
                </p>
                <a href="#header-ol-s">ol-s</a>
                <a href="#header-ul-s">ul-s</a>
                <a href="#header-ol-p">ol-p</a>
                <a href="#header-ul-p">ul-p</a>
                <section>
                    <h3 id="header-ol-s">Ordered list of sentences</h3>
                    <p>
                        This mode produces a ordered list of sentences. The sentences will be a
                        random number of words between sentence min and max lengths. It will make as
                        many items as the user specified in item count setting.
                    </p>
                    <h4>Settings</h4>
                    <ul>
                        <li>Sentence min length</li>
                        <li>Sentence max length</li>
                        <li>Item count</li>
                    </ul>
                    <h4>Sample</h4>
                    <div>
                        <ol>
                            <li>Nrgbepi egaronff at nptc ecdee get eilmd pilri ainisccts mtliach. </li>
                            <li>Vigx nrgbepi ndu linlicee spiaes owino ncdshs odohii mzsaru ti stbipk. </li>
                            <li>Mtliach oetdtar lu ifa ype e. </li>
                            <li>Inties fdlmnc eioc mtmadw oslroye ise ecdee vtisp bge sssyseti elcr. </li>
                            <li>Bhihss innzeemd tlascavk dimrfha awvasic uoaodzcr shils. </li>
                            <li>Toa ffinr negr uisml ype drkdp. </li>
                            <li>Nrgbepi nisu i tsrli hiaee adpi uliupiib tlascavk yelros reo. </li>
                            <li>Anes iol ger iiiaia rteernp psesona. </li>
                            <li>Sd laevc lss tlascavk iptt htoeyra esas rlnzep eotre saye l. </li>
                            <li>Zatgu ei rydu rgaosc ti ea ltamyun jrsts raartr phci. </li>
                        </ol>
                    </div>
                </section>
                <section>
                    <h3 id="header-ul-s">Unordered list of sentences</h3>
                    <p>
                        This mode produces a unordered list of sentences. The sentences will be a
                        random number of words between sentence min and max lengths. It will make as
                        many items as the user specified in item count setting.
                    </p>
                    <h4>Settings</h4>
                    <ul>
                        <li>Sentence min length</li>
                        <li>Sentence max length</li>
                        <li>Item count</li>
                    </ul>
                    <h4>Sample</h4>
                    <div>
                        <ul>
                            <li>Noeatd tcioa ectsennc tnsou eetanne ssno stvtaerso anes. </li>
                            <li>Ftreaoe iyg ntt psr psn isrroc ijhs tcioa cpnalm. </li>
                            <li>Alrgarw siorro mbgh ucysiu fta msn. </li>
                            <li>Mnpdio ijhs anei ta cns aeqnct lfitcbrp. </li>
                            <li>Brlaean anf atmietp laa eioc nnpr ise durar pnue gmaacir aplbh. </li>
                            <li>Oasfadhl ncdshs lrlei anf lpocici lm. </li>
                            <li>Hnofn lss phci sc edimts bcsi siorro. </li>
                            <li>Lm pilri tikf ubagta shils esas regvsoee o bstf ei ptinrs. </li>
                            <li>Taal tn bmmin lpocici itotsol creiss screi tse nolfo. </li>
                            <li>Oxalsl tibsse eecix uisml ps anwl lpocici. </li>
                        </ul>
                    </div>
                </section>
                <section>
                    <h3 id="header-ol-p">Ordered list of paragraphs</h3>
                    <p>
                        This mode produces a ordered list of paragraphs. The paragraphs will be
                        a random number of sentences from paragraph min to max length. The sentences will be a
                        random number of words between sentence min and max lengths. It will make as
                        many items as the user specified in item count setting.
                    </p>
                    <h4>Settings</h4>
                    <ul>
                        <li>Paragraph min length</li>
                        <li>Paragraph max length</li>
                        <li>Sentence min length</li>
                        <li>Sentence max length</li>
                        <li>Item count</li>
                    </ul>
                    <h4>Sample</h4>
                    <div>
                        <ol>
                            <li>
                                <p>Nirtns oisnrs soao iol lms oasfadhl. Nss bge orcou dnowltct bac lrkyi ntt. Nosc ecdee
                                    ra
                                    reo gnea
                                    oil n gner. Ectsennc vtisp ieoinpg iaitieu uv htfswi emi a lnsleegc nzcs. </p>
                            </li>
                            <li>
                                <p>Rteernp irgdetam rcmggt a l teoberotl hfsewba. Dttsienisrr arlud sinice ti bassnun
                                    noaa.
                                    Naoimsl
                                    glemip rrtije ridciz fcdwdb ieaego jrsts eotre surr pilri geg. Taneoxfns piiaz t swu
                                    snov vedep
                                    nfcl oslroye uliupiib nnpr. </p>
                            </li>
                            <li>
                                <p>Etuo our oshcuna orse aaasdeg mows ae aeqnct. Ortrngr odohii nfcl rins doi featu trcd
                                    saacu bs
                                    ldmg cptstna. Uatl dsi ra ive mnpdio ieoinpg pgtsr a notrrr. Llytsso ean teouse
                                    ncdshs
                                    utsm
                                    yebgnis lehrm iyg. Ps aubhen coi gtena ra a nstias. </p>
                            </li>
                            <li>
                                <p>Eanoo sonbnd fusimpuiea srftjo ltitrs peiedo lrlei p. I agflc iyg uliupiib enctl
                                    vneae
                                    orrha civr
                                    lms. Bmmin i ioec edngpe pebud oengeamd rlnzep oo ype leusoopl mhatis. Tpse aaasdeg
                                    telga a
                                    ocfniortn eelti iua uietkrca rartol oltid tsercf. Itpf serlse ilaic gnnlhoeh nptc
                                    edrwl.
                                    Guttinda til nngcti bac pnin enseiyseote ikssat msslsn hes. </p>
                            </li>
                        </ol>
                    </div>
                </section>
                <section>
                    <h3 id="header-ul-p">Unordered list of paragraphs</h3>
                    <p>
                        This mode produces a unordered list of paragraphs. The paragraphs will be
                        a random number of sentences from paragraph min to max length. The sentences will be a
                        random number of words between sentence min and max lengths. It will make as
                        many items as the user specified in item count setting.
                    </p>
                    <h4>Settings</h4>
                    <ul>
                        <li>Paragraph min length</li>
                        <li>Paragraph max length</li>
                        <li>Sentence min length</li>
                        <li>Sentence max length</li>
                        <li>Item count</li>
                    </ul>
                    <h4>Sample</h4>
                    <div>
                        <ul>
                            <li>
                                <p>Ijhs yzua lsg cicrs era tikf doi ynsdhweor tiila cppi edoow. Irgdetam s i ligiaivr
                                    dnowltct o.
                                    Ttwti epredeser tl scl otohc ibrohss liaesli xnrcgpta eeihbnie. Iol ta gnea rnsvuo
                                    tsna
                                    ieoinpg
                                    ovsnksn iiycaiar. Zatgu cicrs pfeto rcjr gteldteem uawht knrysce ovsnksn. Mnsagei
                                    ynsdhweor
                                    enseiyseote anes tpse eyti eeniue tlascavk wtiay iiupiar. Llu iyg sd ifrlen bcsi
                                    eanto
                                    ynsdhweor
                                    ceonferr guttinda. Auri geg at galriym nosc ecdtla ncdshs ynsdhweor yaoeter oails
                                    teouse. </p>
                            </li>
                            <li>
                                <p>Yslto otohc mef slio eplrd rnrm n iyg edrtg atnya. Pnt ioec hdsa rsid ieryv tl. Eiut
                                    ntt
                                    iy
                                    rnlshz brlaean tatrni gnnaci. Ldaa lrol n iosers d tlascavk okde. </p>
                            </li>
                            <li>
                                <p>Oebassu s hnofn glsuen rela gnnaci dmemki cpea. Rartol edimts apdaeie eeihbnie
                                    tlascavk
                                    sedw
                                    rdiitstv dimrfha eusu nhazb. Mierk llytsso egesgha rlys rydu aris drkdp oltid rcjr
                                    ndnriah.
                                    Tjlumea nnrovld atuttur rtqeg comtabl psesona ijhs ooee bassnun fdlmnc. </p>
                            </li>
                            <li>
                                <p>Aibabysc usere nnc rdpeisoceu bwennu awvasic. Iyg piri tibsse espebi fta lulir e lm
                                    bassnun taal.
                                    Mlam lrkyi ntt ieeu ig hoecusutioog. Okde ieaego drmcegvlaa rs odoaasn doi ortrngr
                                    aeqnct serlse
                                    spiaes eoatsimv. Edoow bge agflc ae ucrs etco dhss tuse mainh eusu. Tse ieryv ifrlen
                                    gnurr lms
                                    epee mlnilp. Yelros smeru secrt tkdrhtr csclneie cehsis teouse mnnsbe aii dyho
                                    cusii.
                                </p>
                            </li>
                        </ul>
                    </div>
                </section>
            </section>
            <section class="table-mode-doc">
                table
            </section>
            <section class="header-mode-doc">
                header
            </section>
            <section class="image-mode-doc">
                image
            </section>
        </section>
    </div>
</body>

</html>