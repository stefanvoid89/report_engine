<table cellspacing="0" cellpadding="0" class="parent" id="contract_table" style="font-size:10px;line-height:15px">
    <thead></thead>
    <tbody>

        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold">UGOVOR O ZAKUPU VOZILA br. {{$databag->reservation->acKey}}</span>
            </td>
        </tr>
        <td>
            <br style="line-height: 10px;">
        </td>
        <tr>
            <td>
                Ovaj ugovor o zakupu vozila br. {{$databag->reservation->acKey}}, (u daljem tekstu: Ugovor),
                zaključen je u Beogradu, dana {{$databag->reservation->adDateFrom}}.godine, između sledećih
                ugovornih strana:
            </td>
        </tr>
        <tr>
            <td>
                <br style="line-height: 10px;">
            </td>
        </tr>
        <tr>
            <td>
                <span style="font-weight: bold">{{$databag->company_info->acName}}</span> ,
                {{$databag->company_info->acAddress}} ,
                {{$databag->company_info->acCity}} , Mat. Br.
                {{$databag->company_info->acRegNo}} ,
                PIB: {{$databag->company_info->acCode}} koga zastupa Zoran Dragoj ( u daljem tekstu Kupac ) (u daljem
                tekstu: Zakupodavac)
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                i
            </td>
        </tr>
        <tr>
            <td>
                <span style="font-weight: bold">{{$databag->subject->acName}}</span>, {{$databag->subject->acAddress}}
                ,{{$databag->subject->acCode}}
            </td>
        </tr>
        <tr>
            <td>
                (u daljem tekstu Zakupodavac i Zakupac će se zajednički označavati kao
                Ugovorne strane, a pojedinačno kao Ugovorna strana)
            </td>
        </tr>
        <tr>
            <td>
                Zakupac je u potpunosti upoznat sa gore navedenim i voljan da uđe u pravni
                odnos sa Zakupcem, u skladu sa odredbama ovog Ugovora.
            </td>
        </tr>
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold"> PRI ČEMU:</span>
            </td>
        </tr>
        <tr>
            <td>
                <br style="line-height: 10px;">
            </td>
        </tr>
        <tr>
            <td class="indent">
                Zakupodavac je privredno društvo čija je osnovna delatnost davanje u zakup motornih vozila i druge
                opreme trećim licima (korisnicima) za određenu naknadu.
            </td>
        </tr>
        <tr>
            <td>
                <br style="line-height: 10px;">
            </td>
        </tr>
        <tr>
            <td class="indent">

                U cilju unapređenja svoje poslovne delatnosti Zakupodavac je ušao u odnos poslovne saradnje sa
                privrednim društvom CA Leasing Srbija, članicom Credit Agricole Groupe.
            </td>
        </tr>
        <tr>
            <td>
                <br style="line-height: 10px;">
            </td>
        </tr>
        <tr>
            <td class="indent">
                Zakupac je u potpunosti upoznat sa gore navedenim i voljan da uđe u pravni odnos sa Zakupcem, u skladu
                sa odredbama ovog Ugovora.
            </td>
        </tr>
        <tr>
            <td>
                <br style="line-height: 10px;">
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold">
                    IMAJUĆI U VIDU GORE NAVEDENO, UGOVORNE STRANE SU SE SPORAZUMELE KAKO SLEDI:
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">

            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold">PREDMET UGOVORA</span>
            </td>
        </tr>
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong> </strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold">Član 1.</span>
            </td>
        </tr>
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <tr>
            <td>
                Zakupodavac daje, a Zakupac uzima u zakup pod uslovima određenim ovim
                Ugovorom sledeći predmet zakupa:
            </td>
        </tr>
        <tr>

            <td>
                Vozilo: {{$databag->car->acCategory}}
            </td>
        </tr>
        <tr>
            <td>
                Marka : {{$databag->car->marka}}
            </td>
        </tr>
        <tr>
            <td>
                Boja:
            </td>
        </tr>
        <tr>
            <td>
                Snaga: {{$databag->car->acPower}}
            </td>
        </tr>
        <tr>
            <td>
                Zapremina: {{$databag->car->zapremina}}
            </td>
        </tr>
        <tr>
            <td>
                Broj šasije: {{$databag->car->acChasis}}
            </td>
        </tr>
        <tr>
            <td>
                Broj motora: {{$databag->car->acEngine}}
            </td>
        </tr>
        <tr>
            <td>
                Godina proizvodnje: {{$databag->car->anYearOfManufacture}}
            </td>
        </tr>
        <tr>
            <td>
                Broj sedišta: {{$databag->car->anSeatsNo}}
            </td>
        </tr>
        <tr>
            <td>
                (u daljem tekstu: Vozilo)
            </td>
        </tr>
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold">TRAJANJE ZAKUPA I UPOTREBA VOZILA</span>
            </td>
        </tr>
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong> </strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold">Član 2.</span>
            </td>
        </tr>
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <tr>
            <td class="indent">
                Zakup počinje da teče danom potpisivanja ovog Ugovora i preuzimanja vozila
                i traje <span style="font-weight: bold">{{$databag->reservation->anQty}}</span> meseci.
            </td>
        </tr>
        <tr>
            <td>
                <br style="line-height: 10px;">
            </td>
        </tr>
        <tr>
            <td class="indent">
                Prilikom potpisivanja Ugovora, Zakupac je dužan da uplati iznos garancije
                zakupa vozila, u iznosu od <strong>900 </strong> eur u dinarskoj
                protivvrednosti, obračunato po prodajnom kursu Narodne Banke Srbije na dan
                plaćanja
            </td>
        </tr>
        <tr>
            <td>
                <br style="line-height: 10px;">
            </td>
        </tr>
        <tr>
            <td class="indent">
                Za Vozilo iz ovog Ugovora godišnja kilometraža je ograničena 10.000 km na
                godišnjem nivou odnosno maksimalno 20.000 km za za ceo period trajanja
                zakupa.
            </td>
        </tr>
        <tr>
            <td>
                <br style="line-height: 10px;">
            </td>
        </tr>
        <tr>
            <td class="indent">
                U slučaju pređenih više kilometara u odnosu na kilometražu definisanu u
                prethodnom stavu Zakupac se obavezuje da Zakupodavcu isplati naknadu koja
                će se obračunati na sledeći način:
            </td>
        </tr>
        <tr>
            <td>
                Obračun više pređene km:
            </td>
        </tr>
        <tr>
            <td>
                Za vozilo predmet ugovora 0,20<em> </em>je iznos u eur koji se obračunava
                po svakom više pređenom km.Tolerancija za čitav period trajanja svakog
                Ugovora o zakupu pojedinačno koja se ne računa već se klijentu priznaje je
                + 1000 km.
            </td>
        </tr>
        <tr>
            <td>
                Po isteku Ugovora, Zakupac i Zakupodavac, ili od njega ovlašćeno lice
                potpisaće zapisnik o primopredaji Vozila.
            </td>
        </tr>
        <tr>
            <td>
                Zakupac ima pravo da koristi Vozilo u zemlji i inostranstvu.
            </td>
        </tr>
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong>ZAKUPNINA</strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong> </strong>
            </td>
        </tr>
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong>Član 3.</strong>
            </td>
        </tr>
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <tr>
            <td>
                Iznos mesečne zakupnine (u daljem tekstu: Zakupnina) za korišćenje Vozila
                je <strong>200</strong> EUR (slovima: dvestotine i 00/00 ) u dinarskoj
                protivvrednosti po srednjem kursu Narodne Banke Srbije na dan fakturisanja
                uvećan za pripadajući PDV obračunat po stopi važećoj na dan fakturisanja i
                uplaćuje se na račun Zakupodavca broj
                ......................................... kod Banke
                ....................................
            </td>
        </tr>



        <tr>
            <td>
                Zakupnina dospeva za naplatu prvog dana u mesecu za svaki kalendarski mesec
                i fiksna je u toku perioda važenja ugovora o zakupu. Za svaku Zakupninu
                Zakupodavac izdaje račun na kojoj posebno izražava PDV u skladu sa
                odredbama iz prethodnog stava. U slučaju promene stope PDV-a Zakupac se
                obavezuje da će izmiriti izmenjene rate Zakupnina.
            </td>
        </tr>
        <tr>
            <td>
                Nemogućnost ili ograničena mogućnost upotrebe predmeta zakupa bez obzira na
                uzrok kao i moguć prigovor zakupca na ratu mesečne zakupnine i drugih
                troškova, ne mogu biti razlog neispunjenja obaveze plaćanja mesečnih rata
                zakupnina po njihovoj dospelosti. Eventualno prevremeno uplaćene rate neće
                se vraćati Zakupcu već se uračunavaju kao uplata narednih rata na koju se
                ne obračunava kamata u korist Zakupca.
            </td>
        </tr>
        <tr>
            <td>
                U slučaju kašnjenja u plaćanju Zakupnine više od 7 ( sedam ) dana od dana
                izdavanja računa od strane Zakupodavca, Zakupcu će biti obračunata i
                naplaćena zatezna kamata u skladu sa važećim zakonskim propisima.
            </td>
        </tr>
        <tr>
            <td>
                Utvrđenim iznosom Zakupnine nisu obuhvaćeni sledeći troškovi: kompletna
                registracija, redovno servisiranje koje se vrši u ovlašćenim servisima po
                specifikaciji isporučioca, i zamena guma na Vozilu. Iznos Zakupnina
                obuhvata troškove kasko osiguranja sa učešćem u šteti 5% koji ide na teret
                zakupca.
            </td>
        </tr>
        <tr>
            <td>
                Svi iznosi koji nisu obuhvaćeni Zakupninom snosiće Zakupac, a Zakupodavac
                će to prefakturisati Zakupcu uvećano za iznos PDV-a u skladu sa odredbama
                ovog člana.
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong> </strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong>RASKID UGOVORA PRE ISTEKA UGOVORENOG ROKA</strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong> </strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong>Član 4.</strong>
            </td>
        </tr>
        <tr>
            <td>
                Ugovor se može raskinuti pre isteka ugovorenog roka, isključivo u sledećim
                slučajevima:
            </td>
        </tr>
        <tr>
            <td>
                (i)na izričit zahtev Zakupca a pod uslovima detaljnije određenim u daljem
                tekstu ovog člana;
            </td>
        </tr>
        <tr>
            <td>
                (ii) ako je Vozilo oštećeno u saobraćajnoj nesreći ili ako je na drugi
                način uništeno ali ga nije moguće u okviru razumnih troškova vratiti u
                prvobitno stanje;
            </td>
        </tr>
        <tr>
            <td>
                (iii) ako je Vozilo ukradeno;
            </td>
        </tr>
        <tr>
            <td>
                (iv) ako Zakupac ne izvršava obaveze iz člana 3. ovog Ugovora duže od 30
                dana.
            </td>
        </tr>
        <tr>
            <td>
                U slučaju otkaza iz tačke (i) ovog člana Ugovora, u prvih 12 meseci
                trajanja ugovora o zakupu, Zakupac je dužan da Zakupodavcu plati dospele a
                neizmirene iznose Zakupnine uvećane za penal koji je jednak zbiru 6
                mesečnih Zakupnina i to najkasnije u roku od 15 dana od dana kada ga je
                Zakupodavac pozvao da to učini uz poštovanje otkaznog roka od 60( slovima :
                šezdeset) dana od dana pisanog obaveštenja o otkazu.
            </td>
        </tr>
        <tr>
            <td>
                U slučaju otkaza iz tačka (i) ovog člana Ugovora, nakon 12 meseci trajanja
                ugovora o zakupu,Zakupac je dužan da Zakupodavcu plati dospele, a
                neizmirene iznose Zakupnine uvećane za penal koji je jednak zbiru 12
                mesečnih Zakupnina i to najkasnije u roku od 15 dana od dana kada ga je
                Zakupodavac pozvao da to učini uz poštovanje otkaznog roka od 60( slovima :
                šezdeset) dana od dana pisanog obaveštenja o otkazu.
            </td>
        </tr>
        <tr>
            <td>
                U slučaju raskida Ugovora shodno stavu 1. tačka (ii) ovog člana, dejstvo
                raskida nastupa danom sačinjavanja Zapisnika osiguravajućeg društva kojim
                se konstatuje totalna šteta. U tom slučaju, Zakupac je dužan da plati
                neizmirenu, a dospelu mesečnu Zakupninu, zaključno sa danom sačinjavanja
                Zapisnika o totalnoj šteti, koju je Zakupodavac dužan u roku od tri dana od
                dana prijema od osiguravajućeg društva da dostavi Zakupcu. Ukoliko
                osiguravajuće društvo iz bilo kog razloga osiguraniku isplati sumu koja je
                niža od knjigovotstvne vrednosti predmeta zakupa u momentu nastanka štete,
                Zakupac je u obavezi da Zakupodavacu nadoknadi iznos razlike procenjene i
                knjigovotstvne vrednosti, ali samo do iznosa koji predstavlja 10% od
                procenjene vrednosti predmeta Zakupa, bez obzira na krivicu Zakupca za
                nastalu štetu.
            </td>
        </tr>
        <tr>
            <td>
                U slučaju raskida Ugovora shodno tački (iii) ovog člana, dejstvo raskida
                Ugovora u roku od 30 (slovima:trideset) dana od dana kada je Zakupac
                prijavio nadležnoj Policijskoj stanici krađu Vozila o čemu će obavestiti
                Zakupodavca. Danom raskida, prestaje dejstvo Ugovora, a Zakupac je dužan da
                izmiri mesečnu Zakupninu, zaključno sa istekom roka od 30 dana od dana
                prijave.Ukoliko osiguravajuće društvo iz bilo kog razloga osiguraniku
                isplati sumu koja je niža od knjigovotstvne vrednosti predmeta zakupa u
                momentu nastanka štetnog događaja, Zakupac je u obavezi da Zakupodavacu
                nadoknadi iznos razlike procenjene i knjigovotstvne vrednosti, ali samo do
                iznosa koji predstavlja 10% od procenjene vrednosti predmeta Zakupa.
            </td>
        </tr>
        <tr>
            <td>
                Zakupodavac ima pravo na jednostrani raskid ovog ugovora u slučaju
                ozbiljnog kršenja njegovih odredaba od strane Zakupca a posebno ako
                Zakupodavac zakasni sa obavezom plaćanja zakupnine (i drugih troškova
                shodno ovom ugovoru), više od 30 kalendarskih dana, kao i ako predmet
                zakupa koristi suprotno odredbama ovog ugovora ili njegovoj nameni.U
                slučaju raskida Ugovora shodno odredbama ovog stava pravno dejstvo raskida
                nastupa nakon isteka roka od 30 ( slovima: trideset ) dana od dana prijema
                pisanog obaveštenja o otkazu Ugovora.
            </td>
        </tr>
        <tr>
            <td>
                U slučaju raskida Ugovora shodno tačkama (i) i (iv) stava 1. ovog člana i
                nakon isteka perioda zakupa, Zakupac će Vozilo vratiti Zakupodavcu na dan
                isteka otkaznog roka ili prestanka važenja Ugovora, o čemu će se sačiniti
                Zapisnik kojim se konstatuje za svako pojedinačno Vozilo datum vraćanja,
                kao i stanje u kome se vraća.
            </td>
        </tr>

        <tr>
            <td style="text-align: center">
                <strong>OSIGURANJE VOZILA</strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong> </strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong>Član 5.</strong>
            </td>
        </tr>
        <tr>
            <td>
                Zakupodavac se obavezuje da će za Vozilo obezbediti i uredno obnavljati
                obavezno i puno kasko osiguranje kao i da će o tome dostaviti dokaze
                Zakupcu.
            </td>
        </tr>
        <tr>
            <td>
                Kasko osiguranje je ugovoreno kod osiguravajućeg društva
            </td>
        </tr>
        <tr>
            <td>
                Kasko polisa može biti sa maksimalno 5% učešća u šteti.
            </td>
        </tr>
        <tr>
            <td>
                Zakupac je u slučaju štetnog događaja, dužan da pozove saobraćajnu policiju
                na uviđaj ili popuni evropski izveštaj o saobraćajnoj nezgodi za
                materijalne štete do 500 Eur. Zakupac je dužan da odmah o štetnom događaju
                obavesti Zakupodavca koji pokreće postupak pred osiguravajućim društvom i
                da mu dostavi eventualni Zapisnik o uviđaju ili popunjen evropski Izveštaj
                o saobraćajnoj nezgodi.
            </td>
        </tr>
        <tr>
            <td>
                Zakupac se obavezuje da ce sa Zakupodavcem sarađivati u istražnom postupku
                koji je u direktnoj vezi sa osiguranim slučajem.
            </td>
        </tr>
        <tr>
            <td>
                Osiguranje regresnih prava u slučaju štete i podnošenje odštetnog zahteva
                kod osiguravajućeg društva po bilo kom osnovu obaveza je Zakupodavca.
            </td>
        </tr>
        <tr>
            <td>
                Računi ovlašćenog servisa, koji se odnose na popravku Vozila po osnovu
                štetnog događaja, se dostavljaju Zakupodavcu koji ostvaruje pravo naknade
                štete kod osiguravajućeg društva i snosi troškove PDV-a, u slučaju da ih
                osiguravajuće društvo ne prizna, koji će troškovi u tom slučaju biti
                prefakturisani zakupcu.
            </td>
        </tr>
        <tr>
            <td>
                U slučaju oštećenja za koja ne postoji pokriće u okviru kasko ili obaveznog
                osiguranja, štetu je dužan da nadoknadi Zakupac, u meri u kojoj je
                odgovoran za nastanak štete ( vožnja pod dejstvom alkohola, opojnih droga,
                kao i nedostajućeg policijskog zapisnika odnosno evropskog izveštaja o
                saobraćajnoj nezgodi za materijalne štete do 500 EUR iz razloga za koje je
                odgovoran Zakupac)
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong> </strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong>OSTALI TROŠKOVI</strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong> </strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong>Član 6.</strong>
            </td>
        </tr>
        <tr>
            <td>
                Zakupac je obavezan da snosi troškove goriva, putarina, pranja Vozila,
                parkiranja, saobraćajnih prekršaja i drugih sudskih postupaka koji
                proisteknu u vezi sa držanjem i korišćenjem predmeta zakupa za čitavo vreme
                trajanja zakupa.
            </td>
        </tr>
        <tr>
            <td>
                Zakupodavac ne odgovara za ličnu svojinu Zakupca ili drugog lica koja se
                nalazi u Vozilu.
            </td>
        </tr>
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <tr>
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <tr>
        <tr>
            <td style="text-align: center">
                <strong>OBAVEZE ZAKUPCA</strong>
            </td>
        </tr>
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <tr>
        <tr>
            <td style="text-align: center">
                <strong>Član 7.</strong>
            </td>
        </tr>
        <tr>
            <td>
                <strong> </strong>
            </td>
        </tr>
        <tr>
            <td>
                Zakupac je dužan da sa Vozilom postupa kao dobar privrednik i da koristi
                Vozilo u skladu sa važećim propisima i na način predviđen specifikacijom
                proizvođača.
            </td>
        </tr>
        <tr>
            <td>
                Zakupac se obavezuje da će održavati Vozilo kod ovlašćenog servisera, te
                brinuti o redovnoj i kontroli Vozila i održavanju potrošnih i sastavnih
                delova motornog Vozila prilikom redovnog servisa po specifikaciji
                isporučioca, i da će koristiti originalne rezervne delove, a troškovi
                navedenog biće snošeni od strane Zakupca, i nisu uračunati u cenu zakupnine
                na način utvrđen članom 3. ovog Ugovora. Troškove vanrednih servisa kao i
                druge troškove koji nisu obuhvaćeni redovnim održavanjem predmeta zakupa
                snosi Zakupac na način utvrđen članom 3. ovog Ugovora .
            </td>
        </tr>
        <tr>
            <td>
                Zakupac se obavezuje da će prilikom vraćanja Vozila, isto vratiti u
                ispravnom stanju.
            </td>
        </tr>
        <tr>
            <td>
                Zakupac se obavezuje da će, u slučaju kada je prilikom vraćanja Vozila isto
                prešlo više od 10.000 km od poslednjeg redovnog servisa, o svom trošku
                obaviti vanredan servis vozila. Zakupac je takođe u obavezi da vozilo koje
                je predmet zakupa vrati sa pneumaticima čija dubina šare nije ispod
                zakonskog minimuma što će zapisnički konstatovati komisija iz stava 9. ovog
                člana. U slučaju da Zakupac ne izvrši vanredan servis predmeta zakupa ili
                isto ne isporuči sa odgovarajućim pneumaticima u sve u skladu sa odrebama
                ovog stava istom će biti prefaktirisani svi troškovi koji tom prilikom
                nastanu za Zakupodavca a u svrhu dovođenja vozila u odgovarajuće stanje.
            </td>
        </tr>
        <tr>
            <td>
                Ukoliko se Vozilo vrati neispravno, a troškove dovođenja Vozila u ispravno
                stanje nije moguće naplatiti od osiguravajućeg društva taj trošak će biti
                naplaćen Zakupcu.
            </td>
        </tr>
        <tr>
            <td>
                Stanje Vozila prilikom primopredaje će se utvrđivati na sledeći način:
            </td>
        </tr>
        <tr>
            <td>
                Ugovorne strane su saglasne da se radi utvrđivanja stanja Vozila u momentu
                predaje Zakupcu izvrši pregled i utvrđivanje stanja Vozila, stepena
                eventualnih oštećenja i postojanja prevelike istrošenosti Vozila u odnosu
                na stepene amortizacije predviđene standardima proizvođača.
            </td>
        </tr>
        <tr>
            <td>
                Stanje Vozila utvrđuje Primopredajna komisija koja broji 3 (tri) člana, od
                kojih jednog delegira Zakupodavac, drugog Zakupac a trećeg Isporučilac.
            </td>
        </tr>
        <tr>
            <td>
                Primopredajna komisija je obavezna da opiše detaljno stanje Vozila,
                predmeta zakupa, i da ga prema kriterijumima za utvrđivanje vrednosti koji
                čine Prilog 1 ovog Ugovora kvalifikuje kao prihvatljivo i/ili
                neprihvatljivo.
            </td>
        </tr>
        <tr>
            <td>
                Članovi Primopredajne komisije o utvrđenom stanju sačinjavaju Zapisnik o
                stanju Vozila, predmeta zakupa (u daljem tekstu:
            </td>
        </tr>

        <tr>
            <td>
                Zapisnik).
            </td>
        </tr>
        <tr>
            <td>
                Zapisnik overavaju po 1 (jedan) član Zakupodavca, Zakupca i Isporučioca.
            </td>
        </tr>
        <tr>
            <td>
                Ukoliko iz bilo kog razloga izostane saglasnost Ugovornih strana na
                sadržinu Zapisnika, Ugovorne strane saglasno ugovaraju da će utvrđenje
                stanja i procenu vrednosti Vozila koje je predmet zakupa izvršiti ovlašćena
                komisija delegirana od strane isporučioca Vozila, u kom slučaju je ovakva
                procena obavezujuća za obe Ugovorne strane.
            </td>
        </tr>
        <tr>
            <td>
                Pod oštećenjima se smatraju sve tehničke neispravnosti i nedostaci na
                Vozilu, koje ne pokriva polisa kasko osiguranja.
            </td>
        </tr>
        <tr>
            <td>
                Pod prevelikom istrošenosti smatra se pohabanost sastavnih delova i
                sklopova, odnosno Vozila u većoj meri nego što je to propisano standardima
                proizvođača za period korišćenja Vozila.
            </td>
        </tr>
        <tr>
            <td>
                Pod drugom vrstom nedostataka smatraju se sva neprihvatljiva stanja Vozila
                koje nisu posledica oštećenja ili istrošenosti, a za čije otklanjanje je
                potrebno uložiti sredstva u vrednosti većoj od 100 EUR, u dinarskoj
                protivvrednosti.
            </td>
        </tr>
        <tr>
            <td>
                Primopredajna komisija je obavezna da opiše detaljno stanje Vozila i da ga
                prema kriterijumima za utvrđivanje vrednosti koji čine Prilog 1 ovog
                Ugovora kvalifikuje kao prihvatljivo ili neprihvatljivo.
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong> </strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong>REGISTRACIJA VOZILA</strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong> </strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong>Član 8.</strong>
            </td>
        </tr>
        <tr>
            <td>
                Zakupac je dužan da vrši tehničke preglede Vozila u ovlašćenom servisu, te
                da preduzme sve pravne i faktičke radnje neophodne za registraciju Vozila i
                da Zakupodavcu u roku od 3 (tri) dana pre isteka roka na koje je Vozilo
                registrovano dostavi dokaz o izvršenoj registraciji (Regitracioni list o
                izvršenom tehničkom pregledu i saobraćajnu dozvolu).
            </td>
        </tr>
        <tr>
            <td>
                Zakupodavac je u obavezi da snosi troškove registracije i svih pratećih
                troškova i da Zakupcu blagovremeno obezbedi svu dokumentaciju neophodnu za
                sprovođenje tog postupka.
            </td>
        </tr>
        <tr>
            <td>
                Zakupodavac će sve troškove koje je snosio u cilju registracije Vozila
                prefakturisati Zakupcu, uvećane za iznos PDV-a, a kao dokaz dostaviće
                kopije računa koje je platio.
            </td>
        </tr>
        <tr>
            <td>
                Zakupodavac je dužan da Zakupcu, danom isteka registracije dostavi overene
                i produžene saobraćajne dozvole.
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong> </strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong> </strong>
            </td>
        </tr>
        <tr>
            <td>
                <strong> </strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong>ZAVRŠNE ODREDBE</strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong> </strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong>Član 9.</strong>
            </td>
        </tr>
        <tr>
            <td>
                Ovaj Ugovor je zaključen i počinje da se primenjuje od dana kada ga potpišu
                obe Ugovorne strane, odnosno njihovi ovlašćeni predstavnici.
            </td>
        </tr>
        <tr>
            <td>
                Promene vezane za ovaj Ugovor su moguće i biće pravno valjane ukoliko su
                sačinjene u pismenoj formi i potpisane od strane Ugovornih strana.
            </td>
        </tr>
        <tr>
            <td>
                Ugovorne strane su saglasne da će sve eventualne sporove proistekle iz ovog
                ugovornog odnosa nastojati da reše sporazumno, u suprotnom iste će rešavati
                pred stvarno nadležnim sudom u Beogradu.
            </td>
        </tr>
        <tr>
            <td>
                Ovaj Ugovor je sačinjen u 4 (četiri) istovetna primerka, po 2 (dva)
                primerka za svaku Ugovornu stranu.
            </td>
        </tr>
        <tr>
            <td>
                Zakupodavac Zakupac
            </td>
        </tr>
        <tr>
            <td>
                ______________________________ _____________________________________
            </td>
        </tr>
        <tr>
            <td>
                HIT AUTO DOO
            </td>
        </tr>
        <tr>
            <td>
                Zoran Dragoj, direktor
            </td>
        </tr>

    </tbody>


</table>