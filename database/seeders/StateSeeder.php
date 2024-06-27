<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
                [
                    "id" => 1,
                    "country_id" => 70,
                    "name" => "Southern Nations, Nationalities, and Peoples' Region"
                ],
                [
                    "id" => 2,
                    "country_id" => 70,
                    "name" => "Somali Region"
                ],
                [
                    "id" => 3,
                    "country_id" => 70,
                    "name" => "Amhara Region"
                ],
                [
                    "id" => 4,
                    "country_id" => 70,
                    "name" => "Tigray Region"
                ],
                [
                    "id" => 5,
                    "country_id" => 70,
                    "name" => "Oromia Region"
                ],
                [
                    "id" => 6,
                    "country_id" => 70,
                    "name" => "Afar Region"
                ],
                [
                    "id" => 7,
                    "country_id" => 70,
                    "name" => "Harari Region"
                ],
                [
                    "id" => 8,
                    "country_id" => 70,
                    "name" => "Dire Dawa"
                ],
                [
                    "id" => 9,
                    "country_id" => 70,
                    "name" => "Benishangul-Gumuz Region"
                ],
                [
                    "id" => 10,
                    "country_id" => 70,
                    "name" => "Gambela Region"
                ],
                [
                    "id" => 11,
                    "country_id" => 70,
                    "name" => "Addis Ababa"
                ],
                [
                    "id" => 12,
                    "country_id" => 147,
                    "name" => "Petnjica Municipality"
                ],
                [
                    "id" => 13,
                    "country_id" => 147,
                    "name" => "Bar Municipality"
                ],
                [
                    "id" => 14,
                    "country_id" => 147,
                    "name" => "Danilovgrad Municipality"
                ],
                [
                    "id" => 15,
                    "country_id" => 147,
                    "name" => "Rožaje Municipality"
                ],
                [
                    "id" => 16,
                    "country_id" => 147,
                    "name" => "Plužine Municipality"
                ],
                [
                    "id" => 17,
                    "country_id" => 147,
                    "name" => "Nikšić Municipality"
                ],
                [
                    "id" => 18,
                    "country_id" => 147,
                    "name" => "Šavnik Municipality"
                ],
                [
                    "id" => 19,
                    "country_id" => 147,
                    "name" => "Plav Municipality"
                ],
                [
                    "id" => 20,
                    "country_id" => 147,
                    "name" => "Pljevlja Municipality"
                ],
                [
                    "id" => 21,
                    "country_id" => 147,
                    "name" => "Berane Municipality"
                ],
                [
                    "id" => 22,
                    "country_id" => 147,
                    "name" => "Mojkovac Municipality"
                ],
                [
                    "id" => 23,
                    "country_id" => 147,
                    "name" => "Andrijevica Municipality"
                ],
                [
                    "id" => 24,
                    "country_id" => 147,
                    "name" => "Gusinje Municipality"
                ],
                [
                    "id" => 25,
                    "country_id" => 147,
                    "name" => "Bijelo Polje Municipality"
                ],
                [
                    "id" => 26,
                    "country_id" => 147,
                    "name" => "Kotor Municipality"
                ],
                [
                    "id" => 27,
                    "country_id" => 147,
                    "name" => "Podgorica Municipality"
                ],
                [
                    "id" => 28,
                    "country_id" => 147,
                    "name" => "Old Royal Capital Cetinje"
                ],
                [
                    "id" => 29,
                    "country_id" => 147,
                    "name" => "Tivat Municipality"
                ],
                [
                    "id" => 30,
                    "country_id" => 147,
                    "name" => "Budva Municipality"
                ],
                [
                    "id" => 31,
                    "country_id" => 147,
                    "name" => "Kolašin Municipality"
                ],
                [
                    "id" => 32,
                    "country_id" => 147,
                    "name" => "Žabljak Municipality"
                ],
                [
                    "id" => 33,
                    "country_id" => 147,
                    "name" => "Ulcinj Municipality"
                ],
                [
                    "id" => 34,
                    "country_id" => 152,
                    "name" => "Kunene Region"
                ],
                [
                    "id" => 35,
                    "country_id" => 152,
                    "name" => "Kavango West Region"
                ],
                [
                    "id" => 36,
                    "country_id" => 152,
                    "name" => "Kavango East Region"
                ],
                [
                    "id" => 37,
                    "country_id" => 152,
                    "name" => "Oshana Region"
                ],
                [
                    "id" => 38,
                    "country_id" => 152,
                    "name" => "Hardap Region"
                ],
                [
                    "id" => 39,
                    "country_id" => 152,
                    "name" => "Omusati Region"
                ],
                [
                    "id" => 40,
                    "country_id" => 152,
                    "name" => "Ohangwena Region"
                ],
                [
                    "id" => 41,
                    "country_id" => 152,
                    "name" => "Omaheke Region"
                ],
                [
                    "id" => 42,
                    "country_id" => 152,
                    "name" => "Oshikoto Region"
                ],
                [
                    "id" => 43,
                    "country_id" => 152,
                    "name" => "Erongo Region"
                ],
                [
                    "id" => 44,
                    "country_id" => 152,
                    "name" => "Khomas Region"
                ],
                [
                    "id" => 45,
                    "country_id" => 152,
                    "name" => "Karas Region"
                ],
                [
                    "id" => 46,
                    "country_id" => 152,
                    "name" => "Otjozondjupa Region"
                ],
                [
                    "id" => 47,
                    "country_id" => 152,
                    "name" => "Zambezi Region"
                ],
                [
                    "id" => 48,
                    "country_id" => 83,
                    "name" => "Ashanti"
                ],
                [
                    "id" => 49,
                    "country_id" => 83,
                    "name" => "Western"
                ],
                [
                    "id" => 50,
                    "country_id" => 83,
                    "name" => "Eastern"
                ],
                [
                    "id" => 51,
                    "country_id" => 83,
                    "name" => "Northern"
                ],
                [
                    "id" => 52,
                    "country_id" => 83,
                    "name" => "Central"
                ],
                [
                    "id" => 53,
                    "country_id" => 83,
                    "name" => "Ahafo"
                ],
                [
                    "id" => 54,
                    "country_id" => 83,
                    "name" => "Greater Accra"
                ],
                [
                    "id" => 55,
                    "country_id" => 83,
                    "name" => "Upper East"
                ],
                [
                    "id" => 56,
                    "country_id" => 83,
                    "name" => "Volta"
                ],
                [
                    "id" => 57,
                    "country_id" => 83,
                    "name" => "Upper West"
                ],
                [
                    "id" => 58,
                    "country_id" => 192,
                    "name" => "San Marino"
                ],
                [
                    "id" => 59,
                    "country_id" => 192,
                    "name" => "Acquaviva"
                ],
                [
                    "id" => 60,
                    "country_id" => 192,
                    "name" => "Chiesanuova"
                ],
                [
                    "id" => 61,
                    "country_id" => 192,
                    "name" => "Borgo Maggiore"
                ],
                [
                    "id" => 62,
                    "country_id" => 192,
                    "name" => "Faetano"
                ],
                [
                    "id" => 63,
                    "country_id" => 192,
                    "name" => "Montegiardino"
                ],
                [
                    "id" => 64,
                    "country_id" => 192,
                    "name" => "Domagnano"
                ],
                [
                    "id" => 65,
                    "country_id" => 192,
                    "name" => "Serravalle"
                ],
                [
                    "id" => 66,
                    "country_id" => 192,
                    "name" => "Fiorentino"
                ],
                [
                    "id" => 67,
                    "country_id" => 160,
                    "name" => "Tillabéri Region"
                ],
                [
                    "id" => 68,
                    "country_id" => 160,
                    "name" => "Dosso Region"
                ],
                [
                    "id" => 69,
                    "country_id" => 160,
                    "name" => "Zinder Region"
                ],
                [
                    "id" => 70,
                    "country_id" => 160,
                    "name" => "Maradi Region"
                ],
                [
                    "id" => 71,
                    "country_id" => 160,
                    "name" => "Agadez Region"
                ],
                [
                    "id" => 72,
                    "country_id" => 160,
                    "name" => "Diffa Region"
                ],
                [
                    "id" => 73,
                    "country_id" => 160,
                    "name" => "Tahoua Region"
                ],
                [
                    "id" => 74,
                    "country_id" => 135,
                    "name" => "Mqabba"
                ],
                [
                    "id" => 75,
                    "country_id" => 135,
                    "name" => "San Ġwann"
                ],
                [
                    "id" => 76,
                    "country_id" => 135,
                    "name" => "Żurrieq"
                ],
                [
                    "id" => 77,
                    "country_id" => 135,
                    "name" => "Luqa"
                ],
                [
                    "id" => 78,
                    "country_id" => 135,
                    "name" => "Marsaxlokk"
                ],
                [
                    "id" => 79,
                    "country_id" => 135,
                    "name" => "Qala"
                ],
                [
                    "id" => 80,
                    "country_id" => 135,
                    "name" => "Żebbuġ Malta"
                ],
                [
                    "id" => 81,
                    "country_id" => 135,
                    "name" => "Xgħajra"
                ],
                [
                    "id" => 82,
                    "country_id" => 135,
                    "name" => "Kirkop"
                ],
                [
                    "id" => 83,
                    "country_id" => 135,
                    "name" => "Rabat"
                ],
                [
                    "id" => 84,
                    "country_id" => 135,
                    "name" => "Floriana"
                ],
                [
                    "id" => 85,
                    "country_id" => 135,
                    "name" => "Żebbuġ Gozo"
                ],
                [
                    "id" => 86,
                    "country_id" => 135,
                    "name" => "Swieqi"
                ],
                [
                    "id" => 87,
                    "country_id" => 135,
                    "name" => "Saint Lawrence"
                ],
                [
                    "id" => 88,
                    "country_id" => 135,
                    "name" => "Birżebbuġa"
                ],
                [
                    "id" => 89,
                    "country_id" => 135,
                    "name" => "Mdina"
                ],
                [
                    "id" => 90,
                    "country_id" => 135,
                    "name" => "Santa Venera"
                ],
                [
                    "id" => 91,
                    "country_id" => 135,
                    "name" => "Kerċem"
                ],
                [
                    "id" => 92,
                    "country_id" => 135,
                    "name" => "Għarb"
                ],
                [
                    "id" => 93,
                    "country_id" => 135,
                    "name" => "Iklin"
                ],
                [
                    "id" => 94,
                    "country_id" => 135,
                    "name" => "Santa Luċija"
                ],
                [
                    "id" => 95,
                    "country_id" => 135,
                    "name" => "Valletta"
                ],
                [
                    "id" => 96,
                    "country_id" => 135,
                    "name" => "Msida"
                ],
                [
                    "id" => 97,
                    "country_id" => 135,
                    "name" => "Birkirkara"
                ],
                [
                    "id" => 98,
                    "country_id" => 135,
                    "name" => "Siġġiewi"
                ],
                [
                    "id" => 99,
                    "country_id" => 135,
                    "name" => "Kalkara"
                ],
                [
                    "id" => 100,
                    "country_id" => 135,
                    "name" => "St. Julian's"
                ],
                [
                    "id" => 101,
                    "country_id" => 135,
                    "name" => "Victoria"
                ],
                [
                    "id" => 102,
                    "country_id" => 135,
                    "name" => "Mellieħa"
                ],
                [
                    "id" => 103,
                    "country_id" => 135,
                    "name" => "Tarxien"
                ],
                [
                    "id" => 104,
                    "country_id" => 135,
                    "name" => "Sliema"
                ],
                [
                    "id" => 105,
                    "country_id" => 135,
                    "name" => "Ħamrun"
                ],
                [
                    "id" => 106,
                    "country_id" => 135,
                    "name" => "Għasri"
                ],
                [
                    "id" => 107,
                    "country_id" => 135,
                    "name" => "Birgu"
                ],
                [
                    "id" => 108,
                    "country_id" => 135,
                    "name" => "Balzan"
                ],
                [
                    "id" => 109,
                    "country_id" => 135,
                    "name" => "Mġarr"
                ],
                [
                    "id" => 110,
                    "country_id" => 135,
                    "name" => "Attard"
                ],
                [
                    "id" => 111,
                    "country_id" => 135,
                    "name" => "Qrendi"
                ],
                [
                    "id" => 112,
                    "country_id" => 135,
                    "name" => "Naxxar"
                ],
                [
                    "id" => 113,
                    "country_id" => 135,
                    "name" => "Gżira"
                ],
                [
                    "id" => 114,
                    "country_id" => 135,
                    "name" => "Xagħra"
                ],
                [
                    "id" => 115,
                    "country_id" => 135,
                    "name" => "Paola"
                ],
                [
                    "id" => 116,
                    "country_id" => 135,
                    "name" => "Sannat"
                ],
                [
                    "id" => 117,
                    "country_id" => 135,
                    "name" => "Dingli"
                ],
                [
                    "id" => 118,
                    "country_id" => 135,
                    "name" => "Gudja"
                ],
                [
                    "id" => 119,
                    "country_id" => 135,
                    "name" => "Qormi"
                ],
                [
                    "id" => 120,
                    "country_id" => 135,
                    "name" => "Għargħur"
                ],
                [
                    "id" => 121,
                    "country_id" => 135,
                    "name" => "Xewkija"
                ],
                [
                    "id" => 122,
                    "country_id" => 135,
                    "name" => "Ta' Xbiex"
                ],
                [
                    "id" => 123,
                    "country_id" => 135,
                    "name" => "Żabbar"
                ],
                [
                    "id" => 124,
                    "country_id" => 135,
                    "name" => "Għaxaq"
                ],
                [
                    "id" => 125,
                    "country_id" => 135,
                    "name" => "Pembroke"
                ],
                [
                    "id" => 126,
                    "country_id" => 135,
                    "name" => "Lija"
                ],
                [
                    "id" => 127,
                    "country_id" => 135,
                    "name" => "Pietà"
                ],
                [
                    "id" => 128,
                    "country_id" => 135,
                    "name" => "Marsa"
                ],
                [
                    "id" => 129,
                    "country_id" => 135,
                    "name" => "Fgura"
                ],
                [
                    "id" => 130,
                    "country_id" => 135,
                    "name" => "Għajnsielem"
                ],
                [
                    "id" => 131,
                    "country_id" => 135,
                    "name" => "Mtarfa"
                ],
                [
                    "id" => 132,
                    "country_id" => 135,
                    "name" => "Munxar"
                ],
                [
                    "id" => 133,
                    "country_id" => 135,
                    "name" => "Nadur"
                ],
                [
                    "id" => 134,
                    "country_id" => 135,
                    "name" => "Fontana"
                ],
                [
                    "id" => 135,
                    "country_id" => 135,
                    "name" => "Żejtun"
                ],
                [
                    "id" => 136,
                    "country_id" => 135,
                    "name" => "Senglea"
                ],
                [
                    "id" => 137,
                    "country_id" => 135,
                    "name" => "Marsaskala"
                ],
                [
                    "id" => 138,
                    "country_id" => 135,
                    "name" => "Cospicua"
                ],
                [
                    "id" => 139,
                    "country_id" => 135,
                    "name" => "St. Paul's Bay"
                ],
                [
                    "id" => 140,
                    "country_id" => 135,
                    "name" => "Mosta"
                ],
                [
                    "id" => 141,
                    "country_id" => 112,
                    "name" => "Mangystau Region"
                ],
                [
                    "id" => 142,
                    "country_id" => 112,
                    "name" => "Kyzylorda Region"
                ],
                [
                    "id" => 143,
                    "country_id" => 112,
                    "name" => "Almaty Region"
                ],
                [
                    "id" => 144,
                    "country_id" => 112,
                    "name" => "North Kazakhstan Region"
                ],
                [
                    "id" => 145,
                    "country_id" => 112,
                    "name" => "Akmola Region"
                ],
                [
                    "id" => 146,
                    "country_id" => 112,
                    "name" => "Pavlodar Region"
                ],
                [
                    "id" => 147,
                    "country_id" => 112,
                    "name" => "Jambyl Region"
                ],
                [
                    "id" => 148,
                    "country_id" => 112,
                    "name" => "West Kazakhstan Province"
                ],
                [
                    "id" => 149,
                    "country_id" => 112,
                    "name" => "Turkestan Region"
                ],
                [
                    "id" => 150,
                    "country_id" => 112,
                    "name" => "Karaganda Region"
                ],
                [
                    "id" => 151,
                    "country_id" => 112,
                    "name" => "Aktobe Region"
                ],
                [
                    "id" => 152,
                    "country_id" => 112,
                    "name" => "Almaty"
                ],
                [
                    "id" => 153,
                    "country_id" => 112,
                    "name" => "Atyrau Region"
                ],
                [
                    "id" => 154,
                    "country_id" => 112,
                    "name" => "East Kazakhstan Region"
                ],
                [
                    "id" => 155,
                    "country_id" => 112,
                    "name" => "Baikonur"
                ],
                [
                    "id" => 156,
                    "country_id" => 112,
                    "name" => "Nur-Sultan"
                ],
                [
                    "id" => 157,
                    "country_id" => 112,
                    "name" => "Kostanay Region"
                ],
                [
                    "id" => 158,
                    "country_id" => 113,
                    "name" => "Kakamega"
                ],
                [
                    "id" => 159,
                    "country_id" => 113,
                    "name" => "Kisii"
                ],
                [
                    "id" => 161,
                    "country_id" => 113,
                    "name" => "Busia"
                ],
                [
                    "id" => 163,
                    "country_id" => 113,
                    "name" => "Embu"
                ],
                [
                    "id" => 164,
                    "country_id" => 113,
                    "name" => "Laikipia"
                ],
                [
                    "id" => 165,
                    "country_id" => 113,
                    "name" => "Nandi"
                ],
                [
                    "id" => 166,
                    "country_id" => 113,
                    "name" => "Lamu"
                ],
                [
                    "id" => 167,
                    "country_id" => 113,
                    "name" => "Kirinyaga"
                ],
                [
                    "id" => 168,
                    "country_id" => 113,
                    "name" => "Bungoma"
                ],
                [
                    "id" => 169,
                    "country_id" => 113,
                    "name" => "Uasin Gishu"
                ],
                [
                    "id" => 170,
                    "country_id" => 113,
                    "name" => "Isiolo"
                ],
                [
                    "id" => 171,
                    "country_id" => 113,
                    "name" => "Kisumu"
                ],
                [
                    "id" => 173,
                    "country_id" => 113,
                    "name" => "Kwale"
                ],
                [
                    "id" => 174,
                    "country_id" => 113,
                    "name" => "Kilifi"
                ],
                [
                    "id" => 175,
                    "country_id" => 113,
                    "name" => "Narok"
                ],
                [
                    "id" => 176,
                    "country_id" => 113,
                    "name" => "Taita–Taveta"
                ],
                [
                    "id" => 178,
                    "country_id" => 113,
                    "name" => "Murang'a"
                ],
                [
                    "id" => 180,
                    "country_id" => 113,
                    "name" => "Nyeri"
                ],
                [
                    "id" => 181,
                    "country_id" => 113,
                    "name" => "Baringo"
                ],
                [
                    "id" => 182,
                    "country_id" => 113,
                    "name" => "Wajir"
                ],
                [
                    "id" => 183,
                    "country_id" => 113,
                    "name" => "Trans Nzoia"
                ],
                [
                    "id" => 184,
                    "country_id" => 113,
                    "name" => "Machakos"
                ],
                [
                    "id" => 185,
                    "country_id" => 113,
                    "name" => "Tharaka-Nithi"
                ],
                [
                    "id" => 186,
                    "country_id" => 113,
                    "name" => "Siaya"
                ],
                [
                    "id" => 187,
                    "country_id" => 113,
                    "name" => "Mandera"
                ],
                [
                    "id" => 188,
                    "country_id" => 113,
                    "name" => "Makueni"
                ],
                [
                    "id" => 190,
                    "country_id" => 113,
                    "name" => "Migori"
                ],
                [
                    "id" => 191,
                    "country_id" => 113,
                    "name" => "Nairobi City"
                ],
                [
                    "id" => 192,
                    "country_id" => 113,
                    "name" => "Nyandarua"
                ],
                [
                    "id" => 193,
                    "country_id" => 113,
                    "name" => "Kericho"
                ],
                [
                    "id" => 194,
                    "country_id" => 113,
                    "name" => "Marsabit"
                ],
                [
                    "id" => 195,
                    "country_id" => 113,
                    "name" => "Homa Bay"
                ],
                [
                    "id" => 196,
                    "country_id" => 113,
                    "name" => "Garissa"
                ],
                [
                    "id" => 197,
                    "country_id" => 113,
                    "name" => "Kajiado"
                ],
                [
                    "id" => 198,
                    "country_id" => 113,
                    "name" => "Meru"
                ],
                [
                    "id" => 199,
                    "country_id" => 113,
                    "name" => "Kiambu"
                ],
                [
                    "id" => 200,
                    "country_id" => 113,
                    "name" => "Mombasa"
                ],
                [
                    "id" => 201,
                    "country_id" => 113,
                    "name" => "Elgeyo-Marakwet"
                ],
                [
                    "id" => 202,
                    "country_id" => 113,
                    "name" => "Vihiga"
                ],
                [
                    "id" => 203,
                    "country_id" => 113,
                    "name" => "Nakuru"
                ],
                [
                    "id" => 205,
                    "country_id" => 113,
                    "name" => "Tana River"
                ],
                [
                    "id" => 206,
                    "country_id" => 113,
                    "name" => "Turkana"
                ],
                [
                    "id" => 207,
                    "country_id" => 113,
                    "name" => "Samburu"
                ],
                [
                    "id" => 208,
                    "country_id" => 113,
                    "name" => "West Pokot"
                ],
                [
                    "id" => 209,
                    "country_id" => 113,
                    "name" => "Nyamira"
                ],
                [
                    "id" => 210,
                    "country_id" => 113,
                    "name" => "Bomet"
                ],
                [
                    "id" => 211,
                    "country_id" => 113,
                    "name" => "Kitui"
                ],
                [
                    "id" => 212,
                    "country_id" => 7,
                    "name" => "Bié Province"
                ],
                [
                    "id" => 213,
                    "country_id" => 7,
                    "name" => "Huambo Province"
                ],
                [
                    "id" => 214,
                    "country_id" => 7,
                    "name" => "Zaire Province"
                ],
                [
                    "id" => 215,
                    "country_id" => 7,
                    "name" => "Cunene Province"
                ],
                [
                    "id" => 216,
                    "country_id" => 7,
                    "name" => "Cuanza Sul"
                ],
                [
                    "id" => 217,
                    "country_id" => 7,
                    "name" => "Cuanza Norte Province"
                ],
                [
                    "id" => 218,
                    "country_id" => 7,
                    "name" => "Benguela Province"
                ],
                [
                    "id" => 219,
                    "country_id" => 7,
                    "name" => "Moxico Province"
                ],
                [
                    "id" => 220,
                    "country_id" => 7,
                    "name" => "Lunda Sul Province"
                ],
                [
                    "id" => 221,
                    "country_id" => 7,
                    "name" => "Bengo Province"
                ],
                [
                    "id" => 222,
                    "country_id" => 7,
                    "name" => "Luanda Province"
                ],
                [
                    "id" => 223,
                    "country_id" => 7,
                    "name" => "Lunda Norte Province"
                ],
                [
                    "id" => 224,
                    "country_id" => 7,
                    "name" => "Uíge Province"
                ],
                [
                    "id" => 225,
                    "country_id" => 7,
                    "name" => "Huíla Province"
                ],
                [
                    "id" => 226,
                    "country_id" => 7,
                    "name" => "Cuando Cubango Province"
                ],
                [
                    "id" => 227,
                    "country_id" => 7,
                    "name" => "Malanje Province"
                ],
                [
                    "id" => 228,
                    "country_id" => 7,
                    "name" => "Cabinda Province"
                ],
                [
                    "id" => 229,
                    "country_id" => 26,
                    "name" => "Gasa District"
                ],
                [
                    "id" => 230,
                    "country_id" => 26,
                    "name" => "Tsirang District"
                ],
                [
                    "id" => 231,
                    "country_id" => 26,
                    "name" => "Wangdue Phodrang District"
                ],
                [
                    "id" => 232,
                    "country_id" => 26,
                    "name" => "Haa District"
                ],
                [
                    "id" => 233,
                    "country_id" => 26,
                    "name" => "Zhemgang District"
                ],
                [
                    "id" => 234,
                    "country_id" => 26,
                    "name" => "Lhuntse District"
                ],
                [
                    "id" => 235,
                    "country_id" => 26,
                    "name" => "Punakha District"
                ],
                [
                    "id" => 236,
                    "country_id" => 26,
                    "name" => "Trashigang District"
                ],
                [
                    "id" => 237,
                    "country_id" => 26,
                    "name" => "Paro District"
                ],
                [
                    "id" => 238,
                    "country_id" => 26,
                    "name" => "Dagana District"
                ],
                [
                    "id" => 239,
                    "country_id" => 26,
                    "name" => "Chukha District"
                ],
                [
                    "id" => 240,
                    "country_id" => 26,
                    "name" => "Bumthang District"
                ],
                [
                    "id" => 241,
                    "country_id" => 26,
                    "name" => "Thimphu District"
                ],
                [
                    "id" => 242,
                    "country_id" => 26,
                    "name" => "Mongar District"
                ],
                [
                    "id" => 243,
                    "country_id" => 26,
                    "name" => "Samdrup Jongkhar District"
                ],
                [
                    "id" => 244,
                    "country_id" => 26,
                    "name" => "Pemagatshel District"
                ],
                [
                    "id" => 245,
                    "country_id" => 26,
                    "name" => "Trongsa District"
                ],
                [
                    "id" => 246,
                    "country_id" => 26,
                    "name" => "Samtse District"
                ],
                [
                    "id" => 247,
                    "country_id" => 26,
                    "name" => "Sarpang District"
                ],
                [
                    "id" => 248,
                    "country_id" => 134,
                    "name" => "Tombouctou Region"
                ],
                [
                    "id" => 249,
                    "country_id" => 134,
                    "name" => "Ségou Region"
                ],
                [
                    "id" => 250,
                    "country_id" => 134,
                    "name" => "Koulikoro Region"
                ],
                [
                    "id" => 251,
                    "country_id" => 134,
                    "name" => "Ménaka Region"
                ],
                [
                    "id" => 252,
                    "country_id" => 134,
                    "name" => "Kayes Region"
                ],
                [
                    "id" => 253,
                    "country_id" => 134,
                    "name" => "Bamako"
                ],
                [
                    "id" => 254,
                    "country_id" => 134,
                    "name" => "Sikasso Region"
                ],
                [
                    "id" => 255,
                    "country_id" => 134,
                    "name" => "Mopti Region"
                ],
                [
                    "id" => 256,
                    "country_id" => 134,
                    "name" => "Taoudénit Region"
                ],
                [
                    "id" => 257,
                    "country_id" => 134,
                    "name" => "Kidal Region"
                ],
                [
                    "id" => 258,
                    "country_id" => 134,
                    "name" => "Gao Region"
                ],
                [
                    "id" => 259,
                    "country_id" => 183,
                    "name" => "Southern Province"
                ],
                [
                    "id" => 260,
                    "country_id" => 183,
                    "name" => "Western Province"
                ],
                [
                    "id" => 261,
                    "country_id" => 183,
                    "name" => "Eastern Province"
                ],
                [
                    "id" => 262,
                    "country_id" => 183,
                    "name" => "Kigali district"
                ],
                [
                    "id" => 263,
                    "country_id" => 183,
                    "name" => "Northern Province"
                ],
                [
                    "id" => 264,
                    "country_id" => 23,
                    "name" => "Belize District"
                ],
                [
                    "id" => 265,
                    "country_id" => 23,
                    "name" => "Stann Creek District"
                ],
                [
                    "id" => 266,
                    "country_id" => 23,
                    "name" => "Corozal District"
                ],
                [
                    "id" => 267,
                    "country_id" => 23,
                    "name" => "Toledo District"
                ],
                [
                    "id" => 268,
                    "country_id" => 23,
                    "name" => "Orange Walk District"
                ],
                [
                    "id" => 269,
                    "country_id" => 23,
                    "name" => "Cayo District"
                ],
                [
                    "id" => 270,
                    "country_id" => 193,
                    "name" => "Príncipe Province"
                ],
                [
                    "id" => 271,
                    "country_id" => 193,
                    "name" => "São Tomé Province"
                ],
                [
                    "id" => 272,
                    "country_id" => 56,
                    "name" => "Havana Province"
                ],
                [
                    "id" => 273,
                    "country_id" => 56,
                    "name" => "Santiago de Cuba Province"
                ],
                [
                    "id" => 274,
                    "country_id" => 56,
                    "name" => "Sancti Spíritus Province"
                ],
                [
                    "id" => 275,
                    "country_id" => 56,
                    "name" => "Granma Province"
                ],
                [
                    "id" => 276,
                    "country_id" => 56,
                    "name" => "Mayabeque Province"
                ],
                [
                    "id" => 277,
                    "country_id" => 56,
                    "name" => "Pinar del Río Province"
                ],
                [
                    "id" => 278,
                    "country_id" => 56,
                    "name" => "Isla de la Juventud"
                ],
                [
                    "id" => 279,
                    "country_id" => 56,
                    "name" => "Holguín Province"
                ],
                [
                    "id" => 280,
                    "country_id" => 56,
                    "name" => "Villa Clara Province"
                ],
                [
                    "id" => 281,
                    "country_id" => 56,
                    "name" => "Las Tunas Province"
                ],
                [
                    "id" => 282,
                    "country_id" => 56,
                    "name" => "Ciego de Ávila Province"
                ],
                [
                    "id" => 283,
                    "country_id" => 56,
                    "name" => "Artemisa Province"
                ],
                [
                    "id" => 284,
                    "country_id" => 56,
                    "name" => "Matanzas Province"
                ],
                [
                    "id" => 285,
                    "country_id" => 56,
                    "name" => "Guantánamo Province"
                ],
                [
                    "id" => 286,
                    "country_id" => 56,
                    "name" => "Camagüey Province"
                ],
                [
                    "id" => 287,
                    "country_id" => 56,
                    "name" => "Cienfuegos Province"
                ],
                [
                    "id" => 288,
                    "country_id" => 161,
                    "name" => "Jigawa"
                ],
                [
                    "id" => 289,
                    "country_id" => 161,
                    "name" => "Enugu"
                ],
                [
                    "id" => 290,
                    "country_id" => 161,
                    "name" => "Kebbi"
                ],
                [
                    "id" => 291,
                    "country_id" => 161,
                    "name" => "Benue"
                ],
                [
                    "id" => 292,
                    "country_id" => 161,
                    "name" => "Sokoto"
                ],
                [
                    "id" => 293,
                    "country_id" => 161,
                    "name" => "Abuja Federal Capital Territory"
                ],
                [
                    "id" => 294,
                    "country_id" => 161,
                    "name" => "Kaduna"
                ],
                [
                    "id" => 295,
                    "country_id" => 161,
                    "name" => "Kwara"
                ],
                [
                    "id" => 296,
                    "country_id" => 161,
                    "name" => "Oyo"
                ],
                [
                    "id" => 297,
                    "country_id" => 161,
                    "name" => "Yobe"
                ],
                [
                    "id" => 298,
                    "country_id" => 161,
                    "name" => "Kogi"
                ],
                [
                    "id" => 299,
                    "country_id" => 161,
                    "name" => "Zamfara"
                ],
                [
                    "id" => 300,
                    "country_id" => 161,
                    "name" => "Kano"
                ],
                [
                    "id" => 301,
                    "country_id" => 161,
                    "name" => "Nasarawa"
                ],
                [
                    "id" => 302,
                    "country_id" => 161,
                    "name" => "Plateau"
                ],
                [
                    "id" => 303,
                    "country_id" => 161,
                    "name" => "Abia"
                ],
                [
                    "id" => 304,
                    "country_id" => 161,
                    "name" => "Akwa Ibom"
                ],
                [
                    "id" => 305,
                    "country_id" => 161,
                    "name" => "Bayelsa"
                ],
                [
                    "id" => 306,
                    "country_id" => 161,
                    "name" => "Lagos"
                ],
                [
                    "id" => 307,
                    "country_id" => 161,
                    "name" => "Borno"
                ],
                [
                    "id" => 308,
                    "country_id" => 161,
                    "name" => "Imo"
                ],
                [
                    "id" => 309,
                    "country_id" => 161,
                    "name" => "Ekiti"
                ],
                [
                    "id" => 310,
                    "country_id" => 161,
                    "name" => "Gombe"
                ],
                [
                    "id" => 311,
                    "country_id" => 161,
                    "name" => "Ebonyi"
                ],
                [
                    "id" => 312,
                    "country_id" => 161,
                    "name" => "Bauchi"
                ],
                [
                    "id" => 313,
                    "country_id" => 161,
                    "name" => "Katsina"
                ],
                [
                    "id" => 314,
                    "country_id" => 161,
                    "name" => "Cross River"
                ],
                [
                    "id" => 315,
                    "country_id" => 161,
                    "name" => "Anambra"
                ],
                [
                    "id" => 316,
                    "country_id" => 161,
                    "name" => "Delta"
                ],
                [
                    "id" => 317,
                    "country_id" => 161,
                    "name" => "Niger"
                ],
                [
                    "id" => 318,
                    "country_id" => 161,
                    "name" => "Edo"
                ],
                [
                    "id" => 319,
                    "country_id" => 161,
                    "name" => "Taraba"
                ],
                [
                    "id" => 320,
                    "country_id" => 161,
                    "name" => "Adamawa"
                ],
                [
                    "id" => 321,
                    "country_id" => 161,
                    "name" => "Ondo"
                ],
                [
                    "id" => 322,
                    "country_id" => 161,
                    "name" => "Osun"
                ],
                [
                    "id" => 323,
                    "country_id" => 161,
                    "name" => "Ogun"
                ],
                [
                    "id" => 324,
                    "country_id" => 229,
                    "name" => "Rukungiri District"
                ],
                [
                    "id" => 325,
                    "country_id" => 229,
                    "name" => "Kyankwanzi District"
                ],
                [
                    "id" => 326,
                    "country_id" => 229,
                    "name" => "Kabarole District"
                ],
                [
                    "id" => 327,
                    "country_id" => 229,
                    "name" => "Mpigi District"
                ],
                [
                    "id" => 328,
                    "country_id" => 229,
                    "name" => "Apac District"
                ],
                [
                    "id" => 329,
                    "country_id" => 229,
                    "name" => "Abim District"
                ],
                [
                    "id" => 330,
                    "country_id" => 229,
                    "name" => "Yumbe District"
                ],
                [
                    "id" => 331,
                    "country_id" => 229,
                    "name" => "Rukiga District"
                ],
                [
                    "id" => 332,
                    "country_id" => 229,
                    "name" => "Northern Region"
                ],
                [
                    "id" => 333,
                    "country_id" => 229,
                    "name" => "Serere District"
                ],
                [
                    "id" => 334,
                    "country_id" => 229,
                    "name" => "Kamuli District"
                ],
                [
                    "id" => 335,
                    "country_id" => 229,
                    "name" => "Amuru District"
                ],
                [
                    "id" => 336,
                    "country_id" => 229,
                    "name" => "Kaberamaido District"
                ],
                [
                    "id" => 337,
                    "country_id" => 229,
                    "name" => "Namutumba District"
                ],
                [
                    "id" => 338,
                    "country_id" => 229,
                    "name" => "Kibuku District"
                ],
                [
                    "id" => 339,
                    "country_id" => 229,
                    "name" => "Ibanda District"
                ],
                [
                    "id" => 340,
                    "country_id" => 229,
                    "name" => "Iganga District"
                ],
                [
                    "id" => 341,
                    "country_id" => 229,
                    "name" => "Dokolo District"
                ],
                [
                    "id" => 342,
                    "country_id" => 229,
                    "name" => "Lira District"
                ],
                [
                    "id" => 343,
                    "country_id" => 229,
                    "name" => "Bukedea District"
                ],
                [
                    "id" => 344,
                    "country_id" => 229,
                    "name" => "Alebtong District"
                ],
                [
                    "id" => 345,
                    "country_id" => 229,
                    "name" => "Koboko District"
                ],
                [
                    "id" => 346,
                    "country_id" => 229,
                    "name" => "Kiryandongo District"
                ],
                [
                    "id" => 347,
                    "country_id" => 229,
                    "name" => "Kiboga District"
                ],
                [
                    "id" => 348,
                    "country_id" => 229,
                    "name" => "Kitgum District"
                ],
                [
                    "id" => 349,
                    "country_id" => 229,
                    "name" => "Bududa District"
                ],
                [
                    "id" => 350,
                    "country_id" => 229,
                    "name" => "Mbale District"
                ],
                [
                    "id" => 351,
                    "country_id" => 229,
                    "name" => "Namayingo District"
                ],
                [
                    "id" => 352,
                    "country_id" => 229,
                    "name" => "Amuria District"
                ],
                [
                    "id" => 353,
                    "country_id" => 229,
                    "name" => "Amudat District"
                ],
                [
                    "id" => 354,
                    "country_id" => 229,
                    "name" => "Masindi District"
                ],
                [
                    "id" => 355,
                    "country_id" => 229,
                    "name" => "Kiruhura District"
                ],
                [
                    "id" => 356,
                    "country_id" => 229,
                    "name" => "Masaka District"
                ],
                [
                    "id" => 357,
                    "country_id" => 229,
                    "name" => "Pakwach District"
                ],
                [
                    "id" => 358,
                    "country_id" => 229,
                    "name" => "Rubanda District"
                ],
                [
                    "id" => 359,
                    "country_id" => 229,
                    "name" => "Tororo District"
                ],
                [
                    "id" => 360,
                    "country_id" => 229,
                    "name" => "Kamwenge District"
                ],
                [
                    "id" => 361,
                    "country_id" => 229,
                    "name" => "Adjumani District"
                ],
                [
                    "id" => 362,
                    "country_id" => 229,
                    "name" => "Wakiso District"
                ],
                [
                    "id" => 363,
                    "country_id" => 229,
                    "name" => "Moyo District"
                ],
                [
                    "id" => 364,
                    "country_id" => 229,
                    "name" => "Mityana District"
                ],
                [
                    "id" => 365,
                    "country_id" => 229,
                    "name" => "Butaleja District"
                ],
                [
                    "id" => 366,
                    "country_id" => 229,
                    "name" => "Gomba District"
                ],
                [
                    "id" => 367,
                    "country_id" => 229,
                    "name" => "Jinja District"
                ],
                [
                    "id" => 368,
                    "country_id" => 229,
                    "name" => "Kayunga District"
                ],
                [
                    "id" => 369,
                    "country_id" => 229,
                    "name" => "Kween District"
                ],
                [
                    "id" => 370,
                    "country_id" => 229,
                    "name" => "Western Region"
                ],
                [
                    "id" => 371,
                    "country_id" => 229,
                    "name" => "Mubende District"
                ],
                [
                    "id" => 372,
                    "country_id" => 229,
                    "name" => "Eastern Region"
                ],
                [
                    "id" => 373,
                    "country_id" => 229,
                    "name" => "Kanungu District"
                ],
                [
                    "id" => 374,
                    "country_id" => 229,
                    "name" => "Omoro District"
                ],
                [
                    "id" => 375,
                    "country_id" => 229,
                    "name" => "Bukomansimbi District"
                ],
                [
                    "id" => 376,
                    "country_id" => 229,
                    "name" => "Lyantonde District"
                ],
                [
                    "id" => 377,
                    "country_id" => 229,
                    "name" => "Buikwe District"
                ],
                [
                    "id" => 378,
                    "country_id" => 229,
                    "name" => "Nwoya District"
                ],
                [
                    "id" => 379,
                    "country_id" => 229,
                    "name" => "Zombo District"
                ],
                [
                    "id" => 380,
                    "country_id" => 229,
                    "name" => "Buyende District"
                ],
                [
                    "id" => 381,
                    "country_id" => 229,
                    "name" => "Bunyangabu District"
                ],
                [
                    "id" => 382,
                    "country_id" => 229,
                    "name" => "Kampala District"
                ],
                [
                    "id" => 383,
                    "country_id" => 229,
                    "name" => "Isingiro District"
                ],
                [
                    "id" => 384,
                    "country_id" => 229,
                    "name" => "Butambala District"
                ],
                [
                    "id" => 385,
                    "country_id" => 229,
                    "name" => "Bukwo District"
                ],
                [
                    "id" => 386,
                    "country_id" => 229,
                    "name" => "Bushenyi District"
                ],
                [
                    "id" => 387,
                    "country_id" => 229,
                    "name" => "Bugiri District"
                ],
                [
                    "id" => 388,
                    "country_id" => 229,
                    "name" => "Butebo District"
                ],
                [
                    "id" => 389,
                    "country_id" => 229,
                    "name" => "Buliisa District"
                ],
                [
                    "id" => 390,
                    "country_id" => 229,
                    "name" => "Otuke District"
                ],
                [
                    "id" => 391,
                    "country_id" => 229,
                    "name" => "Buhweju District"
                ],
                [
                    "id" => 392,
                    "country_id" => 229,
                    "name" => "Agago District"
                ],
                [
                    "id" => 393,
                    "country_id" => 229,
                    "name" => "Nakapiripirit District"
                ],
                [
                    "id" => 394,
                    "country_id" => 229,
                    "name" => "Kalungu District"
                ],
                [
                    "id" => 395,
                    "country_id" => 229,
                    "name" => "Moroto District"
                ],
                [
                    "id" => 396,
                    "country_id" => 229,
                    "name" => "Central Region"
                ],
                [
                    "id" => 397,
                    "country_id" => 229,
                    "name" => "Oyam District"
                ],
                [
                    "id" => 398,
                    "country_id" => 229,
                    "name" => "Kaliro District"
                ],
                [
                    "id" => 399,
                    "country_id" => 229,
                    "name" => "Kakumiro District"
                ],
                [
                    "id" => 400,
                    "country_id" => 229,
                    "name" => "Namisindwa District"
                ],
                [
                    "id" => 401,
                    "country_id" => 229,
                    "name" => "Kole District"
                ],
                [
                    "id" => 402,
                    "country_id" => 229,
                    "name" => "Kyenjojo District"
                ],
                [
                    "id" => 403,
                    "country_id" => 229,
                    "name" => "Kagadi District"
                ],
                [
                    "id" => 404,
                    "country_id" => 229,
                    "name" => "Ntungamo District"
                ],
                [
                    "id" => 405,
                    "country_id" => 229,
                    "name" => "Kalangala District"
                ],
                [
                    "id" => 406,
                    "country_id" => 229,
                    "name" => "Nakasongola District"
                ],
                [
                    "id" => 407,
                    "country_id" => 229,
                    "name" => "Sheema District"
                ],
                [
                    "id" => 408,
                    "country_id" => 229,
                    "name" => "Pader District"
                ],
                [
                    "id" => 409,
                    "country_id" => 229,
                    "name" => "Kisoro District"
                ],
                [
                    "id" => 410,
                    "country_id" => 229,
                    "name" => "Mukono District"
                ],
                [
                    "id" => 411,
                    "country_id" => 229,
                    "name" => "Lamwo District"
                ],
                [
                    "id" => 412,
                    "country_id" => 229,
                    "name" => "Pallisa District"
                ],
                [
                    "id" => 413,
                    "country_id" => 229,
                    "name" => "Gulu District"
                ],
                [
                    "id" => 414,
                    "country_id" => 229,
                    "name" => "Buvuma District"
                ],
                [
                    "id" => 415,
                    "country_id" => 229,
                    "name" => "Mbarara District"
                ],
                [
                    "id" => 416,
                    "country_id" => 229,
                    "name" => "Amolatar District"
                ],
                [
                    "id" => 417,
                    "country_id" => 229,
                    "name" => "Lwengo District"
                ],
                [
                    "id" => 418,
                    "country_id" => 229,
                    "name" => "Mayuge District"
                ],
                [
                    "id" => 419,
                    "country_id" => 229,
                    "name" => "Bundibugyo District"
                ],
                [
                    "id" => 420,
                    "country_id" => 229,
                    "name" => "Katakwi District"
                ],
                [
                    "id" => 421,
                    "country_id" => 229,
                    "name" => "Maracha District"
                ],
                [
                    "id" => 422,
                    "country_id" => 229,
                    "name" => "Ntoroko District"
                ],
                [
                    "id" => 423,
                    "country_id" => 229,
                    "name" => "Nakaseke District"
                ],
                [
                    "id" => 424,
                    "country_id" => 229,
                    "name" => "Ngora District"
                ],
                [
                    "id" => 425,
                    "country_id" => 229,
                    "name" => "Kumi District"
                ],
                [
                    "id" => 426,
                    "country_id" => 229,
                    "name" => "Kabale District"
                ],
                [
                    "id" => 427,
                    "country_id" => 229,
                    "name" => "Sembabule District"
                ],
                [
                    "id" => 428,
                    "country_id" => 229,
                    "name" => "Bulambuli District"
                ],
                [
                    "id" => 429,
                    "country_id" => 229,
                    "name" => "Sironko District"
                ],
                [
                    "id" => 430,
                    "country_id" => 229,
                    "name" => "Napak District"
                ],
                [
                    "id" => 431,
                    "country_id" => 229,
                    "name" => "Busia District"
                ],
                [
                    "id" => 432,
                    "country_id" => 229,
                    "name" => "Kapchorwa District"
                ],
                [
                    "id" => 433,
                    "country_id" => 229,
                    "name" => "Luwero District"
                ],
                [
                    "id" => 434,
                    "country_id" => 229,
                    "name" => "Kaabong District"
                ],
                [
                    "id" => 435,
                    "country_id" => 229,
                    "name" => "Mitooma District"
                ],
                [
                    "id" => 436,
                    "country_id" => 229,
                    "name" => "Kibaale District"
                ],
                [
                    "id" => 437,
                    "country_id" => 229,
                    "name" => "Kyegegwa District"
                ],
                [
                    "id" => 438,
                    "country_id" => 229,
                    "name" => "Manafwa District"
                ],
                [
                    "id" => 439,
                    "country_id" => 229,
                    "name" => "Rakai District"
                ],
                [
                    "id" => 440,
                    "country_id" => 229,
                    "name" => "Kasese District"
                ],
                [
                    "id" => 441,
                    "country_id" => 229,
                    "name" => "Budaka District"
                ],
                [
                    "id" => 442,
                    "country_id" => 229,
                    "name" => "Rubirizi District"
                ],
                [
                    "id" => 443,
                    "country_id" => 229,
                    "name" => "Kotido District"
                ],
                [
                    "id" => 444,
                    "country_id" => 229,
                    "name" => "Soroti District"
                ],
                [
                    "id" => 445,
                    "country_id" => 229,
                    "name" => "Luuka District"
                ],
                [
                    "id" => 446,
                    "country_id" => 229,
                    "name" => "Nebbi District"
                ],
                [
                    "id" => 447,
                    "country_id" => 229,
                    "name" => "Arua District"
                ],
                [
                    "id" => 448,
                    "country_id" => 229,
                    "name" => "Kyotera District"
                ],
                [
                    "id" => 449,
                    "country_id" => 125,
                    "name" => "Schellenberg"
                ],
                [
                    "id" => 450,
                    "country_id" => 125,
                    "name" => "Schaan"
                ],
                [
                    "id" => 451,
                    "country_id" => 125,
                    "name" => "Eschen"
                ],
                [
                    "id" => 452,
                    "country_id" => 125,
                    "name" => "Vaduz"
                ],
                [
                    "id" => 453,
                    "country_id" => 125,
                    "name" => "Ruggell"
                ],
                [
                    "id" => 454,
                    "country_id" => 125,
                    "name" => "Planken"
                ],
                [
                    "id" => 455,
                    "country_id" => 125,
                    "name" => "Mauren"
                ],
                [
                    "id" => 456,
                    "country_id" => 125,
                    "name" => "Triesenberg"
                ],
                [
                    "id" => 457,
                    "country_id" => 125,
                    "name" => "Gamprin"
                ],
                [
                    "id" => 458,
                    "country_id" => 125,
                    "name" => "Balzers"
                ],
                [
                    "id" => 459,
                    "country_id" => 125,
                    "name" => "Triesen"
                ],
                [
                    "id" => 460,
                    "country_id" => 28,
                    "name" => "Brčko District"
                ],
                [
                    "id" => 461,
                    "country_id" => 28,
                    "name" => "Tuzla Canton"
                ],
                [
                    "id" => 462,
                    "country_id" => 28,
                    "name" => "Central Bosnia Canton"
                ],
                [
                    "id" => 463,
                    "country_id" => 28,
                    "name" => "Herzegovina-Neretva Canton"
                ],
                [
                    "id" => 464,
                    "country_id" => 28,
                    "name" => "Posavina Canton"
                ],
                [
                    "id" => 465,
                    "country_id" => 28,
                    "name" => "Una-Sana Canton"
                ],
                [
                    "id" => 466,
                    "country_id" => 28,
                    "name" => "Sarajevo Canton"
                ],
                [
                    "id" => 467,
                    "country_id" => 28,
                    "name" => "Federation of Bosnia and Herzegovina"
                ],
                [
                    "id" => 468,
                    "country_id" => 28,
                    "name" => "Zenica-Doboj Canton"
                ],
                [
                    "id" => 469,
                    "country_id" => 28,
                    "name" => "West Herzegovina Canton"
                ],
                [
                    "id" => 470,
                    "country_id" => 28,
                    "name" => "Republika Srpska"
                ],
                [
                    "id" => 471,
                    "country_id" => 28,
                    "name" => "Canton 10"
                ],
                [
                    "id" => 472,
                    "country_id" => 28,
                    "name" => "Bosnian Podrinje Canton"
                ],
                [
                    "id" => 473,
                    "country_id" => 195,
                    "name" => "Dakar"
                ],
                [
                    "id" => 474,
                    "country_id" => 195,
                    "name" => "Kolda"
                ],
                [
                    "id" => 475,
                    "country_id" => 195,
                    "name" => "Kaffrine"
                ],
                [
                    "id" => 476,
                    "country_id" => 195,
                    "name" => "Matam"
                ],
                [
                    "id" => 477,
                    "country_id" => 195,
                    "name" => "Saint-Louis"
                ],
                [
                    "id" => 478,
                    "country_id" => 195,
                    "name" => "Ziguinchor"
                ],
                [
                    "id" => 479,
                    "country_id" => 195,
                    "name" => "Fatick"
                ],
                [
                    "id" => 480,
                    "country_id" => 195,
                    "name" => "Diourbel Region"
                ],
                [
                    "id" => 481,
                    "country_id" => 195,
                    "name" => "Kédougou"
                ],
                [
                    "id" => 482,
                    "country_id" => 195,
                    "name" => "Sédhiou"
                ],
                [
                    "id" => 483,
                    "country_id" => 195,
                    "name" => "Kaolack"
                ],
                [
                    "id" => 484,
                    "country_id" => 195,
                    "name" => "Thiès Region"
                ],
                [
                    "id" => 485,
                    "country_id" => 195,
                    "name" => "Louga"
                ],
                [
                    "id" => 486,
                    "country_id" => 195,
                    "name" => "Tambacounda Region"
                ],
                [
                    "id" => 487,
                    "country_id" => 6,
                    "name" => "Encamp"
                ],
                [
                    "id" => 488,
                    "country_id" => 6,
                    "name" => "Andorra la Vella"
                ],
                [
                    "id" => 489,
                    "country_id" => 6,
                    "name" => "Canillo"
                ],
                [
                    "id" => 490,
                    "country_id" => 6,
                    "name" => "Sant Julià de Lòria"
                ],
                [
                    "id" => 491,
                    "country_id" => 6,
                    "name" => "Ordino"
                ],
                [
                    "id" => 492,
                    "country_id" => 6,
                    "name" => "Escaldes-Engordany"
                ],
                [
                    "id" => 493,
                    "country_id" => 6,
                    "name" => "La Massana"
                ],
                [
                    "id" => 494,
                    "country_id" => 197,
                    "name" => "Mont Buxton"
                ],
                [
                    "id" => 495,
                    "country_id" => 197,
                    "name" => "La Digue"
                ],
                [
                    "id" => 496,
                    "country_id" => 197,
                    "name" => "Saint Louis"
                ],
                [
                    "id" => 497,
                    "country_id" => 197,
                    "name" => "Baie Lazare"
                ],
                [
                    "id" => 498,
                    "country_id" => 197,
                    "name" => "Mont Fleuri"
                ],
                [
                    "id" => 499,
                    "country_id" => 197,
                    "name" => "Les Mamelles"
                ],
                [
                    "id" => 500,
                    "country_id" => 197,
                    "name" => "Grand'Anse Mahé"
                ],
                [
                    "id" => 501,
                    "country_id" => 197,
                    "name" => "Roche Caiman"
                ],
                [
                    "id" => 502,
                    "country_id" => 197,
                    "name" => "Anse Royale"
                ],
                [
                    "id" => 503,
                    "country_id" => 197,
                    "name" => "Glacis"
                ],
                [
                    "id" => 504,
                    "country_id" => 197,
                    "name" => "Grand'Anse Praslin"
                ],
                [
                    "id" => 505,
                    "country_id" => 197,
                    "name" => "Bel Ombre"
                ],
                [
                    "id" => 506,
                    "country_id" => 197,
                    "name" => "Anse-aux-Pins"
                ],
                [
                    "id" => 507,
                    "country_id" => 197,
                    "name" => "Port Glaud"
                ],
                [
                    "id" => 508,
                    "country_id" => 197,
                    "name" => "Au Cap"
                ],
                [
                    "id" => 509,
                    "country_id" => 197,
                    "name" => "Takamaka"
                ],
                [
                    "id" => 510,
                    "country_id" => 197,
                    "name" => "Pointe La Rue"
                ],
                [
                    "id" => 511,
                    "country_id" => 197,
                    "name" => "Plaisance"
                ],
                [
                    "id" => 512,
                    "country_id" => 197,
                    "name" => "Beau Vallon"
                ],
                [
                    "id" => 513,
                    "country_id" => 197,
                    "name" => "Anse Boileau"
                ],
                [
                    "id" => 514,
                    "country_id" => 197,
                    "name" => "Baie Sainte Anne"
                ],
                [
                    "id" => 515,
                    "country_id" => 197,
                    "name" => "Bel Air"
                ],
                [
                    "id" => 516,
                    "country_id" => 197,
                    "name" => "La Rivière Anglaise"
                ],
                [
                    "id" => 517,
                    "country_id" => 197,
                    "name" => "Cascade"
                ],
                [
                    "id" => 518,
                    "country_id" => 16,
                    "name" => "Shaki"
                ],
                [
                    "id" => 519,
                    "country_id" => 16,
                    "name" => "Tartar District"
                ],
                [
                    "id" => 520,
                    "country_id" => 16,
                    "name" => "Shirvan"
                ],
                [
                    "id" => 521,
                    "country_id" => 16,
                    "name" => "Qazakh District"
                ],
                [
                    "id" => 522,
                    "country_id" => 16,
                    "name" => "Sadarak District"
                ],
                [
                    "id" => 523,
                    "country_id" => 16,
                    "name" => "Yevlakh District"
                ],
                [
                    "id" => 524,
                    "country_id" => 16,
                    "name" => "Khojali District"
                ],
                [
                    "id" => 525,
                    "country_id" => 16,
                    "name" => "Kalbajar District"
                ],
                [
                    "id" => 526,
                    "country_id" => 16,
                    "name" => "Qakh District"
                ],
                [
                    "id" => 527,
                    "country_id" => 16,
                    "name" => "Fizuli District"
                ],
                [
                    "id" => 528,
                    "country_id" => 16,
                    "name" => "Astara District"
                ],
                [
                    "id" => 529,
                    "country_id" => 16,
                    "name" => "Shamakhi District"
                ],
                [
                    "id" => 530,
                    "country_id" => 16,
                    "name" => "Neftchala District"
                ],
                [
                    "id" => 531,
                    "country_id" => 16,
                    "name" => "Goychay"
                ],
                [
                    "id" => 532,
                    "country_id" => 16,
                    "name" => "Bilasuvar District"
                ],
                [
                    "id" => 533,
                    "country_id" => 16,
                    "name" => "Tovuz District"
                ],
                [
                    "id" => 534,
                    "country_id" => 16,
                    "name" => "Ordubad District"
                ],
                [
                    "id" => 535,
                    "country_id" => 16,
                    "name" => "Sharur District"
                ],
                [
                    "id" => 536,
                    "country_id" => 16,
                    "name" => "Samukh District"
                ],
                [
                    "id" => 537,
                    "country_id" => 16,
                    "name" => "Khizi District"
                ],
                [
                    "id" => 538,
                    "country_id" => 16,
                    "name" => "Yevlakh"
                ],
                [
                    "id" => 539,
                    "country_id" => 16,
                    "name" => "Ujar District"
                ],
                [
                    "id" => 540,
                    "country_id" => 16,
                    "name" => "Absheron District"
                ],
                [
                    "id" => 541,
                    "country_id" => 16,
                    "name" => "Lachin District"
                ],
                [
                    "id" => 542,
                    "country_id" => 16,
                    "name" => "Qabala District"
                ],
                [
                    "id" => 543,
                    "country_id" => 16,
                    "name" => "Agstafa District"
                ],
                [
                    "id" => 544,
                    "country_id" => 16,
                    "name" => "Imishli District"
                ],
                [
                    "id" => 545,
                    "country_id" => 16,
                    "name" => "Salyan District"
                ],
                [
                    "id" => 546,
                    "country_id" => 16,
                    "name" => "Lerik District"
                ],
                [
                    "id" => 547,
                    "country_id" => 16,
                    "name" => "Agsu District"
                ],
                [
                    "id" => 548,
                    "country_id" => 16,
                    "name" => "Qubadli District"
                ],
                [
                    "id" => 549,
                    "country_id" => 16,
                    "name" => "Kurdamir District"
                ],
                [
                    "id" => 550,
                    "country_id" => 16,
                    "name" => "Yardymli District"
                ],
                [
                    "id" => 551,
                    "country_id" => 16,
                    "name" => "Goranboy District"
                ],
                [
                    "id" => 552,
                    "country_id" => 16,
                    "name" => "Baku"
                ],
                [
                    "id" => 553,
                    "country_id" => 16,
                    "name" => "Agdash District"
                ],
                [
                    "id" => 554,
                    "country_id" => 16,
                    "name" => "Beylagan District"
                ],
                [
                    "id" => 555,
                    "country_id" => 16,
                    "name" => "Masally District"
                ],
                [
                    "id" => 556,
                    "country_id" => 16,
                    "name" => "Oghuz District"
                ],
                [
                    "id" => 557,
                    "country_id" => 16,
                    "name" => "Saatly District"
                ],
                [
                    "id" => 558,
                    "country_id" => 16,
                    "name" => "Lankaran District"
                ],
                [
                    "id" => 559,
                    "country_id" => 16,
                    "name" => "Agdam District"
                ],
                [
                    "id" => 560,
                    "country_id" => 16,
                    "name" => "Balakan District"
                ],
                [
                    "id" => 561,
                    "country_id" => 16,
                    "name" => "Dashkasan District"
                ],
                [
                    "id" => 562,
                    "country_id" => 16,
                    "name" => "Nakhchivan Autonomous Republic"
                ],
                [
                    "id" => 563,
                    "country_id" => 16,
                    "name" => "Quba District"
                ],
                [
                    "id" => 564,
                    "country_id" => 16,
                    "name" => "Ismailli District"
                ],
                [
                    "id" => 565,
                    "country_id" => 16,
                    "name" => "Sabirabad District"
                ],
                [
                    "id" => 566,
                    "country_id" => 16,
                    "name" => "Zaqatala District"
                ],
                [
                    "id" => 567,
                    "country_id" => 16,
                    "name" => "Kangarli District"
                ],
                [
                    "id" => 568,
                    "country_id" => 16,
                    "name" => "Martuni"
                ],
                [
                    "id" => 569,
                    "country_id" => 16,
                    "name" => "Barda District"
                ],
                [
                    "id" => 570,
                    "country_id" => 16,
                    "name" => "Jabrayil District"
                ],
                [
                    "id" => 571,
                    "country_id" => 16,
                    "name" => "Hajigabul District"
                ],
                [
                    "id" => 572,
                    "country_id" => 16,
                    "name" => "Julfa District"
                ],
                [
                    "id" => 573,
                    "country_id" => 16,
                    "name" => "Gobustan District"
                ],
                [
                    "id" => 574,
                    "country_id" => 16,
                    "name" => "Goygol District"
                ],
                [
                    "id" => 575,
                    "country_id" => 16,
                    "name" => "Babek District"
                ],
                [
                    "id" => 576,
                    "country_id" => 16,
                    "name" => "Zardab District"
                ],
                [
                    "id" => 577,
                    "country_id" => 16,
                    "name" => "Aghjabadi District"
                ],
                [
                    "id" => 578,
                    "country_id" => 16,
                    "name" => "Jalilabad District"
                ],
                [
                    "id" => 579,
                    "country_id" => 16,
                    "name" => "Shahbuz District"
                ],
                [
                    "id" => 580,
                    "country_id" => 16,
                    "name" => "Mingachevir"
                ],
                [
                    "id" => 581,
                    "country_id" => 16,
                    "name" => "Zangilan District"
                ],
                [
                    "id" => 582,
                    "country_id" => 16,
                    "name" => "Sumqayit"
                ],
                [
                    "id" => 583,
                    "country_id" => 16,
                    "name" => "Shamkir District"
                ],
                [
                    "id" => 584,
                    "country_id" => 16,
                    "name" => "Siazan District"
                ],
                [
                    "id" => 585,
                    "country_id" => 16,
                    "name" => "Ganja"
                ],
                [
                    "id" => 586,
                    "country_id" => 16,
                    "name" => "Shaki District"
                ],
                [
                    "id" => 587,
                    "country_id" => 16,
                    "name" => "Lankaran"
                ],
                [
                    "id" => 588,
                    "country_id" => 16,
                    "name" => "Qusar District"
                ],
                [
                    "id" => 589,
                    "country_id" => 16,
                    "name" => "Gədəbəy"
                ],
                [
                    "id" => 590,
                    "country_id" => 16,
                    "name" => "Khachmaz District"
                ],
                [
                    "id" => 591,
                    "country_id" => 16,
                    "name" => "Shabran District"
                ],
                [
                    "id" => 592,
                    "country_id" => 16,
                    "name" => "Shusha District"
                ],
                [
                    "id" => 593,
                    "country_id" => 3,
                    "name" => "Skrapar District"
                ],
                [
                    "id" => 594,
                    "country_id" => 3,
                    "name" => "Kavajë District"
                ],
                [
                    "id" => 595,
                    "country_id" => 3,
                    "name" => "Lezhë District"
                ],
                [
                    "id" => 596,
                    "country_id" => 3,
                    "name" => "Librazhd District"
                ],
                [
                    "id" => 597,
                    "country_id" => 3,
                    "name" => "Korçë District"
                ],
                [
                    "id" => 598,
                    "country_id" => 3,
                    "name" => "Elbasan County"
                ],
                [
                    "id" => 599,
                    "country_id" => 3,
                    "name" => "Lushnjë District"
                ],
                [
                    "id" => 600,
                    "country_id" => 3,
                    "name" => "Has District"
                ],
                [
                    "id" => 601,
                    "country_id" => 3,
                    "name" => "Kukës County"
                ],
                [
                    "id" => 602,
                    "country_id" => 3,
                    "name" => "Malësi e Madhe District"
                ],
                [
                    "id" => 603,
                    "country_id" => 3,
                    "name" => "Berat County"
                ],
                [
                    "id" => 604,
                    "country_id" => 3,
                    "name" => "Gjirokastër County"
                ],
                [
                    "id" => 605,
                    "country_id" => 3,
                    "name" => "Dibër District"
                ],
                [
                    "id" => 606,
                    "country_id" => 3,
                    "name" => "Pogradec District"
                ],
                [
                    "id" => 607,
                    "country_id" => 3,
                    "name" => "Bulqizë District"
                ],
                [
                    "id" => 608,
                    "country_id" => 3,
                    "name" => "Devoll District"
                ],
                [
                    "id" => 609,
                    "country_id" => 3,
                    "name" => "Lezhë County"
                ],
                [
                    "id" => 610,
                    "country_id" => 3,
                    "name" => "Dibër County"
                ],
                [
                    "id" => 611,
                    "country_id" => 3,
                    "name" => "Shkodër County"
                ],
                [
                    "id" => 612,
                    "country_id" => 3,
                    "name" => "Kuçovë District"
                ],
                [
                    "id" => 613,
                    "country_id" => 3,
                    "name" => "Vlorë District"
                ],
                [
                    "id" => 614,
                    "country_id" => 3,
                    "name" => "Krujë District"
                ],
                [
                    "id" => 615,
                    "country_id" => 3,
                    "name" => "Tirana County"
                ],
                [
                    "id" => 616,
                    "country_id" => 3,
                    "name" => "Tepelenë District"
                ],
                [
                    "id" => 617,
                    "country_id" => 3,
                    "name" => "Gramsh District"
                ],
                [
                    "id" => 618,
                    "country_id" => 3,
                    "name" => "Delvinë District"
                ],
                [
                    "id" => 619,
                    "country_id" => 3,
                    "name" => "Peqin District"
                ],
                [
                    "id" => 620,
                    "country_id" => 3,
                    "name" => "Pukë District"
                ],
                [
                    "id" => 621,
                    "country_id" => 3,
                    "name" => "Gjirokastër District"
                ],
                [
                    "id" => 622,
                    "country_id" => 3,
                    "name" => "Kurbin District"
                ],
                [
                    "id" => 623,
                    "country_id" => 3,
                    "name" => "Kukës District"
                ],
                [
                    "id" => 624,
                    "country_id" => 3,
                    "name" => "Sarandë District"
                ],
                [
                    "id" => 625,
                    "country_id" => 3,
                    "name" => "Përmet District"
                ],
                [
                    "id" => 626,
                    "country_id" => 3,
                    "name" => "Shkodër District"
                ],
                [
                    "id" => 627,
                    "country_id" => 3,
                    "name" => "Fier District"
                ],
                [
                    "id" => 628,
                    "country_id" => 3,
                    "name" => "Kolonjë District"
                ],
                [
                    "id" => 629,
                    "country_id" => 3,
                    "name" => "Berat District"
                ],
                [
                    "id" => 630,
                    "country_id" => 3,
                    "name" => "Korçë County"
                ],
                [
                    "id" => 631,
                    "country_id" => 3,
                    "name" => "Fier County"
                ],
                [
                    "id" => 632,
                    "country_id" => 3,
                    "name" => "Durrës County"
                ],
                [
                    "id" => 633,
                    "country_id" => 3,
                    "name" => "Tirana District"
                ],
                [
                    "id" => 634,
                    "country_id" => 3,
                    "name" => "Vlorë County"
                ],
                [
                    "id" => 635,
                    "country_id" => 3,
                    "name" => "Mat District"
                ],
                [
                    "id" => 636,
                    "country_id" => 3,
                    "name" => "Tropojë District"
                ],
                [
                    "id" => 637,
                    "country_id" => 3,
                    "name" => "Mallakastër District"
                ],
                [
                    "id" => 638,
                    "country_id" => 3,
                    "name" => "Mirditë District"
                ],
                [
                    "id" => 639,
                    "country_id" => 3,
                    "name" => "Durrës District"
                ],
                [
                    "id" => 640,
                    "country_id" => 129,
                    "name" => "Sveti Nikole Municipality"
                ],
                [
                    "id" => 641,
                    "country_id" => 129,
                    "name" => "Kratovo Municipality"
                ],
                [
                    "id" => 642,
                    "country_id" => 129,
                    "name" => "Zajas Municipality"
                ],
                [
                    "id" => 643,
                    "country_id" => 129,
                    "name" => "Staro Nagoričane Municipality"
                ],
                [
                    "id" => 644,
                    "country_id" => 129,
                    "name" => "Češinovo-Obleševo Municipality"
                ],
                [
                    "id" => 645,
                    "country_id" => 129,
                    "name" => "Debarca Municipality"
                ],
                [
                    "id" => 646,
                    "country_id" => 129,
                    "name" => "Probištip Municipality"
                ],
                [
                    "id" => 647,
                    "country_id" => 129,
                    "name" => "Krivogaštani Municipality"
                ],
                [
                    "id" => 648,
                    "country_id" => 129,
                    "name" => "Gevgelija Municipality"
                ],
                [
                    "id" => 649,
                    "country_id" => 129,
                    "name" => "Bogdanci Municipality"
                ],
                [
                    "id" => 650,
                    "country_id" => 129,
                    "name" => "Vraneštica Municipality"
                ],
                [
                    "id" => 651,
                    "country_id" => 129,
                    "name" => "Veles Municipality"
                ],
                [
                    "id" => 652,
                    "country_id" => 129,
                    "name" => "Bosilovo Municipality"
                ],
                [
                    "id" => 653,
                    "country_id" => 129,
                    "name" => "Mogila Municipality"
                ],
                [
                    "id" => 654,
                    "country_id" => 129,
                    "name" => "Tearce Municipality"
                ],
                [
                    "id" => 655,
                    "country_id" => 129,
                    "name" => "Demir Kapija Municipality"
                ],
                [
                    "id" => 656,
                    "country_id" => 129,
                    "name" => "Aračinovo Municipality"
                ],
                [
                    "id" => 657,
                    "country_id" => 129,
                    "name" => "Drugovo Municipality"
                ],
                [
                    "id" => 658,
                    "country_id" => 129,
                    "name" => "Vasilevo Municipality"
                ],
                [
                    "id" => 659,
                    "country_id" => 129,
                    "name" => "Lipkovo Municipality"
                ],
                [
                    "id" => 660,
                    "country_id" => 129,
                    "name" => "Brvenica Municipality"
                ],
                [
                    "id" => 661,
                    "country_id" => 129,
                    "name" => "Štip Municipality"
                ],
                [
                    "id" => 662,
                    "country_id" => 129,
                    "name" => "Vevčani Municipality"
                ],
                [
                    "id" => 663,
                    "country_id" => 129,
                    "name" => "Tetovo Municipality"
                ],
                [
                    "id" => 664,
                    "country_id" => 129,
                    "name" => "Negotino Municipality"
                ],
                [
                    "id" => 665,
                    "country_id" => 129,
                    "name" => "Konče Municipality"
                ],
                [
                    "id" => 666,
                    "country_id" => 129,
                    "name" => "Prilep Municipality"
                ],
                [
                    "id" => 667,
                    "country_id" => 129,
                    "name" => "Saraj Municipality"
                ],
                [
                    "id" => 668,
                    "country_id" => 129,
                    "name" => "Želino Municipality"
                ],
                [
                    "id" => 669,
                    "country_id" => 129,
                    "name" => "Mavrovo and Rostuša Municipality"
                ],
                [
                    "id" => 670,
                    "country_id" => 129,
                    "name" => "Plasnica Municipality"
                ],
                [
                    "id" => 671,
                    "country_id" => 129,
                    "name" => "Valandovo Municipality"
                ],
                [
                    "id" => 672,
                    "country_id" => 129,
                    "name" => "Vinica Municipality"
                ],
                [
                    "id" => 673,
                    "country_id" => 129,
                    "name" => "Zrnovci Municipality"
                ],
                [
                    "id" => 674,
                    "country_id" => 129,
                    "name" => "Karbinci"
                ],
                [
                    "id" => 675,
                    "country_id" => 129,
                    "name" => "Dolneni Municipality"
                ],
                [
                    "id" => 676,
                    "country_id" => 129,
                    "name" => "Čaška Municipality"
                ],
                [
                    "id" => 677,
                    "country_id" => 129,
                    "name" => "Kriva Palanka Municipality"
                ],
                [
                    "id" => 678,
                    "country_id" => 129,
                    "name" => "Jegunovce Municipality"
                ],
                [
                    "id" => 679,
                    "country_id" => 129,
                    "name" => "Bitola Municipality"
                ],
                [
                    "id" => 680,
                    "country_id" => 129,
                    "name" => "Šuto Orizari Municipality"
                ],
                [
                    "id" => 681,
                    "country_id" => 129,
                    "name" => "Karpoš Municipality"
                ],
                [
                    "id" => 682,
                    "country_id" => 129,
                    "name" => "Oslomej Municipality"
                ],
                [
                    "id" => 683,
                    "country_id" => 129,
                    "name" => "Kumanovo Municipality"
                ],
                [
                    "id" => 684,
                    "country_id" => 129,
                    "name" => "Greater Skopje"
                ],
                [
                    "id" => 685,
                    "country_id" => 129,
                    "name" => "Pehčevo Municipality"
                ],
                [
                    "id" => 686,
                    "country_id" => 129,
                    "name" => "Kisela Voda Municipality"
                ],
                [
                    "id" => 687,
                    "country_id" => 129,
                    "name" => "Demir Hisar Municipality"
                ],
                [
                    "id" => 688,
                    "country_id" => 129,
                    "name" => "Kičevo Municipality"
                ],
                [
                    "id" => 689,
                    "country_id" => 129,
                    "name" => "Vrapčište Municipality"
                ],
                [
                    "id" => 690,
                    "country_id" => 129,
                    "name" => "Ilinden Municipality"
                ],
                [
                    "id" => 691,
                    "country_id" => 129,
                    "name" => "Rosoman Municipality"
                ],
                [
                    "id" => 692,
                    "country_id" => 129,
                    "name" => "Makedonski Brod Municipality"
                ],
                [
                    "id" => 693,
                    "country_id" => 129,
                    "name" => "Gostivar Municipality"
                ],
                [
                    "id" => 694,
                    "country_id" => 129,
                    "name" => "Butel Municipality"
                ],
                [
                    "id" => 695,
                    "country_id" => 129,
                    "name" => "Delčevo Municipality"
                ],
                [
                    "id" => 696,
                    "country_id" => 129,
                    "name" => "Novaci Municipality"
                ],
                [
                    "id" => 697,
                    "country_id" => 129,
                    "name" => "Dojran Municipality"
                ],
                [
                    "id" => 698,
                    "country_id" => 129,
                    "name" => "Petrovec Municipality"
                ],
                [
                    "id" => 699,
                    "country_id" => 129,
                    "name" => "Ohrid Municipality"
                ],
                [
                    "id" => 700,
                    "country_id" => 129,
                    "name" => "Struga Municipality"
                ],
                [
                    "id" => 701,
                    "country_id" => 129,
                    "name" => "Makedonska Kamenica Municipality"
                ],
                [
                    "id" => 702,
                    "country_id" => 129,
                    "name" => "Centar Municipality"
                ],
                [
                    "id" => 703,
                    "country_id" => 129,
                    "name" => "Aerodrom Municipality"
                ],
                [
                    "id" => 704,
                    "country_id" => 129,
                    "name" => "Čair Municipality"
                ],
                [
                    "id" => 705,
                    "country_id" => 129,
                    "name" => "Lozovo Municipality"
                ],
                [
                    "id" => 706,
                    "country_id" => 129,
                    "name" => "Zelenikovo Municipality"
                ],
                [
                    "id" => 707,
                    "country_id" => 129,
                    "name" => "Gazi Baba Municipality"
                ],
                [
                    "id" => 708,
                    "country_id" => 129,
                    "name" => "Gradsko Municipality"
                ],
                [
                    "id" => 709,
                    "country_id" => 129,
                    "name" => "Radoviš Municipality"
                ],
                [
                    "id" => 710,
                    "country_id" => 129,
                    "name" => "Strumica Municipality"
                ],
                [
                    "id" => 711,
                    "country_id" => 129,
                    "name" => "Studeničani Municipality"
                ],
                [
                    "id" => 712,
                    "country_id" => 129,
                    "name" => "Resen Municipality"
                ],
                [
                    "id" => 713,
                    "country_id" => 129,
                    "name" => "Kavadarci Municipality"
                ],
                [
                    "id" => 714,
                    "country_id" => 129,
                    "name" => "Kruševo Municipality"
                ],
                [
                    "id" => 715,
                    "country_id" => 129,
                    "name" => "Čučer-Sandevo Municipality"
                ],
                [
                    "id" => 716,
                    "country_id" => 129,
                    "name" => "Berovo Municipality"
                ],
                [
                    "id" => 717,
                    "country_id" => 129,
                    "name" => "Rankovce Municipality"
                ],
                [
                    "id" => 718,
                    "country_id" => 129,
                    "name" => "Novo Selo Municipality"
                ],
                [
                    "id" => 719,
                    "country_id" => 129,
                    "name" => "Sopište Municipality"
                ],
                [
                    "id" => 720,
                    "country_id" => 129,
                    "name" => "Centar Župa Municipality"
                ],
                [
                    "id" => 721,
                    "country_id" => 129,
                    "name" => "Bogovinje Municipality"
                ],
                [
                    "id" => 722,
                    "country_id" => 129,
                    "name" => "Gjorče Petrov Municipality"
                ],
                [
                    "id" => 723,
                    "country_id" => 129,
                    "name" => "Kočani Municipality"
                ],
                [
                    "id" => 724,
                    "country_id" => 55,
                    "name" => "Požega-Slavonia"
                ],
                [
                    "id" => 725,
                    "country_id" => 55,
                    "name" => "Split-Dalmatia"
                ],
                [
                    "id" => 726,
                    "country_id" => 55,
                    "name" => "Međimurje"
                ],
                [
                    "id" => 727,
                    "country_id" => 55,
                    "name" => "Zadar"
                ],
                [
                    "id" => 728,
                    "country_id" => 55,
                    "name" => "Dubrovnik-Neretva"
                ],
                [
                    "id" => 729,
                    "country_id" => 55,
                    "name" => "Krapina-Zagorje"
                ],
                [
                    "id" => 730,
                    "country_id" => 55,
                    "name" => "Šibenik-Knin"
                ],
                [
                    "id" => 731,
                    "country_id" => 55,
                    "name" => "Lika-Senj"
                ],
                [
                    "id" => 732,
                    "country_id" => 55,
                    "name" => "Virovitica-Podravina"
                ],
                [
                    "id" => 733,
                    "country_id" => 55,
                    "name" => "Sisak-Moslavina"
                ],
                [
                    "id" => 734,
                    "country_id" => 55,
                    "name" => "Bjelovar-Bilogora"
                ],
                [
                    "id" => 735,
                    "country_id" => 55,
                    "name" => "Primorje-Gorski Kotar"
                ],
                [
                    "id" => 736,
                    "country_id" => 55,
                    "name" => "Zagreb"
                ],
                [
                    "id" => 737,
                    "country_id" => 55,
                    "name" => "Brod-Posavina"
                ],
                [
                    "id" => 738,
                    "country_id" => 55,
                    "name" => "Zagreb"
                ],
                [
                    "id" => 739,
                    "country_id" => 55,
                    "name" => "Varaždin"
                ],
                [
                    "id" => 740,
                    "country_id" => 55,
                    "name" => "Osijek-Baranja"
                ],
                [
                    "id" => 741,
                    "country_id" => 55,
                    "name" => "Vukovar-Syrmia"
                ],
                [
                    "id" => 742,
                    "country_id" => 55,
                    "name" => "Koprivnica-Križevci"
                ],
                [
                    "id" => 743,
                    "country_id" => 55,
                    "name" => "Istria"
                ],
                [
                    "id" => 744,
                    "country_id" => 57,
                    "name" => "Kyrenia District (Keryneia)"
                ],
                [
                    "id" => 745,
                    "country_id" => 57,
                    "name" => "Nicosia District (Lefkoşa)"
                ],
                [
                    "id" => 746,
                    "country_id" => 57,
                    "name" => "Paphos District (Pafos)"
                ],
                [
                    "id" => 747,
                    "country_id" => 57,
                    "name" => "Larnaca District (Larnaka)"
                ],
                [
                    "id" => 748,
                    "country_id" => 57,
                    "name" => "Limassol District (Leymasun)"
                ],
                [
                    "id" => 749,
                    "country_id" => 57,
                    "name" => "Famagusta District (Mağusa)"
                ],
                [
                    "id" => 750,
                    "country_id" => 19,
                    "name" => "Rangpur Division"
                ],
                [
                    "id" => 751,
                    "country_id" => 19,
                    "name" => "Cox's Bazar District"
                ],
                [
                    "id" => 752,
                    "country_id" => 19,
                    "name" => "Bandarban District"
                ],
                [
                    "id" => 753,
                    "country_id" => 19,
                    "name" => "Rajshahi Division"
                ],
                [
                    "id" => 754,
                    "country_id" => 19,
                    "name" => "Pabna District"
                ],
                [
                    "id" => 755,
                    "country_id" => 19,
                    "name" => "Sherpur District"
                ],
                [
                    "id" => 756,
                    "country_id" => 19,
                    "name" => "Bhola District"
                ],
                [
                    "id" => 757,
                    "country_id" => 19,
                    "name" => "Jessore District"
                ],
                [
                    "id" => 758,
                    "country_id" => 19,
                    "name" => "Mymensingh Division"
                ],
                [
                    "id" => 759,
                    "country_id" => 19,
                    "name" => "Rangpur District"
                ],
                [
                    "id" => 760,
                    "country_id" => 19,
                    "name" => "Dhaka Division"
                ],
                [
                    "id" => 761,
                    "country_id" => 19,
                    "name" => "Chapai Nawabganj District"
                ],
                [
                    "id" => 762,
                    "country_id" => 19,
                    "name" => "Faridpur District"
                ],
                [
                    "id" => 763,
                    "country_id" => 19,
                    "name" => "Comilla District"
                ],
                [
                    "id" => 764,
                    "country_id" => 19,
                    "name" => "Netrokona District"
                ],
                [
                    "id" => 765,
                    "country_id" => 19,
                    "name" => "Sylhet Division"
                ],
                [
                    "id" => 766,
                    "country_id" => 19,
                    "name" => "Mymensingh District"
                ],
                [
                    "id" => 767,
                    "country_id" => 19,
                    "name" => "Sylhet District"
                ],
                [
                    "id" => 768,
                    "country_id" => 19,
                    "name" => "Chandpur District"
                ],
                [
                    "id" => 769,
                    "country_id" => 19,
                    "name" => "Narail District"
                ],
                [
                    "id" => 770,
                    "country_id" => 19,
                    "name" => "Narayanganj District"
                ],
                [
                    "id" => 771,
                    "country_id" => 19,
                    "name" => "Dhaka District"
                ],
                [
                    "id" => 772,
                    "country_id" => 19,
                    "name" => "Nilphamari District"
                ],
                [
                    "id" => 773,
                    "country_id" => 19,
                    "name" => "Rajbari District"
                ],
                [
                    "id" => 774,
                    "country_id" => 19,
                    "name" => "Kushtia District"
                ],
                [
                    "id" => 775,
                    "country_id" => 19,
                    "name" => "Khulna Division"
                ],
                [
                    "id" => 776,
                    "country_id" => 19,
                    "name" => "Meherpur District"
                ],
                [
                    "id" => 777,
                    "country_id" => 19,
                    "name" => "Patuakhali District"
                ],
                [
                    "id" => 778,
                    "country_id" => 19,
                    "name" => "Jhalokati District"
                ],
                [
                    "id" => 779,
                    "country_id" => 19,
                    "name" => "Kishoreganj District"
                ],
                [
                    "id" => 780,
                    "country_id" => 19,
                    "name" => "Lalmonirhat District"
                ],
                [
                    "id" => 781,
                    "country_id" => 19,
                    "name" => "Sirajganj District"
                ],
                [
                    "id" => 782,
                    "country_id" => 19,
                    "name" => "Tangail District"
                ],
                [
                    "id" => 783,
                    "country_id" => 19,
                    "name" => "Dinajpur District"
                ],
                [
                    "id" => 784,
                    "country_id" => 19,
                    "name" => "Barguna District"
                ],
                [
                    "id" => 785,
                    "country_id" => 19,
                    "name" => "Chittagong District"
                ],
                [
                    "id" => 786,
                    "country_id" => 19,
                    "name" => "Khagrachari District"
                ],
                [
                    "id" => 787,
                    "country_id" => 19,
                    "name" => "Natore District"
                ],
                [
                    "id" => 788,
                    "country_id" => 19,
                    "name" => "Chuadanga District"
                ],
                [
                    "id" => 789,
                    "country_id" => 19,
                    "name" => "Jhenaidah District"
                ],
                [
                    "id" => 790,
                    "country_id" => 19,
                    "name" => "Munshiganj District"
                ],
                [
                    "id" => 791,
                    "country_id" => 19,
                    "name" => "Pirojpur District"
                ],
                [
                    "id" => 792,
                    "country_id" => 19,
                    "name" => "Gopalganj District"
                ],
                [
                    "id" => 793,
                    "country_id" => 19,
                    "name" => "Kurigram District"
                ],
                [
                    "id" => 794,
                    "country_id" => 19,
                    "name" => "Moulvibazar District"
                ],
                [
                    "id" => 795,
                    "country_id" => 19,
                    "name" => "Gaibandha District"
                ],
                [
                    "id" => 796,
                    "country_id" => 19,
                    "name" => "Bagerhat District"
                ],
                [
                    "id" => 797,
                    "country_id" => 19,
                    "name" => "Bogra District"
                ],
                [
                    "id" => 798,
                    "country_id" => 19,
                    "name" => "Gazipur District"
                ],
                [
                    "id" => 799,
                    "country_id" => 19,
                    "name" => "Satkhira District"
                ],
                [
                    "id" => 800,
                    "country_id" => 19,
                    "name" => "Panchagarh District"
                ],
                [
                    "id" => 801,
                    "country_id" => 19,
                    "name" => "Shariatpur District"
                ],
                [
                    "id" => 802,
                    "country_id" => 19,
                    "name" => "Bahadia"
                ],
                [
                    "id" => 803,
                    "country_id" => 19,
                    "name" => "Chittagong Division"
                ],
                [
                    "id" => 804,
                    "country_id" => 19,
                    "name" => "Thakurgaon District"
                ],
                [
                    "id" => 805,
                    "country_id" => 19,
                    "name" => "Habiganj District"
                ],
                [
                    "id" => 806,
                    "country_id" => 19,
                    "name" => "Joypurhat District"
                ],
                [
                    "id" => 807,
                    "country_id" => 19,
                    "name" => "Barisal Division"
                ],
                [
                    "id" => 808,
                    "country_id" => 19,
                    "name" => "Jamalpur District"
                ],
                [
                    "id" => 809,
                    "country_id" => 19,
                    "name" => "Rangamati Hill District"
                ],
                [
                    "id" => 810,
                    "country_id" => 19,
                    "name" => "Brahmanbaria District"
                ],
                [
                    "id" => 811,
                    "country_id" => 19,
                    "name" => "Khulna District"
                ],
                [
                    "id" => 812,
                    "country_id" => 19,
                    "name" => "Sunamganj District"
                ],
                [
                    "id" => 813,
                    "country_id" => 19,
                    "name" => "Rajshahi District"
                ],
                [
                    "id" => 814,
                    "country_id" => 19,
                    "name" => "Naogaon District"
                ],
                [
                    "id" => 815,
                    "country_id" => 19,
                    "name" => "Noakhali District"
                ],
                [
                    "id" => 816,
                    "country_id" => 19,
                    "name" => "Feni District"
                ],
                [
                    "id" => 817,
                    "country_id" => 19,
                    "name" => "Madaripur District"
                ],
                [
                    "id" => 818,
                    "country_id" => 19,
                    "name" => "Barisal District"
                ],
                [
                    "id" => 819,
                    "country_id" => 19,
                    "name" => "Lakshmipur District"
                ],
                [
                    "id" => 820,
                    "country_id" => 109,
                    "name" => "Okayama Prefecture"
                ],
                [
                    "id" => 821,
                    "country_id" => 109,
                    "name" => "Chiba Prefecture"
                ],
                [
                    "id" => 822,
                    "country_id" => 109,
                    "name" => "Ōita Prefecture"
                ],
                [
                    "id" => 823,
                    "country_id" => 109,
                    "name" => "Tokyo"
                ],
                [
                    "id" => 824,
                    "country_id" => 109,
                    "name" => "Nara Prefecture"
                ],
                [
                    "id" => 825,
                    "country_id" => 109,
                    "name" => "Shizuoka Prefecture"
                ],
                [
                    "id" => 826,
                    "country_id" => 109,
                    "name" => "Shimane Prefecture"
                ],
                [
                    "id" => 827,
                    "country_id" => 109,
                    "name" => "Aichi Prefecture"
                ],
                [
                    "id" => 828,
                    "country_id" => 109,
                    "name" => "Hiroshima Prefecture"
                ],
                [
                    "id" => 829,
                    "country_id" => 109,
                    "name" => "Akita Prefecture"
                ],
                [
                    "id" => 830,
                    "country_id" => 109,
                    "name" => "Ishikawa Prefecture"
                ],
                [
                    "id" => 831,
                    "country_id" => 109,
                    "name" => "Hyōgo Prefecture"
                ],
                [
                    "id" => 832,
                    "country_id" => 109,
                    "name" => "Hokkaidō Prefecture"
                ],
                [
                    "id" => 833,
                    "country_id" => 109,
                    "name" => "Mie Prefecture"
                ],
                [
                    "id" => 834,
                    "country_id" => 109,
                    "name" => "Kyōto Prefecture"
                ],
                [
                    "id" => 835,
                    "country_id" => 109,
                    "name" => "Yamaguchi Prefecture"
                ],
                [
                    "id" => 836,
                    "country_id" => 109,
                    "name" => "Tokushima Prefecture"
                ],
                [
                    "id" => 837,
                    "country_id" => 109,
                    "name" => "Yamagata Prefecture"
                ],
                [
                    "id" => 838,
                    "country_id" => 109,
                    "name" => "Toyama Prefecture"
                ],
                [
                    "id" => 839,
                    "country_id" => 109,
                    "name" => "Aomori Prefecture"
                ],
                [
                    "id" => 840,
                    "country_id" => 109,
                    "name" => "Kagoshima Prefecture"
                ],
                [
                    "id" => 841,
                    "country_id" => 109,
                    "name" => "Niigata Prefecture"
                ],
                [
                    "id" => 842,
                    "country_id" => 109,
                    "name" => "Kanagawa Prefecture"
                ],
                [
                    "id" => 843,
                    "country_id" => 109,
                    "name" => "Nagano Prefecture"
                ],
                [
                    "id" => 844,
                    "country_id" => 109,
                    "name" => "Wakayama Prefecture"
                ],
                [
                    "id" => 845,
                    "country_id" => 109,
                    "name" => "Shiga Prefecture"
                ],
                [
                    "id" => 846,
                    "country_id" => 109,
                    "name" => "Kumamoto Prefecture"
                ],
                [
                    "id" => 847,
                    "country_id" => 109,
                    "name" => "Fukushima Prefecture"
                ],
                [
                    "id" => 848,
                    "country_id" => 109,
                    "name" => "Fukui Prefecture"
                ],
                [
                    "id" => 849,
                    "country_id" => 109,
                    "name" => "Nagasaki Prefecture"
                ],
                [
                    "id" => 850,
                    "country_id" => 109,
                    "name" => "Tottori Prefecture"
                ],
                [
                    "id" => 851,
                    "country_id" => 109,
                    "name" => "Ibaraki Prefecture"
                ],
                [
                    "id" => 852,
                    "country_id" => 109,
                    "name" => "Yamanashi Prefecture"
                ],
                [
                    "id" => 853,
                    "country_id" => 109,
                    "name" => "Okinawa Prefecture"
                ],
                [
                    "id" => 854,
                    "country_id" => 109,
                    "name" => "Tochigi Prefecture"
                ],
                [
                    "id" => 855,
                    "country_id" => 109,
                    "name" => "Miyazaki Prefecture"
                ],
                [
                    "id" => 856,
                    "country_id" => 109,
                    "name" => "Iwate Prefecture"
                ],
                [
                    "id" => 857,
                    "country_id" => 109,
                    "name" => "Miyagi Prefecture"
                ],
                [
                    "id" => 858,
                    "country_id" => 109,
                    "name" => "Gifu Prefecture"
                ],
                [
                    "id" => 859,
                    "country_id" => 109,
                    "name" => "Ōsaka Prefecture"
                ],
                [
                    "id" => 860,
                    "country_id" => 109,
                    "name" => "Saitama Prefecture"
                ],
                [
                    "id" => 861,
                    "country_id" => 109,
                    "name" => "Fukuoka Prefecture"
                ],
                [
                    "id" => 862,
                    "country_id" => 109,
                    "name" => "Gunma Prefecture"
                ],
                [
                    "id" => 863,
                    "country_id" => 109,
                    "name" => "Saga Prefecture"
                ],
                [
                    "id" => 864,
                    "country_id" => 109,
                    "name" => "Kagawa Prefecture"
                ],
                [
                    "id" => 865,
                    "country_id" => 109,
                    "name" => "Ehime Prefecture"
                ],
                [
                    "id" => 866,
                    "country_id" => 39,
                    "name" => "Ontario"
                ],
                [
                    "id" => 867,
                    "country_id" => 39,
                    "name" => "Manitoba"
                ],
                [
                    "id" => 868,
                    "country_id" => 39,
                    "name" => "New Brunswick"
                ],
                [
                    "id" => 869,
                    "country_id" => 39,
                    "name" => "Yukon"
                ],
                [
                    "id" => 870,
                    "country_id" => 39,
                    "name" => "Saskatchewan"
                ],
                [
                    "id" => 871,
                    "country_id" => 39,
                    "name" => "Prince Edward Island"
                ],
                [
                    "id" => 872,
                    "country_id" => 39,
                    "name" => "Alberta"
                ],
                [
                    "id" => 873,
                    "country_id" => 39,
                    "name" => "Quebec"
                ],
                [
                    "id" => 874,
                    "country_id" => 39,
                    "name" => "Nova Scotia"
                ],
                [
                    "id" => 875,
                    "country_id" => 39,
                    "name" => "British Columbia"
                ],
                [
                    "id" => 876,
                    "country_id" => 39,
                    "name" => "Nunavut"
                ],
                [
                    "id" => 877,
                    "country_id" => 39,
                    "name" => "Newfoundland and Labrador"
                ],
                [
                    "id" => 878,
                    "country_id" => 39,
                    "name" => "Northwest Territories"
                ],
                [
                    "id" => 879,
                    "country_id" => 209,
                    "name" => "White Nile"
                ],
                [
                    "id" => 880,
                    "country_id" => 209,
                    "name" => "Red Sea"
                ],
                [
                    "id" => 881,
                    "country_id" => 209,
                    "name" => "Khartoum"
                ],
                [
                    "id" => 882,
                    "country_id" => 209,
                    "name" => "Sennar"
                ],
                [
                    "id" => 883,
                    "country_id" => 209,
                    "name" => "South Kordofan"
                ],
                [
                    "id" => 884,
                    "country_id" => 209,
                    "name" => "Kassala"
                ],
                [
                    "id" => 885,
                    "country_id" => 209,
                    "name" => "Al Jazirah"
                ],
                [
                    "id" => 886,
                    "country_id" => 209,
                    "name" => "Al Qadarif"
                ],
                [
                    "id" => 887,
                    "country_id" => 209,
                    "name" => "Blue Nile"
                ],
                [
                    "id" => 888,
                    "country_id" => 209,
                    "name" => "West Darfur"
                ],
                [
                    "id" => 889,
                    "country_id" => 209,
                    "name" => "West Kordofan"
                ],
                [
                    "id" => 890,
                    "country_id" => 209,
                    "name" => "North Darfur"
                ],
                [
                    "id" => 891,
                    "country_id" => 209,
                    "name" => "River Nile"
                ],
                [
                    "id" => 892,
                    "country_id" => 209,
                    "name" => "East Darfur"
                ],
                [
                    "id" => 893,
                    "country_id" => 209,
                    "name" => "North Kordofan"
                ],
                [
                    "id" => 894,
                    "country_id" => 209,
                    "name" => "South Darfur"
                ],
                [
                    "id" => 895,
                    "country_id" => 209,
                    "name" => "Northern"
                ],
                [
                    "id" => 896,
                    "country_id" => 209,
                    "name" => "Central Darfur"
                ],
                [
                    "id" => 897,
                    "country_id" => 81,
                    "name" => "Khelvachauri Municipality"
                ],
                [
                    "id" => 898,
                    "country_id" => 81,
                    "name" => "Senaki Municipality"
                ],
                [
                    "id" => 899,
                    "country_id" => 81,
                    "name" => "Tbilisi"
                ],
                [
                    "id" => 900,
                    "country_id" => 81,
                    "name" => "Adjara"
                ],
                [
                    "id" => 901,
                    "country_id" => 81,
                    "name" => "Autonomous Republic of Abkhazia"
                ],
                [
                    "id" => 902,
                    "country_id" => 81,
                    "name" => "Mtskheta-Mtianeti"
                ],
                [
                    "id" => 903,
                    "country_id" => 81,
                    "name" => "Shida Kartli"
                ],
                [
                    "id" => 904,
                    "country_id" => 81,
                    "name" => "Kvemo Kartli"
                ],
                [
                    "id" => 905,
                    "country_id" => 81,
                    "name" => "Imereti"
                ],
                [
                    "id" => 906,
                    "country_id" => 81,
                    "name" => "Samtskhe-Javakheti"
                ],
                [
                    "id" => 907,
                    "country_id" => 81,
                    "name" => "Guria"
                ],
                [
                    "id" => 908,
                    "country_id" => 81,
                    "name" => "Samegrelo-Zemo Svaneti"
                ],
                [
                    "id" => 909,
                    "country_id" => 81,
                    "name" => "Racha-Lechkhumi and Kvemo Svaneti"
                ],
                [
                    "id" => 910,
                    "country_id" => 81,
                    "name" => "Kakheti"
                ],
                [
                    "id" => 911,
                    "country_id" => 198,
                    "name" => "Northern Province"
                ],
                [
                    "id" => 912,
                    "country_id" => 198,
                    "name" => "Southern Province"
                ],
                [
                    "id" => 913,
                    "country_id" => 198,
                    "name" => "Western Area"
                ],
                [
                    "id" => 914,
                    "country_id" => 198,
                    "name" => "Eastern Province"
                ],
                [
                    "id" => 915,
                    "country_id" => 203,
                    "name" => "Hiran"
                ],
                [
                    "id" => 916,
                    "country_id" => 203,
                    "name" => "Mudug"
                ],
                [
                    "id" => 917,
                    "country_id" => 203,
                    "name" => "Bakool"
                ],
                [
                    "id" => 918,
                    "country_id" => 203,
                    "name" => "Galguduud"
                ],
                [
                    "id" => 919,
                    "country_id" => 203,
                    "name" => "Sanaag Region"
                ],
                [
                    "id" => 920,
                    "country_id" => 203,
                    "name" => "Nugal"
                ],
                [
                    "id" => 921,
                    "country_id" => 203,
                    "name" => "Lower Shebelle"
                ],
                [
                    "id" => 922,
                    "country_id" => 203,
                    "name" => "Middle Juba"
                ],
                [
                    "id" => 923,
                    "country_id" => 203,
                    "name" => "Middle Shebelle"
                ],
                [
                    "id" => 924,
                    "country_id" => 203,
                    "name" => "Lower Juba"
                ],
                [
                    "id" => 925,
                    "country_id" => 203,
                    "name" => "Awdal Region"
                ],
                [
                    "id" => 926,
                    "country_id" => 203,
                    "name" => "Bay"
                ],
                [
                    "id" => 927,
                    "country_id" => 203,
                    "name" => "Banaadir"
                ],
                [
                    "id" => 928,
                    "country_id" => 203,
                    "name" => "Gedo"
                ],
                [
                    "id" => 929,
                    "country_id" => 203,
                    "name" => "Togdheer Region"
                ],
                [
                    "id" => 930,
                    "country_id" => 203,
                    "name" => "Bari"
                ],
                [
                    "id" => 931,
                    "country_id" => 204,
                    "name" => "Northern Cape"
                ],
                [
                    "id" => 932,
                    "country_id" => 204,
                    "name" => "Free State"
                ],
                [
                    "id" => 933,
                    "country_id" => 204,
                    "name" => "Limpopo"
                ],
                [
                    "id" => 934,
                    "country_id" => 204,
                    "name" => "North West"
                ],
                [
                    "id" => 935,
                    "country_id" => 204,
                    "name" => "KwaZulu-Natal"
                ],
                [
                    "id" => 936,
                    "country_id" => 204,
                    "name" => "Gauteng"
                ],
                [
                    "id" => 937,
                    "country_id" => 204,
                    "name" => "Mpumalanga"
                ],
                [
                    "id" => 938,
                    "country_id" => 204,
                    "name" => "Eastern Cape"
                ],
                [
                    "id" => 939,
                    "country_id" => 204,
                    "name" => "Western Cape"
                ],
                [
                    "id" => 940,
                    "country_id" => 159,
                    "name" => "Chontales"
                ],
                [
                    "id" => 941,
                    "country_id" => 159,
                    "name" => "Managua"
                ],
                [
                    "id" => 942,
                    "country_id" => 159,
                    "name" => "Rivas"
                ],
                [
                    "id" => 943,
                    "country_id" => 159,
                    "name" => "Granada"
                ],
                [
                    "id" => 944,
                    "country_id" => 159,
                    "name" => "León"
                ],
                [
                    "id" => 945,
                    "country_id" => 159,
                    "name" => "Estelí"
                ],
                [
                    "id" => 946,
                    "country_id" => 159,
                    "name" => "Boaco"
                ],
                [
                    "id" => 947,
                    "country_id" => 159,
                    "name" => "Matagalpa"
                ],
                [
                    "id" => 948,
                    "country_id" => 159,
                    "name" => "Madriz"
                ],
                [
                    "id" => 949,
                    "country_id" => 159,
                    "name" => "Río San Juan"
                ],
                [
                    "id" => 950,
                    "country_id" => 159,
                    "name" => "Carazo"
                ],
                [
                    "id" => 951,
                    "country_id" => 159,
                    "name" => "North Caribbean Coast"
                ],
                [
                    "id" => 952,
                    "country_id" => 159,
                    "name" => "South Caribbean Coast"
                ],
                [
                    "id" => 953,
                    "country_id" => 159,
                    "name" => "Masaya"
                ],
                [
                    "id" => 954,
                    "country_id" => 159,
                    "name" => "Chinandega"
                ],
                [
                    "id" => 955,
                    "country_id" => 159,
                    "name" => "Jinotega"
                ],
                [
                    "id" => 956,
                    "country_id" => 111,
                    "name" => "Karak"
                ],
                [
                    "id" => 957,
                    "country_id" => 111,
                    "name" => "Tafilah"
                ],
                [
                    "id" => 958,
                    "country_id" => 111,
                    "name" => "Madaba"
                ],
                [
                    "id" => 959,
                    "country_id" => 111,
                    "name" => "Aqaba"
                ],
                [
                    "id" => 960,
                    "country_id" => 111,
                    "name" => "Irbid"
                ],
                [
                    "id" => 961,
                    "country_id" => 111,
                    "name" => "Balqa"
                ],
                [
                    "id" => 962,
                    "country_id" => 111,
                    "name" => "Mafraq"
                ],
                [
                    "id" => 963,
                    "country_id" => 111,
                    "name" => "Ajloun"
                ],
                [
                    "id" => 964,
                    "country_id" => 111,
                    "name" => "Ma'an"
                ],
                [
                    "id" => 965,
                    "country_id" => 111,
                    "name" => "Amman"
                ],
                [
                    "id" => 966,
                    "country_id" => 111,
                    "name" => "Jerash"
                ],
                [
                    "id" => 967,
                    "country_id" => 111,
                    "name" => "Zarqa"
                ],
                [
                    "id" => 968,
                    "country_id" => 212,
                    "name" => "Manzini District"
                ],
                [
                    "id" => 969,
                    "country_id" => 212,
                    "name" => "Hhohho District"
                ],
                [
                    "id" => 970,
                    "country_id" => 212,
                    "name" => "Lubombo District"
                ],
                [
                    "id" => 971,
                    "country_id" => 212,
                    "name" => "Shiselweni District"
                ],
                [
                    "id" => 972,
                    "country_id" => 117,
                    "name" => "Al Jahra"
                ],
                [
                    "id" => 973,
                    "country_id" => 117,
                    "name" => "Hawalli"
                ],
                [
                    "id" => 974,
                    "country_id" => 117,
                    "name" => "Mubarak Al-Kabeer"
                ],
                [
                    "id" => 975,
                    "country_id" => 117,
                    "name" => "Al Farwaniyah"
                ],
                [
                    "id" => 976,
                    "country_id" => 117,
                    "name" => "Capital"
                ],
                [
                    "id" => 977,
                    "country_id" => 117,
                    "name" => "Al Ahmadi"
                ],
                [
                    "id" => 978,
                    "country_id" => 119,
                    "name" => "Luang Prabang Province"
                ],
                [
                    "id" => 979,
                    "country_id" => 119,
                    "name" => "Vientiane Prefecture"
                ],
                [
                    "id" => 980,
                    "country_id" => 119,
                    "name" => "Vientiane Province"
                ],
                [
                    "id" => 981,
                    "country_id" => 119,
                    "name" => "Salavan Province"
                ],
                [
                    "id" => 982,
                    "country_id" => 119,
                    "name" => "Attapeu Province"
                ],
                [
                    "id" => 983,
                    "country_id" => 119,
                    "name" => "Xaisomboun Province"
                ],
                [
                    "id" => 984,
                    "country_id" => 119,
                    "name" => "Sekong Province"
                ],
                [
                    "id" => 985,
                    "country_id" => 119,
                    "name" => "Bolikhamsai Province"
                ],
                [
                    "id" => 986,
                    "country_id" => 119,
                    "name" => "Khammouane Province"
                ],
                [
                    "id" => 987,
                    "country_id" => 119,
                    "name" => "Phongsaly Province"
                ],
                [
                    "id" => 988,
                    "country_id" => 119,
                    "name" => "Oudomxay Province"
                ],
                [
                    "id" => 989,
                    "country_id" => 119,
                    "name" => "Houaphanh Province"
                ],
                [
                    "id" => 990,
                    "country_id" => 119,
                    "name" => "Savannakhet Province"
                ],
                [
                    "id" => 991,
                    "country_id" => 119,
                    "name" => "Bokeo Province"
                ],
                [
                    "id" => 992,
                    "country_id" => 119,
                    "name" => "Luang Namtha Province"
                ],
                [
                    "id" => 993,
                    "country_id" => 119,
                    "name" => "Sainyabuli Province"
                ],
                [
                    "id" => 994,
                    "country_id" => 119,
                    "name" => "Xaisomboun"
                ],
                [
                    "id" => 995,
                    "country_id" => 119,
                    "name" => "Xiangkhouang Province"
                ],
                [
                    "id" => 996,
                    "country_id" => 119,
                    "name" => "Champasak Province"
                ],
                [
                    "id" => 997,
                    "country_id" => 118,
                    "name" => "Talas Region"
                ],
                [
                    "id" => 998,
                    "country_id" => 118,
                    "name" => "Batken Region"
                ],
                [
                    "id" => 999,
                    "country_id" => 118,
                    "name" => "Naryn Region"
                ],
                [
                    "id" => 1000,
                    "country_id" => 118,
                    "name" => "Jalal-Abad Region"
                ],
                [
                    "id" => 1001,
                    "country_id" => 118,
                    "name" => "Bishkek"
                ],
                [
                    "id" => 1002,
                    "country_id" => 118,
                    "name" => "Issyk-Kul Region"
                ],
                [
                    "id" => 1003,
                    "country_id" => 118,
                    "name" => "Osh"
                ],
                [
                    "id" => 1004,
                    "country_id" => 118,
                    "name" => "Chuy Region"
                ],
                [
                    "id" => 1005,
                    "country_id" => 118,
                    "name" => "Osh Region"
                ],
                [
                    "id" => 1006,
                    "country_id" => 165,
                    "name" => "Trøndelag"
                ],
                [
                    "id" => 1007,
                    "country_id" => 165,
                    "name" => "Oslo"
                ],
                [
                    "id" => 1009,
                    "country_id" => 165,
                    "name" => "Innlandet"
                ],
                [
                    "id" => 1011,
                    "country_id" => 165,
                    "name" => "Viken"
                ],
                [
                    "id" => 1013,
                    "country_id" => 165,
                    "name" => "Svalbard"
                ],
                [
                    "id" => 1014,
                    "country_id" => 165,
                    "name" => "Agder"
                ],
                [
                    "id" => 1015,
                    "country_id" => 165,
                    "name" => "Troms og Finnmark"
                ],
                [
                    "id" => 1018,
                    "country_id" => 165,
                    "name" => "Vestland"
                ],
                [
                    "id" => 1020,
                    "country_id" => 165,
                    "name" => "Møre og Romsdal"
                ],
                [
                    "id" => 1021,
                    "country_id" => 165,
                    "name" => "Rogaland"
                ],
                [
                    "id" => 1024,
                    "country_id" => 165,
                    "name" => "Vestfold og Telemark"
                ],
                [
                    "id" => 1025,
                    "country_id" => 165,
                    "name" => "Nordland"
                ],
                [
                    "id" => 1026,
                    "country_id" => 165,
                    "name" => "Jan Mayen"
                ],
                [
                    "id" => 1027,
                    "country_id" => 99,
                    "name" => "Hódmezővásárhely"
                ],
                [
                    "id" => 1028,
                    "country_id" => 99,
                    "name" => "Érd"
                ],
                [
                    "id" => 1029,
                    "country_id" => 99,
                    "name" => "Szeged"
                ],
                [
                    "id" => 1030,
                    "country_id" => 99,
                    "name" => "Nagykanizsa"
                ],
                [
                    "id" => 1031,
                    "country_id" => 99,
                    "name" => "Csongrád County"
                ],
                [
                    "id" => 1032,
                    "country_id" => 99,
                    "name" => "Debrecen"
                ],
                [
                    "id" => 1033,
                    "country_id" => 99,
                    "name" => "Székesfehérvár"
                ],
                [
                    "id" => 1034,
                    "country_id" => 99,
                    "name" => "Nyíregyháza"
                ],
                [
                    "id" => 1035,
                    "country_id" => 99,
                    "name" => "Somogy County"
                ],
                [
                    "id" => 1036,
                    "country_id" => 99,
                    "name" => "Békéscsaba"
                ],
                [
                    "id" => 1037,
                    "country_id" => 99,
                    "name" => "Eger"
                ],
                [
                    "id" => 1038,
                    "country_id" => 99,
                    "name" => "Tolna County"
                ],
                [
                    "id" => 1039,
                    "country_id" => 99,
                    "name" => "Vas County"
                ],
                [
                    "id" => 1040,
                    "country_id" => 99,
                    "name" => "Heves County"
                ],
                [
                    "id" => 1041,
                    "country_id" => 99,
                    "name" => "Győr"
                ],
                [
                    "id" => 1042,
                    "country_id" => 99,
                    "name" => "Győr-Moson-Sopron County"
                ],
                [
                    "id" => 1043,
                    "country_id" => 99,
                    "name" => "Jász-Nagykun-Szolnok County"
                ],
                [
                    "id" => 1044,
                    "country_id" => 99,
                    "name" => "Fejér County"
                ],
                [
                    "id" => 1045,
                    "country_id" => 99,
                    "name" => "Szabolcs-Szatmár-Bereg County"
                ],
                [
                    "id" => 1046,
                    "country_id" => 99,
                    "name" => "Zala County"
                ],
                [
                    "id" => 1047,
                    "country_id" => 99,
                    "name" => "Szolnok"
                ],
                [
                    "id" => 1048,
                    "country_id" => 99,
                    "name" => "Bács-Kiskun"
                ],
                [
                    "id" => 1049,
                    "country_id" => 99,
                    "name" => "Dunaújváros"
                ],
                [
                    "id" => 1050,
                    "country_id" => 99,
                    "name" => "Zalaegerszeg"
                ],
                [
                    "id" => 1051,
                    "country_id" => 99,
                    "name" => "Nógrád County"
                ],
                [
                    "id" => 1052,
                    "country_id" => 99,
                    "name" => "Szombathely"
                ],
                [
                    "id" => 1053,
                    "country_id" => 99,
                    "name" => "Pécs"
                ],
                [
                    "id" => 1054,
                    "country_id" => 99,
                    "name" => "Veszprém County"
                ],
                [
                    "id" => 1055,
                    "country_id" => 99,
                    "name" => "Baranya"
                ],
                [
                    "id" => 1056,
                    "country_id" => 99,
                    "name" => "Kecskemét"
                ],
                [
                    "id" => 1057,
                    "country_id" => 99,
                    "name" => "Sopron"
                ],
                [
                    "id" => 1058,
                    "country_id" => 99,
                    "name" => "Borsod-Abaúj-Zemplén"
                ],
                [
                    "id" => 1059,
                    "country_id" => 99,
                    "name" => "Pest County"
                ],
                [
                    "id" => 1060,
                    "country_id" => 99,
                    "name" => "Békés"
                ],
                [
                    "id" => 1061,
                    "country_id" => 99,
                    "name" => "Szekszárd"
                ],
                [
                    "id" => 1062,
                    "country_id" => 99,
                    "name" => "Veszprém"
                ],
                [
                    "id" => 1063,
                    "country_id" => 99,
                    "name" => "Hajdú-Bihar County"
                ],
                [
                    "id" => 1064,
                    "country_id" => 99,
                    "name" => "Budapest"
                ],
                [
                    "id" => 1065,
                    "country_id" => 99,
                    "name" => "Miskolc"
                ],
                [
                    "id" => 1066,
                    "country_id" => 99,
                    "name" => "Tatabánya"
                ],
                [
                    "id" => 1067,
                    "country_id" => 99,
                    "name" => "Kaposvár"
                ],
                [
                    "id" => 1068,
                    "country_id" => 99,
                    "name" => "Salgótarján"
                ],
                [
                    "id" => 1069,
                    "country_id" => 105,
                    "name" => "Tipperary"
                ],
                [
                    "id" => 1070,
                    "country_id" => 105,
                    "name" => "Sligo"
                ],
                [
                    "id" => 1071,
                    "country_id" => 105,
                    "name" => "Donegal"
                ],
                [
                    "id" => 1072,
                    "country_id" => 105,
                    "name" => "Dublin"
                ],
                [
                    "id" => 1073,
                    "country_id" => 105,
                    "name" => "Leinster"
                ],
                [
                    "id" => 1074,
                    "country_id" => 105,
                    "name" => "Cork"
                ],
                [
                    "id" => 1075,
                    "country_id" => 105,
                    "name" => "Monaghan"
                ],
                [
                    "id" => 1076,
                    "country_id" => 105,
                    "name" => "Longford"
                ],
                [
                    "id" => 1077,
                    "country_id" => 105,
                    "name" => "Kerry"
                ],
                [
                    "id" => 1078,
                    "country_id" => 105,
                    "name" => "Offaly"
                ],
                [
                    "id" => 1079,
                    "country_id" => 105,
                    "name" => "Galway"
                ],
                [
                    "id" => 1080,
                    "country_id" => 105,
                    "name" => "Munster"
                ],
                [
                    "id" => 1081,
                    "country_id" => 105,
                    "name" => "Roscommon"
                ],
                [
                    "id" => 1082,
                    "country_id" => 105,
                    "name" => "Kildare"
                ],
                [
                    "id" => 1083,
                    "country_id" => 105,
                    "name" => "Louth"
                ],
                [
                    "id" => 1084,
                    "country_id" => 105,
                    "name" => "Mayo"
                ],
                [
                    "id" => 1085,
                    "country_id" => 105,
                    "name" => "Wicklow"
                ],
                [
                    "id" => 1086,
                    "country_id" => 105,
                    "name" => "Ulster"
                ],
                [
                    "id" => 1087,
                    "country_id" => 105,
                    "name" => "Connacht"
                ],
                [
                    "id" => 1088,
                    "country_id" => 105,
                    "name" => "Cavan"
                ],
                [
                    "id" => 1089,
                    "country_id" => 105,
                    "name" => "Waterford"
                ],
                [
                    "id" => 1090,
                    "country_id" => 105,
                    "name" => "Kilkenny"
                ],
                [
                    "id" => 1091,
                    "country_id" => 105,
                    "name" => "Clare"
                ],
                [
                    "id" => 1092,
                    "country_id" => 105,
                    "name" => "Meath"
                ],
                [
                    "id" => 1093,
                    "country_id" => 105,
                    "name" => "Wexford"
                ],
                [
                    "id" => 1094,
                    "country_id" => 105,
                    "name" => "Limerick"
                ],
                [
                    "id" => 1095,
                    "country_id" => 105,
                    "name" => "Carlow"
                ],
                [
                    "id" => 1096,
                    "country_id" => 105,
                    "name" => "Laois"
                ],
                [
                    "id" => 1097,
                    "country_id" => 105,
                    "name" => "Westmeath"
                ],
                [
                    "id" => 1098,
                    "country_id" => 4,
                    "name" => "Djelfa"
                ],
                [
                    "id" => 1099,
                    "country_id" => 4,
                    "name" => "El Oued"
                ],
                [
                    "id" => 1100,
                    "country_id" => 4,
                    "name" => "El Tarf"
                ],
                [
                    "id" => 1101,
                    "country_id" => 4,
                    "name" => "Oran"
                ],
                [
                    "id" => 1102,
                    "country_id" => 4,
                    "name" => "Naama"
                ],
                [
                    "id" => 1103,
                    "country_id" => 4,
                    "name" => "Annaba"
                ],
                [
                    "id" => 1104,
                    "country_id" => 4,
                    "name" => "Bouïra"
                ],
                [
                    "id" => 1105,
                    "country_id" => 4,
                    "name" => "Chlef"
                ],
                [
                    "id" => 1106,
                    "country_id" => 4,
                    "name" => "Tiaret"
                ],
                [
                    "id" => 1107,
                    "country_id" => 4,
                    "name" => "Tlemcen"
                ],
                [
                    "id" => 1108,
                    "country_id" => 4,
                    "name" => "Béchar"
                ],
                [
                    "id" => 1109,
                    "country_id" => 4,
                    "name" => "Médéa"
                ],
                [
                    "id" => 1110,
                    "country_id" => 4,
                    "name" => "Skikda"
                ],
                [
                    "id" => 1111,
                    "country_id" => 4,
                    "name" => "Blida"
                ],
                [
                    "id" => 1112,
                    "country_id" => 4,
                    "name" => "Illizi"
                ],
                [
                    "id" => 1113,
                    "country_id" => 4,
                    "name" => "Jijel"
                ],
                [
                    "id" => 1114,
                    "country_id" => 4,
                    "name" => "Biskra"
                ],
                [
                    "id" => 1115,
                    "country_id" => 4,
                    "name" => "Tipasa"
                ],
                [
                    "id" => 1116,
                    "country_id" => 4,
                    "name" => "Bordj Bou Arréridj"
                ],
                [
                    "id" => 1117,
                    "country_id" => 4,
                    "name" => "Tébessa"
                ],
                [
                    "id" => 1118,
                    "country_id" => 4,
                    "name" => "Adrar"
                ],
                [
                    "id" => 1119,
                    "country_id" => 4,
                    "name" => "Aïn Defla"
                ],
                [
                    "id" => 1120,
                    "country_id" => 4,
                    "name" => "Tindouf"
                ],
                [
                    "id" => 1121,
                    "country_id" => 4,
                    "name" => "Constantine"
                ],
                [
                    "id" => 1122,
                    "country_id" => 4,
                    "name" => "Aïn Témouchent"
                ],
                [
                    "id" => 1123,
                    "country_id" => 4,
                    "name" => "Saïda"
                ],
                [
                    "id" => 1124,
                    "country_id" => 4,
                    "name" => "Mascara"
                ],
                [
                    "id" => 1125,
                    "country_id" => 4,
                    "name" => "Boumerdès"
                ],
                [
                    "id" => 1126,
                    "country_id" => 4,
                    "name" => "Khenchela"
                ],
                [
                    "id" => 1127,
                    "country_id" => 4,
                    "name" => "Ghardaïa"
                ],
                [
                    "id" => 1128,
                    "country_id" => 4,
                    "name" => "Béjaïa"
                ],
                [
                    "id" => 1129,
                    "country_id" => 4,
                    "name" => "El Bayadh"
                ],
                [
                    "id" => 1130,
                    "country_id" => 4,
                    "name" => "Relizane"
                ],
                [
                    "id" => 1131,
                    "country_id" => 4,
                    "name" => "Tizi Ouzou"
                ],
                [
                    "id" => 1132,
                    "country_id" => 4,
                    "name" => "Mila"
                ],
                [
                    "id" => 1133,
                    "country_id" => 4,
                    "name" => "Tissemsilt"
                ],
                [
                    "id" => 1134,
                    "country_id" => 4,
                    "name" => "M'Sila"
                ],
                [
                    "id" => 1135,
                    "country_id" => 4,
                    "name" => "Tamanghasset"
                ],
                [
                    "id" => 1136,
                    "country_id" => 4,
                    "name" => "Oum El Bouaghi"
                ],
                [
                    "id" => 1137,
                    "country_id" => 4,
                    "name" => "Guelma"
                ],
                [
                    "id" => 1138,
                    "country_id" => 4,
                    "name" => "Laghouat"
                ],
                [
                    "id" => 1139,
                    "country_id" => 4,
                    "name" => "Ouargla"
                ],
                [
                    "id" => 1140,
                    "country_id" => 4,
                    "name" => "Mostaganem"
                ],
                [
                    "id" => 1141,
                    "country_id" => 4,
                    "name" => "Sétif"
                ],
                [
                    "id" => 1142,
                    "country_id" => 4,
                    "name" => "Batna"
                ],
                [
                    "id" => 1143,
                    "country_id" => 4,
                    "name" => "Souk Ahras"
                ],
                [
                    "id" => 1144,
                    "country_id" => 4,
                    "name" => "Algiers"
                ],
                [
                    "id" => 1146,
                    "country_id" => 207,
                    "name" => "Burgos"
                ],
                [
                    "id" => 1147,
                    "country_id" => 207,
                    "name" => "Salamanca"
                ],
                [
                    "id" => 1157,
                    "country_id" => 207,
                    "name" => "Palencia"
                ],
                [
                    "id" => 1158,
                    "country_id" => 207,
                    "name" => "Madrid"
                ],
                [
                    "id" => 1160,
                    "country_id" => 207,
                    "name" => "Asturias"
                ],
                [
                    "id" => 1161,
                    "country_id" => 207,
                    "name" => "Zamora"
                ],
                [
                    "id" => 1167,
                    "country_id" => 207,
                    "name" => "Pontevedra"
                ],
                [
                    "id" => 1170,
                    "country_id" => 207,
                    "name" => "Cantabria"
                ],
                [
                    "id" => 1171,
                    "country_id" => 207,
                    "name" => "La Rioja"
                ],
                [
                    "id" => 1174,
                    "country_id" => 207,
                    "name" => "Islas Baleares"
                ],
                [
                    "id" => 1175,
                    "country_id" => 207,
                    "name" => "Valencia"
                ],
                [
                    "id" => 1176,
                    "country_id" => 207,
                    "name" => "Murcia"
                ],
                [
                    "id" => 1177,
                    "country_id" => 207,
                    "name" => "Huesca"
                ],
                [
                    "id" => 1183,
                    "country_id" => 207,
                    "name" => "Valladolid"
                ],
                [
                    "id" => 1185,
                    "country_id" => 207,
                    "name" => "Las Palmas"
                ],
                [
                    "id" => 1189,
                    "country_id" => 207,
                    "name" => "Ávila"
                ],
                [
                    "id" => 1190,
                    "country_id" => 207,
                    "name" => "Caceres"
                ],
                [
                    "id" => 1191,
                    "country_id" => 207,
                    "name" => "Gipuzkoa"
                ],
                [
                    "id" => 1192,
                    "country_id" => 207,
                    "name" => "Segovia"
                ],
                [
                    "id" => 1193,
                    "country_id" => 207,
                    "name" => "Sevilla"
                ],
                [
                    "id" => 1200,
                    "country_id" => 207,
                    "name" => "Léon"
                ],
                [
                    "id" => 1203,
                    "country_id" => 207,
                    "name" => "Tarragona"
                ],
                [
                    "id" => 1204,
                    "country_id" => 207,
                    "name" => "Navarra"
                ],
                [
                    "id" => 1205,
                    "country_id" => 207,
                    "name" => "Toledo"
                ],
                [
                    "id" => 1208,
                    "country_id" => 207,
                    "name" => "Soria"
                ],
                [
                    "id" => 1209,
                    "country_id" => 53,
                    "name" => "Guanacaste Province"
                ],
                [
                    "id" => 1210,
                    "country_id" => 53,
                    "name" => "Puntarenas Province"
                ],
                [
                    "id" => 1211,
                    "country_id" => 53,
                    "name" => "Provincia de Cartago"
                ],
                [
                    "id" => 1212,
                    "country_id" => 53,
                    "name" => "Heredia Province"
                ],
                [
                    "id" => 1213,
                    "country_id" => 53,
                    "name" => "Limón Province"
                ],
                [
                    "id" => 1214,
                    "country_id" => 53,
                    "name" => "San José Province"
                ],
                [
                    "id" => 1215,
                    "country_id" => 53,
                    "name" => "Alajuela Province"
                ],
                [
                    "id" => 1216,
                    "country_id" => 33,
                    "name" => "Brunei-Muara District"
                ],
                [
                    "id" => 1217,
                    "country_id" => 33,
                    "name" => "Belait District"
                ],
                [
                    "id" => 1218,
                    "country_id" => 33,
                    "name" => "Temburong District"
                ],
                [
                    "id" => 1219,
                    "country_id" => 33,
                    "name" => "Tutong District"
                ],
                [
                    "id" => 1220,
                    "country_id" => 20,
                    "name" => "Saint Philip"
                ],
                [
                    "id" => 1221,
                    "country_id" => 20,
                    "name" => "Saint Lucy"
                ],
                [
                    "id" => 1222,
                    "country_id" => 20,
                    "name" => "Saint Peter"
                ],
                [
                    "id" => 1223,
                    "country_id" => 20,
                    "name" => "Saint Joseph"
                ],
                [
                    "id" => 1224,
                    "country_id" => 20,
                    "name" => "Saint James"
                ],
                [
                    "id" => 1225,
                    "country_id" => 20,
                    "name" => "Saint Thomas"
                ],
                [
                    "id" => 1226,
                    "country_id" => 20,
                    "name" => "Saint George"
                ],
                [
                    "id" => 1227,
                    "country_id" => 20,
                    "name" => "Saint John"
                ],
                [
                    "id" => 1228,
                    "country_id" => 20,
                    "name" => "Christ Church"
                ],
                [
                    "id" => 1229,
                    "country_id" => 20,
                    "name" => "Saint Andrew"
                ],
                [
                    "id" => 1230,
                    "country_id" => 20,
                    "name" => "Saint Michael"
                ],
                [
                    "id" => 1231,
                    "country_id" => 245,
                    "name" => "Ta'izz"
                ],
                [
                    "id" => 1232,
                    "country_id" => 245,
                    "name" => "Amanat Al Asimah"
                ],
                [
                    "id" => 1233,
                    "country_id" => 245,
                    "name" => "Ibb"
                ],
                [
                    "id" => 1234,
                    "country_id" => 245,
                    "name" => "Ma'rib"
                ],
                [
                    "id" => 1235,
                    "country_id" => 245,
                    "name" => "Al Mahwit"
                ],
                [
                    "id" => 1236,
                    "country_id" => 245,
                    "name" => "Sana'a"
                ],
                [
                    "id" => 1237,
                    "country_id" => 245,
                    "name" => "Abyan"
                ],
                [
                    "id" => 1238,
                    "country_id" => 245,
                    "name" => "Hadhramaut"
                ],
                [
                    "id" => 1239,
                    "country_id" => 245,
                    "name" => "Socotra"
                ],
                [
                    "id" => 1240,
                    "country_id" => 245,
                    "name" => "Al Bayda'"
                ],
                [
                    "id" => 1241,
                    "country_id" => 245,
                    "name" => "Al Hudaydah"
                ],
                [
                    "id" => 1242,
                    "country_id" => 245,
                    "name" => "'Adan"
                ],
                [
                    "id" => 1243,
                    "country_id" => 245,
                    "name" => "Al Jawf"
                ],
                [
                    "id" => 1244,
                    "country_id" => 245,
                    "name" => "Hajjah"
                ],
                [
                    "id" => 1245,
                    "country_id" => 245,
                    "name" => "Lahij"
                ],
                [
                    "id" => 1246,
                    "country_id" => 245,
                    "name" => "Dhamar"
                ],
                [
                    "id" => 1247,
                    "country_id" => 245,
                    "name" => "Shabwah"
                ],
                [
                    "id" => 1248,
                    "country_id" => 245,
                    "name" => "Raymah"
                ],
                [
                    "id" => 1249,
                    "country_id" => 245,
                    "name" => "Saada"
                ],
                [
                    "id" => 1250,
                    "country_id" => 245,
                    "name" => "'Amran"
                ],
                [
                    "id" => 1251,
                    "country_id" => 245,
                    "name" => "Al Mahrah"
                ],
                [
                    "id" => 1252,
                    "country_id" => 42,
                    "name" => "Sangha-Mbaéré"
                ],
                [
                    "id" => 1253,
                    "country_id" => 42,
                    "name" => "Nana-Grébizi Economic Prefecture"
                ],
                [
                    "id" => 1254,
                    "country_id" => 42,
                    "name" => "Ouham Prefecture"
                ],
                [
                    "id" => 1255,
                    "country_id" => 42,
                    "name" => "Ombella-M'Poko Prefecture"
                ],
                [
                    "id" => 1256,
                    "country_id" => 42,
                    "name" => "Lobaye Prefecture"
                ],
                [
                    "id" => 1257,
                    "country_id" => 42,
                    "name" => "Mambéré-Kadéï"
                ],
                [
                    "id" => 1258,
                    "country_id" => 42,
                    "name" => "Haut-Mbomou Prefecture"
                ],
                [
                    "id" => 1259,
                    "country_id" => 42,
                    "name" => "Bamingui-Bangoran Prefecture"
                ],
                [
                    "id" => 1260,
                    "country_id" => 42,
                    "name" => "Nana-Mambéré Prefecture"
                ],
                [
                    "id" => 1261,
                    "country_id" => 42,
                    "name" => "Vakaga Prefecture"
                ],
                [
                    "id" => 1262,
                    "country_id" => 42,
                    "name" => "Bangui"
                ],
                [
                    "id" => 1263,
                    "country_id" => 42,
                    "name" => "Kémo Prefecture"
                ],
                [
                    "id" => 1264,
                    "country_id" => 42,
                    "name" => "Basse-Kotto Prefecture"
                ],
                [
                    "id" => 1265,
                    "country_id" => 42,
                    "name" => "Ouaka Prefecture"
                ],
                [
                    "id" => 1266,
                    "country_id" => 42,
                    "name" => "Mbomou Prefecture"
                ],
                [
                    "id" => 1267,
                    "country_id" => 42,
                    "name" => "Ouham-Pendé Prefecture"
                ],
                [
                    "id" => 1268,
                    "country_id" => 42,
                    "name" => "Haute-Kotto Prefecture"
                ],
                [
                    "id" => 1269,
                    "country_id" => 174,
                    "name" => "Romblon"
                ],
                [
                    "id" => 1270,
                    "country_id" => 174,
                    "name" => "Bukidnon"
                ],
                [
                    "id" => 1271,
                    "country_id" => 174,
                    "name" => "Rizal"
                ],
                [
                    "id" => 1272,
                    "country_id" => 174,
                    "name" => "Bohol"
                ],
                [
                    "id" => 1273,
                    "country_id" => 174,
                    "name" => "Quirino"
                ],
                [
                    "id" => 1274,
                    "country_id" => 174,
                    "name" => "Biliran"
                ],
                [
                    "id" => 1275,
                    "country_id" => 174,
                    "name" => "Quezon"
                ],
                [
                    "id" => 1276,
                    "country_id" => 174,
                    "name" => "Siquijor"
                ],
                [
                    "id" => 1277,
                    "country_id" => 174,
                    "name" => "Sarangani"
                ],
                [
                    "id" => 1278,
                    "country_id" => 174,
                    "name" => "Bulacan"
                ],
                [
                    "id" => 1279,
                    "country_id" => 174,
                    "name" => "Cagayan"
                ],
                [
                    "id" => 1280,
                    "country_id" => 174,
                    "name" => "South Cotabato"
                ],
                [
                    "id" => 1281,
                    "country_id" => 174,
                    "name" => "Sorsogon"
                ],
                [
                    "id" => 1282,
                    "country_id" => 174,
                    "name" => "Sultan Kudarat"
                ],
                [
                    "id" => 1283,
                    "country_id" => 174,
                    "name" => "Camarines Norte"
                ],
                [
                    "id" => 1284,
                    "country_id" => 174,
                    "name" => "Southern Leyte"
                ],
                [
                    "id" => 1285,
                    "country_id" => 174,
                    "name" => "Camiguin"
                ],
                [
                    "id" => 1286,
                    "country_id" => 174,
                    "name" => "Surigao del Norte"
                ],
                [
                    "id" => 1287,
                    "country_id" => 174,
                    "name" => "Camarines Sur"
                ],
                [
                    "id" => 1288,
                    "country_id" => 174,
                    "name" => "Sulu"
                ],
                [
                    "id" => 1289,
                    "country_id" => 174,
                    "name" => "Davao Oriental"
                ],
                [
                    "id" => 1290,
                    "country_id" => 174,
                    "name" => "Eastern Samar"
                ],
                [
                    "id" => 1291,
                    "country_id" => 174,
                    "name" => "Dinagat Islands"
                ],
                [
                    "id" => 1292,
                    "country_id" => 174,
                    "name" => "Capiz"
                ],
                [
                    "id" => 1293,
                    "country_id" => 174,
                    "name" => "Tawi-Tawi"
                ],
                [
                    "id" => 1294,
                    "country_id" => 174,
                    "name" => "Calabarzon"
                ],
                [
                    "id" => 1295,
                    "country_id" => 174,
                    "name" => "Tarlac"
                ],
                [
                    "id" => 1296,
                    "country_id" => 174,
                    "name" => "Surigao del Sur"
                ],
                [
                    "id" => 1297,
                    "country_id" => 174,
                    "name" => "Zambales"
                ],
                [
                    "id" => 1298,
                    "country_id" => 174,
                    "name" => "Ilocos Norte"
                ],
                [
                    "id" => 1299,
                    "country_id" => 174,
                    "name" => "Mimaropa"
                ],
                [
                    "id" => 1300,
                    "country_id" => 174,
                    "name" => "Ifugao"
                ],
                [
                    "id" => 1301,
                    "country_id" => 174,
                    "name" => "Catanduanes"
                ],
                [
                    "id" => 1302,
                    "country_id" => 174,
                    "name" => "Zamboanga del Norte"
                ],
                [
                    "id" => 1303,
                    "country_id" => 174,
                    "name" => "Guimaras"
                ],
                [
                    "id" => 1304,
                    "country_id" => 174,
                    "name" => "Bicol"
                ],
                [
                    "id" => 1305,
                    "country_id" => 174,
                    "name" => "Western Visayas"
                ],
                [
                    "id" => 1306,
                    "country_id" => 174,
                    "name" => "Cebu"
                ],
                [
                    "id" => 1307,
                    "country_id" => 174,
                    "name" => "Cavite"
                ],
                [
                    "id" => 1308,
                    "country_id" => 174,
                    "name" => "Central Visayas"
                ],
                [
                    "id" => 1309,
                    "country_id" => 174,
                    "name" => "Davao Occidental"
                ],
                [
                    "id" => 1310,
                    "country_id" => 174,
                    "name" => "Soccsksargen"
                ],
                [
                    "id" => 1311,
                    "country_id" => 174,
                    "name" => "Compostela Valley"
                ],
                [
                    "id" => 1312,
                    "country_id" => 174,
                    "name" => "Kalinga"
                ],
                [
                    "id" => 1313,
                    "country_id" => 174,
                    "name" => "Isabela"
                ],
                [
                    "id" => 1314,
                    "country_id" => 174,
                    "name" => "Caraga"
                ],
                [
                    "id" => 1315,
                    "country_id" => 174,
                    "name" => "Iloilo"
                ],
                [
                    "id" => 1316,
                    "country_id" => 174,
                    "name" => "Autonomous Region in Muslim Mindanao"
                ],
                [
                    "id" => 1317,
                    "country_id" => 174,
                    "name" => "La Union"
                ],
                [
                    "id" => 1318,
                    "country_id" => 174,
                    "name" => "Davao del Sur"
                ],
                [
                    "id" => 1319,
                    "country_id" => 174,
                    "name" => "Davao del Norte"
                ],
                [
                    "id" => 1320,
                    "country_id" => 174,
                    "name" => "Cotabato"
                ],
                [
                    "id" => 1321,
                    "country_id" => 174,
                    "name" => "Ilocos Sur"
                ],
                [
                    "id" => 1322,
                    "country_id" => 174,
                    "name" => "Eastern Visayas"
                ],
                [
                    "id" => 1323,
                    "country_id" => 174,
                    "name" => "Agusan del Norte"
                ],
                [
                    "id" => 1324,
                    "country_id" => 174,
                    "name" => "Abra"
                ],
                [
                    "id" => 1325,
                    "country_id" => 174,
                    "name" => "Zamboanga Peninsula"
                ],
                [
                    "id" => 1326,
                    "country_id" => 174,
                    "name" => "Agusan del Sur"
                ],
                [
                    "id" => 1327,
                    "country_id" => 174,
                    "name" => "Lanao del Norte"
                ],
                [
                    "id" => 1328,
                    "country_id" => 174,
                    "name" => "Laguna"
                ],
                [
                    "id" => 1329,
                    "country_id" => 174,
                    "name" => "Marinduque"
                ],
                [
                    "id" => 1330,
                    "country_id" => 174,
                    "name" => "Maguindanao"
                ],
                [
                    "id" => 1331,
                    "country_id" => 174,
                    "name" => "Aklan"
                ],
                [
                    "id" => 1332,
                    "country_id" => 174,
                    "name" => "Leyte"
                ],
                [
                    "id" => 1333,
                    "country_id" => 174,
                    "name" => "Lanao del Sur"
                ],
                [
                    "id" => 1334,
                    "country_id" => 174,
                    "name" => "Apayao"
                ],
                [
                    "id" => 1335,
                    "country_id" => 174,
                    "name" => "Cordillera Administrative"
                ],
                [
                    "id" => 1336,
                    "country_id" => 174,
                    "name" => "Antique"
                ],
                [
                    "id" => 1337,
                    "country_id" => 174,
                    "name" => "Albay"
                ],
                [
                    "id" => 1338,
                    "country_id" => 174,
                    "name" => "Masbate"
                ],
                [
                    "id" => 1339,
                    "country_id" => 174,
                    "name" => "Northern Mindanao"
                ],
                [
                    "id" => 1340,
                    "country_id" => 174,
                    "name" => "Davao"
                ],
                [
                    "id" => 1341,
                    "country_id" => 174,
                    "name" => "Aurora"
                ],
                [
                    "id" => 1342,
                    "country_id" => 174,
                    "name" => "Cagayan Valley"
                ],
                [
                    "id" => 1343,
                    "country_id" => 174,
                    "name" => "Misamis Occidental"
                ],
                [
                    "id" => 1344,
                    "country_id" => 174,
                    "name" => "Bataan"
                ],
                [
                    "id" => 1345,
                    "country_id" => 174,
                    "name" => "Central Luzon"
                ],
                [
                    "id" => 1346,
                    "country_id" => 174,
                    "name" => "Basilan"
                ],
                [
                    "id" => 1347,
                    "country_id" => 174,
                    "name" => "Metro Manila"
                ],
                [
                    "id" => 1348,
                    "country_id" => 174,
                    "name" => "Misamis Oriental"
                ],
                [
                    "id" => 1349,
                    "country_id" => 174,
                    "name" => "Northern Samar"
                ],
                [
                    "id" => 1350,
                    "country_id" => 174,
                    "name" => "Negros Oriental"
                ],
                [
                    "id" => 1351,
                    "country_id" => 174,
                    "name" => "Negros Occidental"
                ],
                [
                    "id" => 1352,
                    "country_id" => 174,
                    "name" => "Batanes"
                ],
                [
                    "id" => 1353,
                    "country_id" => 174,
                    "name" => "Mountain Province"
                ],
                [
                    "id" => 1354,
                    "country_id" => 174,
                    "name" => "Oriental Mindoro"
                ],
                [
                    "id" => 1355,
                    "country_id" => 174,
                    "name" => "Ilocos"
                ],
                [
                    "id" => 1356,
                    "country_id" => 174,
                    "name" => "Occidental Mindoro"
                ],
                [
                    "id" => 1357,
                    "country_id" => 174,
                    "name" => "Zamboanga del Sur"
                ],
                [
                    "id" => 1358,
                    "country_id" => 174,
                    "name" => "Nueva Vizcaya"
                ],
                [
                    "id" => 1359,
                    "country_id" => 174,
                    "name" => "Batangas"
                ],
                [
                    "id" => 1360,
                    "country_id" => 174,
                    "name" => "Nueva Ecija"
                ],
                [
                    "id" => 1361,
                    "country_id" => 174,
                    "name" => "Palawan"
                ],
                [
                    "id" => 1362,
                    "country_id" => 174,
                    "name" => "Zamboanga Sibugay"
                ],
                [
                    "id" => 1363,
                    "country_id" => 174,
                    "name" => "Benguet"
                ],
                [
                    "id" => 1364,
                    "country_id" => 174,
                    "name" => "Pangasinan"
                ],
                [
                    "id" => 1365,
                    "country_id" => 174,
                    "name" => "Pampanga"
                ],
                [
                    "id" => 1366,
                    "country_id" => 106,
                    "name" => "Northern District"
                ],
                [
                    "id" => 1367,
                    "country_id" => 106,
                    "name" => "Central District"
                ],
                [
                    "id" => 1368,
                    "country_id" => 106,
                    "name" => "Southern District"
                ],
                [
                    "id" => 1369,
                    "country_id" => 106,
                    "name" => "Haifa District"
                ],
                [
                    "id" => 1370,
                    "country_id" => 106,
                    "name" => "Jerusalem District"
                ],
                [
                    "id" => 1371,
                    "country_id" => 106,
                    "name" => "Tel Aviv District"
                ],
                [
                    "id" => 1372,
                    "country_id" => 22,
                    "name" => "Limburg"
                ],
                [
                    "id" => 1373,
                    "country_id" => 22,
                    "name" => "Flanders"
                ],
                [
                    "id" => 1374,
                    "country_id" => 22,
                    "name" => "Flemish Brabant"
                ],
                [
                    "id" => 1375,
                    "country_id" => 22,
                    "name" => "Hainaut"
                ],
                [
                    "id" => 1376,
                    "country_id" => 22,
                    "name" => "Brussels-Capital Region"
                ],
                [
                    "id" => 1377,
                    "country_id" => 22,
                    "name" => "East Flanders"
                ],
                [
                    "id" => 1378,
                    "country_id" => 22,
                    "name" => "Namur"
                ],
                [
                    "id" => 1379,
                    "country_id" => 22,
                    "name" => "Luxembourg"
                ],
                [
                    "id" => 1380,
                    "country_id" => 22,
                    "name" => "Wallonia"
                ],
                [
                    "id" => 1381,
                    "country_id" => 22,
                    "name" => "Antwerp"
                ],
                [
                    "id" => 1382,
                    "country_id" => 22,
                    "name" => "Walloon Brabant"
                ],
                [
                    "id" => 1383,
                    "country_id" => 22,
                    "name" => "West Flanders"
                ],
                [
                    "id" => 1384,
                    "country_id" => 22,
                    "name" => "Liège"
                ],
                [
                    "id" => 1385,
                    "country_id" => 170,
                    "name" => "Darién Province"
                ],
                [
                    "id" => 1386,
                    "country_id" => 170,
                    "name" => "Colón Province"
                ],
                [
                    "id" => 1387,
                    "country_id" => 170,
                    "name" => "Coclé Province"
                ],
                [
                    "id" => 1388,
                    "country_id" => 170,
                    "name" => "Guna Yala"
                ],
                [
                    "id" => 1389,
                    "country_id" => 170,
                    "name" => "Herrera Province"
                ],
                [
                    "id" => 1390,
                    "country_id" => 170,
                    "name" => "Los Santos Province"
                ],
                [
                    "id" => 1391,
                    "country_id" => 170,
                    "name" => "Ngöbe-Buglé Comarca"
                ],
                [
                    "id" => 1392,
                    "country_id" => 170,
                    "name" => "Veraguas Province"
                ],
                [
                    "id" => 1393,
                    "country_id" => 170,
                    "name" => "Bocas del Toro Province"
                ],
                [
                    "id" => 1394,
                    "country_id" => 170,
                    "name" => "Panamá Oeste Province"
                ],
                [
                    "id" => 1395,
                    "country_id" => 170,
                    "name" => "Panamá Province"
                ],
                [
                    "id" => 1396,
                    "country_id" => 170,
                    "name" => "Emberá-Wounaan Comarca"
                ],
                [
                    "id" => 1397,
                    "country_id" => 170,
                    "name" => "Chiriquí Province"
                ],
                [
                    "id" => 1398,
                    "country_id" => 233,
                    "name" => "Howland Island"
                ],
                [
                    "id" => 1399,
                    "country_id" => 233,
                    "name" => "Delaware"
                ],
                [
                    "id" => 1400,
                    "country_id" => 233,
                    "name" => "Alaska"
                ],
                [
                    "id" => 1401,
                    "country_id" => 233,
                    "name" => "Maryland"
                ],
                [
                    "id" => 1402,
                    "country_id" => 233,
                    "name" => "Baker Island"
                ],
                [
                    "id" => 1403,
                    "country_id" => 233,
                    "name" => "Kingman Reef"
                ],
                [
                    "id" => 1404,
                    "country_id" => 233,
                    "name" => "New Hampshire"
                ],
                [
                    "id" => 1405,
                    "country_id" => 233,
                    "name" => "Wake Island"
                ],
                [
                    "id" => 1406,
                    "country_id" => 233,
                    "name" => "Kansas"
                ],
                [
                    "id" => 1407,
                    "country_id" => 233,
                    "name" => "Texas"
                ],
                [
                    "id" => 1408,
                    "country_id" => 233,
                    "name" => "Nebraska"
                ],
                [
                    "id" => 1409,
                    "country_id" => 233,
                    "name" => "Vermont"
                ],
                [
                    "id" => 1410,
                    "country_id" => 233,
                    "name" => "Jarvis Island"
                ],
                [
                    "id" => 1411,
                    "country_id" => 233,
                    "name" => "Hawaii"
                ],
                [
                    "id" => 1412,
                    "country_id" => 233,
                    "name" => "Guam"
                ],
                [
                    "id" => 1413,
                    "country_id" => 233,
                    "name" => "United States Virgin Islands"
                ],
                [
                    "id" => 1414,
                    "country_id" => 233,
                    "name" => "Utah"
                ],
                [
                    "id" => 1415,
                    "country_id" => 233,
                    "name" => "Oregon"
                ],
                [
                    "id" => 1416,
                    "country_id" => 233,
                    "name" => "California"
                ],
                [
                    "id" => 1417,
                    "country_id" => 233,
                    "name" => "New Jersey"
                ],
                [
                    "id" => 1418,
                    "country_id" => 233,
                    "name" => "North Dakota"
                ],
                [
                    "id" => 1419,
                    "country_id" => 233,
                    "name" => "Kentucky"
                ],
                [
                    "id" => 1420,
                    "country_id" => 233,
                    "name" => "Minnesota"
                ],
                [
                    "id" => 1421,
                    "country_id" => 233,
                    "name" => "Oklahoma"
                ],
                [
                    "id" => 1422,
                    "country_id" => 233,
                    "name" => "Pennsylvania"
                ],
                [
                    "id" => 1423,
                    "country_id" => 233,
                    "name" => "New Mexico"
                ],
                [
                    "id" => 1424,
                    "country_id" => 233,
                    "name" => "American Samoa"
                ],
                [
                    "id" => 1425,
                    "country_id" => 233,
                    "name" => "Illinois"
                ],
                [
                    "id" => 1426,
                    "country_id" => 233,
                    "name" => "Michigan"
                ],
                [
                    "id" => 1427,
                    "country_id" => 233,
                    "name" => "Virginia"
                ],
                [
                    "id" => 1428,
                    "country_id" => 233,
                    "name" => "Johnston Atoll"
                ],
                [
                    "id" => 1429,
                    "country_id" => 233,
                    "name" => "West Virginia"
                ],
                [
                    "id" => 1430,
                    "country_id" => 233,
                    "name" => "Mississippi"
                ],
                [
                    "id" => 1431,
                    "country_id" => 233,
                    "name" => "Northern Mariana Islands"
                ],
                [
                    "id" => 1432,
                    "country_id" => 233,
                    "name" => "United States Minor Outlying Islands"
                ],
                [
                    "id" => 1433,
                    "country_id" => 233,
                    "name" => "Massachusetts"
                ],
                [
                    "id" => 1434,
                    "country_id" => 233,
                    "name" => "Arizona"
                ],
                [
                    "id" => 1435,
                    "country_id" => 233,
                    "name" => "Connecticut"
                ],
                [
                    "id" => 1436,
                    "country_id" => 233,
                    "name" => "Florida"
                ],
                [
                    "id" => 1437,
                    "country_id" => 233,
                    "name" => "District of Columbia"
                ],
                [
                    "id" => 1438,
                    "country_id" => 233,
                    "name" => "Midway Atoll"
                ],
                [
                    "id" => 1439,
                    "country_id" => 233,
                    "name" => "Navassa Island"
                ],
                [
                    "id" => 1440,
                    "country_id" => 233,
                    "name" => "Indiana"
                ],
                [
                    "id" => 1441,
                    "country_id" => 233,
                    "name" => "Wisconsin"
                ],
                [
                    "id" => 1442,
                    "country_id" => 233,
                    "name" => "Wyoming"
                ],
                [
                    "id" => 1443,
                    "country_id" => 233,
                    "name" => "South Carolina"
                ],
                [
                    "id" => 1444,
                    "country_id" => 233,
                    "name" => "Arkansas"
                ],
                [
                    "id" => 1445,
                    "country_id" => 233,
                    "name" => "South Dakota"
                ],
                [
                    "id" => 1446,
                    "country_id" => 233,
                    "name" => "Montana"
                ],
                [
                    "id" => 1447,
                    "country_id" => 233,
                    "name" => "North Carolina"
                ],
                [
                    "id" => 1448,
                    "country_id" => 233,
                    "name" => "Palmyra Atoll"
                ],
                [
                    "id" => 1449,
                    "country_id" => 233,
                    "name" => "Puerto Rico"
                ],
                [
                    "id" => 1450,
                    "country_id" => 233,
                    "name" => "Colorado"
                ],
                [
                    "id" => 1451,
                    "country_id" => 233,
                    "name" => "Missouri"
                ],
                [
                    "id" => 1452,
                    "country_id" => 233,
                    "name" => "New York"
                ],
                [
                    "id" => 1453,
                    "country_id" => 233,
                    "name" => "Maine"
                ],
                [
                    "id" => 1454,
                    "country_id" => 233,
                    "name" => "Tennessee"
                ],
                [
                    "id" => 1455,
                    "country_id" => 233,
                    "name" => "Georgia"
                ],
                [
                    "id" => 1456,
                    "country_id" => 233,
                    "name" => "Alabama"
                ],
                [
                    "id" => 1457,
                    "country_id" => 233,
                    "name" => "Louisiana"
                ],
                [
                    "id" => 1458,
                    "country_id" => 233,
                    "name" => "Nevada"
                ],
                [
                    "id" => 1459,
                    "country_id" => 233,
                    "name" => "Iowa"
                ],
                [
                    "id" => 1460,
                    "country_id" => 233,
                    "name" => "Idaho"
                ],
                [
                    "id" => 1461,
                    "country_id" => 233,
                    "name" => "Rhode Island"
                ],
                [
                    "id" => 1462,
                    "country_id" => 233,
                    "name" => "Washington"
                ],
                [
                    "id" => 1463,
                    "country_id" => 218,
                    "name" => "Shinyanga"
                ],
                [
                    "id" => 1464,
                    "country_id" => 218,
                    "name" => "Simiyu"
                ],
                [
                    "id" => 1465,
                    "country_id" => 218,
                    "name" => "Kagera"
                ],
                [
                    "id" => 1466,
                    "country_id" => 218,
                    "name" => "Dodoma"
                ],
                [
                    "id" => 1467,
                    "country_id" => 218,
                    "name" => "Kilimanjaro"
                ],
                [
                    "id" => 1468,
                    "country_id" => 218,
                    "name" => "Mara"
                ],
                [
                    "id" => 1469,
                    "country_id" => 218,
                    "name" => "Tabora"
                ],
                [
                    "id" => 1470,
                    "country_id" => 218,
                    "name" => "Morogoro"
                ],
                [
                    "id" => 1471,
                    "country_id" => 218,
                    "name" => "Zanzibar South"
                ],
                [
                    "id" => 1472,
                    "country_id" => 218,
                    "name" => "Pemba South"
                ],
                [
                    "id" => 1473,
                    "country_id" => 218,
                    "name" => "Zanzibar North"
                ],
                [
                    "id" => 1474,
                    "country_id" => 218,
                    "name" => "Singida"
                ],
                [
                    "id" => 1475,
                    "country_id" => 218,
                    "name" => "Zanzibar West"
                ],
                [
                    "id" => 1476,
                    "country_id" => 218,
                    "name" => "Mtwara"
                ],
                [
                    "id" => 1477,
                    "country_id" => 218,
                    "name" => "Rukwa"
                ],
                [
                    "id" => 1478,
                    "country_id" => 218,
                    "name" => "Kigoma"
                ],
                [
                    "id" => 1479,
                    "country_id" => 218,
                    "name" => "Mwanza"
                ],
                [
                    "id" => 1480,
                    "country_id" => 218,
                    "name" => "Njombe"
                ],
                [
                    "id" => 1481,
                    "country_id" => 218,
                    "name" => "Geita"
                ],
                [
                    "id" => 1482,
                    "country_id" => 218,
                    "name" => "Katavi"
                ],
                [
                    "id" => 1483,
                    "country_id" => 218,
                    "name" => "Lindi"
                ],
                [
                    "id" => 1484,
                    "country_id" => 218,
                    "name" => "Manyara"
                ],
                [
                    "id" => 1485,
                    "country_id" => 218,
                    "name" => "Pwani"
                ],
                [
                    "id" => 1486,
                    "country_id" => 218,
                    "name" => "Ruvuma"
                ],
                [
                    "id" => 1487,
                    "country_id" => 218,
                    "name" => "Tanga"
                ],
                [
                    "id" => 1488,
                    "country_id" => 218,
                    "name" => "Pemba North"
                ],
                [
                    "id" => 1489,
                    "country_id" => 218,
                    "name" => "Iringa"
                ],
                [
                    "id" => 1490,
                    "country_id" => 218,
                    "name" => "Dar es Salaam"
                ],
                [
                    "id" => 1491,
                    "country_id" => 218,
                    "name" => "Arusha"
                ],
                [
                    "id" => 1493,
                    "country_id" => 74,
                    "name" => "Tavastia Proper"
                ],
                [
                    "id" => 1494,
                    "country_id" => 74,
                    "name" => "Central Ostrobothnia"
                ],
                [
                    "id" => 1495,
                    "country_id" => 74,
                    "name" => "Southern Savonia"
                ],
                [
                    "id" => 1496,
                    "country_id" => 74,
                    "name" => "Kainuu"
                ],
                [
                    "id" => 1497,
                    "country_id" => 74,
                    "name" => "South Karelia"
                ],
                [
                    "id" => 1498,
                    "country_id" => 74,
                    "name" => "Southern Ostrobothnia"
                ],
                [
                    "id" => 1500,
                    "country_id" => 74,
                    "name" => "Lapland"
                ],
                [
                    "id" => 1501,
                    "country_id" => 74,
                    "name" => "Satakunta"
                ],
                [
                    "id" => 1502,
                    "country_id" => 74,
                    "name" => "Päijänne Tavastia"
                ],
                [
                    "id" => 1503,
                    "country_id" => 74,
                    "name" => "Northern Savonia"
                ],
                [
                    "id" => 1504,
                    "country_id" => 74,
                    "name" => "North Karelia"
                ],
                [
                    "id" => 1505,
                    "country_id" => 74,
                    "name" => "Northern Ostrobothnia"
                ],
                [
                    "id" => 1506,
                    "country_id" => 74,
                    "name" => "Pirkanmaa"
                ],
                [
                    "id" => 1507,
                    "country_id" => 74,
                    "name" => "Finland Proper"
                ],
                [
                    "id" => 1508,
                    "country_id" => 74,
                    "name" => "Ostrobothnia"
                ],
                [
                    "id" => 1509,
                    "country_id" => 74,
                    "name" => "Åland Islands"
                ],
                [
                    "id" => 1510,
                    "country_id" => 74,
                    "name" => "Uusimaa"
                ],
                [
                    "id" => 1511,
                    "country_id" => 74,
                    "name" => "Central Finland"
                ],
                [
                    "id" => 1512,
                    "country_id" => 74,
                    "name" => "Kymenlaakso"
                ],
                [
                    "id" => 1513,
                    "country_id" => 127,
                    "name" => "Canton of Diekirch"
                ],
                [
                    "id" => 1514,
                    "country_id" => 127,
                    "name" => "Luxembourg District"
                ],
                [
                    "id" => 1515,
                    "country_id" => 127,
                    "name" => "Canton of Echternach"
                ],
                [
                    "id" => 1516,
                    "country_id" => 127,
                    "name" => "Canton of Redange"
                ],
                [
                    "id" => 1517,
                    "country_id" => 127,
                    "name" => "Canton of Esch-sur-Alzette"
                ],
                [
                    "id" => 1518,
                    "country_id" => 127,
                    "name" => "Canton of Capellen"
                ],
                [
                    "id" => 1519,
                    "country_id" => 127,
                    "name" => "Canton of Remich"
                ],
                [
                    "id" => 1520,
                    "country_id" => 127,
                    "name" => "Grevenmacher District"
                ],
                [
                    "id" => 1521,
                    "country_id" => 127,
                    "name" => "Canton of Clervaux"
                ],
                [
                    "id" => 1522,
                    "country_id" => 127,
                    "name" => "Canton of Mersch"
                ],
                [
                    "id" => 1523,
                    "country_id" => 127,
                    "name" => "Canton of Vianden"
                ],
                [
                    "id" => 1524,
                    "country_id" => 127,
                    "name" => "Diekirch District"
                ],
                [
                    "id" => 1525,
                    "country_id" => 127,
                    "name" => "Canton of Grevenmacher"
                ],
                [
                    "id" => 1526,
                    "country_id" => 127,
                    "name" => "Canton of Wiltz"
                ],
                [
                    "id" => 1527,
                    "country_id" => 127,
                    "name" => "Canton of Luxembourg"
                ],
                [
                    "id" => 1528,
                    "country_id" => 59,
                    "name" => "Region Zealand"
                ],
                [
                    "id" => 1529,
                    "country_id" => 59,
                    "name" => "Region of Southern Denmark"
                ],
                [
                    "id" => 1530,
                    "country_id" => 59,
                    "name" => "Capital Region of Denmark"
                ],
                [
                    "id" => 1531,
                    "country_id" => 59,
                    "name" => "Central Denmark Region"
                ],
                [
                    "id" => 1532,
                    "country_id" => 59,
                    "name" => "North Denmark Region"
                ],
                [
                    "id" => 1533,
                    "country_id" => 213,
                    "name" => "Gävleborg County"
                ],
                [
                    "id" => 1534,
                    "country_id" => 213,
                    "name" => "Dalarna County"
                ],
                [
                    "id" => 1535,
                    "country_id" => 213,
                    "name" => "Värmland County"
                ],
                [
                    "id" => 1536,
                    "country_id" => 213,
                    "name" => "Östergötland County"
                ],
                [
                    "id" => 1537,
                    "country_id" => 213,
                    "name" => "Blekinge"
                ],
                [
                    "id" => 1538,
                    "country_id" => 213,
                    "name" => "Norrbotten County"
                ],
                [
                    "id" => 1539,
                    "country_id" => 213,
                    "name" => "Örebro County"
                ],
                [
                    "id" => 1540,
                    "country_id" => 213,
                    "name" => "Södermanland County"
                ],
                [
                    "id" => 1541,
                    "country_id" => 213,
                    "name" => "Skåne County"
                ],
                [
                    "id" => 1542,
                    "country_id" => 213,
                    "name" => "Kronoberg County"
                ],
                [
                    "id" => 1543,
                    "country_id" => 213,
                    "name" => "Västerbotten County"
                ],
                [
                    "id" => 1544,
                    "country_id" => 213,
                    "name" => "Kalmar County"
                ],
                [
                    "id" => 1545,
                    "country_id" => 213,
                    "name" => "Uppsala County"
                ],
                [
                    "id" => 1546,
                    "country_id" => 213,
                    "name" => "Gotland County"
                ],
                [
                    "id" => 1547,
                    "country_id" => 213,
                    "name" => "Västra Götaland County"
                ],
                [
                    "id" => 1548,
                    "country_id" => 213,
                    "name" => "Halland County"
                ],
                [
                    "id" => 1549,
                    "country_id" => 213,
                    "name" => "Västmanland County"
                ],
                [
                    "id" => 1550,
                    "country_id" => 213,
                    "name" => "Jönköping County"
                ],
                [
                    "id" => 1551,
                    "country_id" => 213,
                    "name" => "Stockholm County"
                ],
                [
                    "id" => 1552,
                    "country_id" => 213,
                    "name" => "Västernorrland County"
                ],
                [
                    "id" => 1553,
                    "country_id" => 126,
                    "name" => "Plungė District Municipality"
                ],
                [
                    "id" => 1554,
                    "country_id" => 126,
                    "name" => "Šiauliai District Municipality"
                ],
                [
                    "id" => 1555,
                    "country_id" => 126,
                    "name" => "Jurbarkas District Municipality"
                ],
                [
                    "id" => 1556,
                    "country_id" => 126,
                    "name" => "Kaunas County"
                ],
                [
                    "id" => 1557,
                    "country_id" => 126,
                    "name" => "Mažeikiai District Municipality"
                ],
                [
                    "id" => 1558,
                    "country_id" => 126,
                    "name" => "Panevėžys County"
                ],
                [
                    "id" => 1559,
                    "country_id" => 126,
                    "name" => "Elektrėnai municipality"
                ],
                [
                    "id" => 1560,
                    "country_id" => 126,
                    "name" => "Švenčionys District Municipality"
                ],
                [
                    "id" => 1561,
                    "country_id" => 126,
                    "name" => "Akmenė District Municipality"
                ],
                [
                    "id" => 1562,
                    "country_id" => 126,
                    "name" => "Ignalina District Municipality"
                ],
                [
                    "id" => 1563,
                    "country_id" => 126,
                    "name" => "Neringa Municipality"
                ],
                [
                    "id" => 1564,
                    "country_id" => 126,
                    "name" => "Visaginas Municipality"
                ],
                [
                    "id" => 1565,
                    "country_id" => 126,
                    "name" => "Kaunas District Municipality"
                ],
                [
                    "id" => 1566,
                    "country_id" => 126,
                    "name" => "Biržai District Municipality"
                ],
                [
                    "id" => 1567,
                    "country_id" => 126,
                    "name" => "Jonava District Municipality"
                ],
                [
                    "id" => 1568,
                    "country_id" => 126,
                    "name" => "Radviliškis District Municipality"
                ],
                [
                    "id" => 1569,
                    "country_id" => 126,
                    "name" => "Telšiai County"
                ],
                [
                    "id" => 1570,
                    "country_id" => 126,
                    "name" => "Marijampolė County"
                ],
                [
                    "id" => 1571,
                    "country_id" => 126,
                    "name" => "Kretinga District Municipality"
                ],
                [
                    "id" => 1572,
                    "country_id" => 126,
                    "name" => "Tauragė District Municipality"
                ],
                [
                    "id" => 1573,
                    "country_id" => 126,
                    "name" => "Tauragė County"
                ],
                [
                    "id" => 1574,
                    "country_id" => 126,
                    "name" => "Alytus County"
                ],
                [
                    "id" => 1575,
                    "country_id" => 126,
                    "name" => "Kazlų Rūda municipality"
                ],
                [
                    "id" => 1576,
                    "country_id" => 126,
                    "name" => "Šakiai District Municipality"
                ],
                [
                    "id" => 1577,
                    "country_id" => 126,
                    "name" => "Šalčininkai District Municipality"
                ],
                [
                    "id" => 1578,
                    "country_id" => 126,
                    "name" => "Prienai District Municipality"
                ],
                [
                    "id" => 1579,
                    "country_id" => 126,
                    "name" => "Druskininkai municipality"
                ],
                [
                    "id" => 1580,
                    "country_id" => 126,
                    "name" => "Kaunas City Municipality"
                ],
                [
                    "id" => 1581,
                    "country_id" => 126,
                    "name" => "Joniškis District Municipality"
                ],
                [
                    "id" => 1582,
                    "country_id" => 126,
                    "name" => "Molėtai District Municipality"
                ],
                [
                    "id" => 1583,
                    "country_id" => 126,
                    "name" => "Kaišiadorys District Municipality"
                ],
                [
                    "id" => 1584,
                    "country_id" => 126,
                    "name" => "Kėdainiai District Municipality"
                ],
                [
                    "id" => 1585,
                    "country_id" => 126,
                    "name" => "Kupiškis District Municipality"
                ],
                [
                    "id" => 1586,
                    "country_id" => 126,
                    "name" => "Šiauliai County"
                ],
                [
                    "id" => 1587,
                    "country_id" => 126,
                    "name" => "Raseiniai District Municipality"
                ],
                [
                    "id" => 1588,
                    "country_id" => 126,
                    "name" => "Palanga City Municipality"
                ],
                [
                    "id" => 1589,
                    "country_id" => 126,
                    "name" => "Panevėžys City Municipality"
                ],
                [
                    "id" => 1590,
                    "country_id" => 126,
                    "name" => "Rietavas municipality"
                ],
                [
                    "id" => 1591,
                    "country_id" => 126,
                    "name" => "Kalvarija municipality"
                ],
                [
                    "id" => 1592,
                    "country_id" => 126,
                    "name" => "Vilnius District Municipality"
                ],
                [
                    "id" => 1593,
                    "country_id" => 126,
                    "name" => "Trakai District Municipality"
                ],
                [
                    "id" => 1594,
                    "country_id" => 126,
                    "name" => "Širvintos District Municipality"
                ],
                [
                    "id" => 1595,
                    "country_id" => 126,
                    "name" => "Pakruojis District Municipality"
                ],
                [
                    "id" => 1596,
                    "country_id" => 126,
                    "name" => "Ukmergė District Municipality"
                ],
                [
                    "id" => 1597,
                    "country_id" => 126,
                    "name" => "Klaipeda City Municipality"
                ],
                [
                    "id" => 1598,
                    "country_id" => 126,
                    "name" => "Utena District Municipality"
                ],
                [
                    "id" => 1599,
                    "country_id" => 126,
                    "name" => "Alytus District Municipality"
                ],
                [
                    "id" => 1600,
                    "country_id" => 126,
                    "name" => "Klaipėda County"
                ],
                [
                    "id" => 1601,
                    "country_id" => 126,
                    "name" => "Vilnius County"
                ],
                [
                    "id" => 1602,
                    "country_id" => 126,
                    "name" => "Varėna District Municipality"
                ],
                [
                    "id" => 1603,
                    "country_id" => 126,
                    "name" => "Birštonas Municipality"
                ],
                [
                    "id" => 1604,
                    "country_id" => 126,
                    "name" => "Klaipėda District Municipality"
                ],
                [
                    "id" => 1605,
                    "country_id" => 126,
                    "name" => "Alytus City Municipality"
                ],
                [
                    "id" => 1606,
                    "country_id" => 126,
                    "name" => "Vilnius City Municipality"
                ],
                [
                    "id" => 1607,
                    "country_id" => 126,
                    "name" => "Šilutė District Municipality"
                ],
                [
                    "id" => 1608,
                    "country_id" => 126,
                    "name" => "Telšiai District Municipality"
                ],
                [
                    "id" => 1609,
                    "country_id" => 126,
                    "name" => "Šiauliai City Municipality"
                ],
                [
                    "id" => 1610,
                    "country_id" => 126,
                    "name" => "Marijampolė Municipality"
                ],
                [
                    "id" => 1611,
                    "country_id" => 126,
                    "name" => "Lazdijai District Municipality"
                ],
                [
                    "id" => 1612,
                    "country_id" => 126,
                    "name" => "Pagėgiai municipality"
                ],
                [
                    "id" => 1613,
                    "country_id" => 126,
                    "name" => "Šilalė District Municipality"
                ],
                [
                    "id" => 1614,
                    "country_id" => 126,
                    "name" => "Panevėžys District Municipality"
                ],
                [
                    "id" => 1615,
                    "country_id" => 126,
                    "name" => "Rokiškis District Municipality"
                ],
                [
                    "id" => 1616,
                    "country_id" => 126,
                    "name" => "Pasvalys District Municipality"
                ],
                [
                    "id" => 1617,
                    "country_id" => 126,
                    "name" => "Skuodas District Municipality"
                ],
                [
                    "id" => 1618,
                    "country_id" => 126,
                    "name" => "Kelmė District Municipality"
                ],
                [
                    "id" => 1619,
                    "country_id" => 126,
                    "name" => "Zarasai District Municipality"
                ],
                [
                    "id" => 1620,
                    "country_id" => 126,
                    "name" => "Vilkaviškis District Municipality"
                ],
                [
                    "id" => 1621,
                    "country_id" => 126,
                    "name" => "Utena County"
                ],
                [
                    "id" => 1622,
                    "country_id" => 176,
                    "name" => "Opole Voivodeship"
                ],
                [
                    "id" => 1623,
                    "country_id" => 176,
                    "name" => "Silesian Voivodeship"
                ],
                [
                    "id" => 1624,
                    "country_id" => 176,
                    "name" => "Pomeranian Voivodeship"
                ],
                [
                    "id" => 1625,
                    "country_id" => 176,
                    "name" => "Kuyavian-Pomeranian Voivodeship"
                ],
                [
                    "id" => 1626,
                    "country_id" => 176,
                    "name" => "Podkarpackie Voivodeship"
                ],
                [
                    "id" => 1628,
                    "country_id" => 176,
                    "name" => "Warmian-Masurian Voivodeship"
                ],
                [
                    "id" => 1629,
                    "country_id" => 176,
                    "name" => "Lower Silesian Voivodeship"
                ],
                [
                    "id" => 1630,
                    "country_id" => 176,
                    "name" => "Świętokrzyskie Voivodeship"
                ],
                [
                    "id" => 1631,
                    "country_id" => 176,
                    "name" => "Lubusz Voivodeship"
                ],
                [
                    "id" => 1632,
                    "country_id" => 176,
                    "name" => "Podlaskie Voivodeship"
                ],
                [
                    "id" => 1633,
                    "country_id" => 176,
                    "name" => "West Pomeranian Voivodeship"
                ],
                [
                    "id" => 1634,
                    "country_id" => 176,
                    "name" => "Greater Poland Voivodeship"
                ],
                [
                    "id" => 1635,
                    "country_id" => 176,
                    "name" => "Lesser Poland Voivodeship"
                ],
                [
                    "id" => 1636,
                    "country_id" => 176,
                    "name" => "Łódź Voivodeship"
                ],
                [
                    "id" => 1637,
                    "country_id" => 176,
                    "name" => "Masovian Voivodeship"
                ],
                [
                    "id" => 1638,
                    "country_id" => 176,
                    "name" => "Lublin Voivodeship"
                ],
                [
                    "id" => 1639,
                    "country_id" => 214,
                    "name" => "Aargau"
                ],
                [
                    "id" => 1640,
                    "country_id" => 214,
                    "name" => "Fribourg"
                ],
                [
                    "id" => 1641,
                    "country_id" => 214,
                    "name" => "Basel-Land"
                ],
                [
                    "id" => 1642,
                    "country_id" => 214,
                    "name" => "Uri"
                ],
                [
                    "id" => 1643,
                    "country_id" => 214,
                    "name" => "Ticino"
                ],
                [
                    "id" => 1644,
                    "country_id" => 214,
                    "name" => "St. Gallen"
                ],
                [
                    "id" => 1645,
                    "country_id" => 214,
                    "name" => "Bern"
                ],
                [
                    "id" => 1646,
                    "country_id" => 214,
                    "name" => "Zug"
                ],
                [
                    "id" => 1647,
                    "country_id" => 214,
                    "name" => "Geneva"
                ],
                [
                    "id" => 1648,
                    "country_id" => 214,
                    "name" => "Valais"
                ],
                [
                    "id" => 1649,
                    "country_id" => 214,
                    "name" => "Appenzell Innerrhoden"
                ],
                [
                    "id" => 1650,
                    "country_id" => 214,
                    "name" => "Obwalden"
                ],
                [
                    "id" => 1651,
                    "country_id" => 214,
                    "name" => "Vaud"
                ],
                [
                    "id" => 1652,
                    "country_id" => 214,
                    "name" => "Nidwalden"
                ],
                [
                    "id" => 1653,
                    "country_id" => 214,
                    "name" => "Schwyz"
                ],
                [
                    "id" => 1654,
                    "country_id" => 214,
                    "name" => "Schaffhausen"
                ],
                [
                    "id" => 1655,
                    "country_id" => 214,
                    "name" => "Appenzell Ausserrhoden"
                ],
                [
                    "id" => 1656,
                    "country_id" => 214,
                    "name" => "Zürich"
                ],
                [
                    "id" => 1657,
                    "country_id" => 214,
                    "name" => "Thurgau"
                ],
                [
                    "id" => 1658,
                    "country_id" => 214,
                    "name" => "Jura"
                ],
                [
                    "id" => 1659,
                    "country_id" => 214,
                    "name" => "Neuchâtel"
                ],
                [
                    "id" => 1660,
                    "country_id" => 214,
                    "name" => "Graubünden"
                ],
                [
                    "id" => 1661,
                    "country_id" => 214,
                    "name" => "Glarus"
                ],
                [
                    "id" => 1662,
                    "country_id" => 214,
                    "name" => "Solothurn"
                ],
                [
                    "id" => 1663,
                    "country_id" => 214,
                    "name" => "Lucerne"
                ],
                [
                    "id" => 1664,
                    "country_id" => 107,
                    "name" => "Tuscany"
                ],
                [
                    "id" => 1665,
                    "country_id" => 107,
                    "name" => "Padua"
                ],
                [
                    "id" => 1666,
                    "country_id" => 107,
                    "name" => "Parma"
                ],
                [
                    "id" => 1667,
                    "country_id" => 107,
                    "name" => "Siracusa"
                ],
                [
                    "id" => 1668,
                    "country_id" => 107,
                    "name" => "Palermo"
                ],
                [
                    "id" => 1669,
                    "country_id" => 107,
                    "name" => "Campania"
                ],
                [
                    "id" => 1670,
                    "country_id" => 107,
                    "name" => "Marche"
                ],
                [
                    "id" => 1672,
                    "country_id" => 107,
                    "name" => "Ancona"
                ],
                [
                    "id" => 1674,
                    "country_id" => 107,
                    "name" => "Latina"
                ],
                [
                    "id" => 1675,
                    "country_id" => 107,
                    "name" => "Lecce"
                ],
                [
                    "id" => 1676,
                    "country_id" => 107,
                    "name" => "Pavia"
                ],
                [
                    "id" => 1677,
                    "country_id" => 107,
                    "name" => "Lecco"
                ],
                [
                    "id" => 1678,
                    "country_id" => 107,
                    "name" => "Lazio"
                ],
                [
                    "id" => 1679,
                    "country_id" => 107,
                    "name" => "Abruzzo"
                ],
                [
                    "id" => 1681,
                    "country_id" => 107,
                    "name" => "Ascoli Piceno"
                ],
                [
                    "id" => 1683,
                    "country_id" => 107,
                    "name" => "Umbria"
                ],
                [
                    "id" => 1685,
                    "country_id" => 107,
                    "name" => "Pisa"
                ],
                [
                    "id" => 1686,
                    "country_id" => 107,
                    "name" => "Barletta-Andria-Trani"
                ],
                [
                    "id" => 1687,
                    "country_id" => 107,
                    "name" => "Pistoia"
                ],
                [
                    "id" => 1688,
                    "country_id" => 107,
                    "name" => "Apulia"
                ],
                [
                    "id" => 1689,
                    "country_id" => 107,
                    "name" => "Belluno"
                ],
                [
                    "id" => 1690,
                    "country_id" => 107,
                    "name" => "Pordenone"
                ],
                [
                    "id" => 1691,
                    "country_id" => 107,
                    "name" => "Perugia"
                ],
                [
                    "id" => 1692,
                    "country_id" => 107,
                    "name" => "Avellino"
                ],
                [
                    "id" => 1693,
                    "country_id" => 107,
                    "name" => "Pesaro and Urbino"
                ],
                [
                    "id" => 1694,
                    "country_id" => 107,
                    "name" => "Pescara"
                ],
                [
                    "id" => 1695,
                    "country_id" => 107,
                    "name" => "Molise"
                ],
                [
                    "id" => 1696,
                    "country_id" => 107,
                    "name" => "Piacenza"
                ],
                [
                    "id" => 1697,
                    "country_id" => 107,
                    "name" => "Potenza"
                ],
                [
                    "id" => 1700,
                    "country_id" => 107,
                    "name" => "Prato"
                ],
                [
                    "id" => 1701,
                    "country_id" => 107,
                    "name" => "Benevento"
                ],
                [
                    "id" => 1702,
                    "country_id" => 107,
                    "name" => "Piedmont"
                ],
                [
                    "id" => 1703,
                    "country_id" => 107,
                    "name" => "Calabria"
                ],
                [
                    "id" => 1704,
                    "country_id" => 107,
                    "name" => "Bergamo"
                ],
                [
                    "id" => 1705,
                    "country_id" => 107,
                    "name" => "Lombardy"
                ],
                [
                    "id" => 1706,
                    "country_id" => 107,
                    "name" => "Basilicata"
                ],
                [
                    "id" => 1707,
                    "country_id" => 107,
                    "name" => "Ravenna"
                ],
                [
                    "id" => 1708,
                    "country_id" => 107,
                    "name" => "Reggio Emilia"
                ],
                [
                    "id" => 1709,
                    "country_id" => 107,
                    "name" => "Sicily"
                ],
                [
                    "id" => 1712,
                    "country_id" => 107,
                    "name" => "Rieti"
                ],
                [
                    "id" => 1713,
                    "country_id" => 107,
                    "name" => "Rimini"
                ],
                [
                    "id" => 1714,
                    "country_id" => 107,
                    "name" => "Brindisi"
                ],
                [
                    "id" => 1715,
                    "country_id" => 107,
                    "name" => "Sardinia"
                ],
                [
                    "id" => 1716,
                    "country_id" => 107,
                    "name" => "Aosta Valley"
                ],
                [
                    "id" => 1717,
                    "country_id" => 107,
                    "name" => "Brescia"
                ],
                [
                    "id" => 1718,
                    "country_id" => 107,
                    "name" => "Caltanissetta"
                ],
                [
                    "id" => 1719,
                    "country_id" => 107,
                    "name" => "Rovigo"
                ],
                [
                    "id" => 1720,
                    "country_id" => 107,
                    "name" => "Salerno"
                ],
                [
                    "id" => 1721,
                    "country_id" => 107,
                    "name" => "Campobasso"
                ],
                [
                    "id" => 1722,
                    "country_id" => 107,
                    "name" => "Sassari"
                ],
                [
                    "id" => 1723,
                    "country_id" => 107,
                    "name" => "Enna"
                ],
                [
                    "id" => 1725,
                    "country_id" => 107,
                    "name" => "Trentino-South Tyrol"
                ],
                [
                    "id" => 1726,
                    "country_id" => 107,
                    "name" => "Verbano-Cusio-Ossola"
                ],
                [
                    "id" => 1727,
                    "country_id" => 107,
                    "name" => "Agrigento"
                ],
                [
                    "id" => 1728,
                    "country_id" => 107,
                    "name" => "Catanzaro"
                ],
                [
                    "id" => 1729,
                    "country_id" => 107,
                    "name" => "Ragusa"
                ],
                [
                    "id" => 1730,
                    "country_id" => 107,
                    "name" => "South Sardinia"
                ],
                [
                    "id" => 1731,
                    "country_id" => 107,
                    "name" => "Caserta"
                ],
                [
                    "id" => 1732,
                    "country_id" => 107,
                    "name" => "Savona"
                ],
                [
                    "id" => 1733,
                    "country_id" => 107,
                    "name" => "Trapani"
                ],
                [
                    "id" => 1734,
                    "country_id" => 107,
                    "name" => "Siena"
                ],
                [
                    "id" => 1735,
                    "country_id" => 107,
                    "name" => "Viterbo"
                ],
                [
                    "id" => 1736,
                    "country_id" => 107,
                    "name" => "Verona"
                ],
                [
                    "id" => 1737,
                    "country_id" => 107,
                    "name" => "Vibo Valentia"
                ],
                [
                    "id" => 1738,
                    "country_id" => 107,
                    "name" => "Vicenza"
                ],
                [
                    "id" => 1739,
                    "country_id" => 107,
                    "name" => "Chieti"
                ],
                [
                    "id" => 1740,
                    "country_id" => 107,
                    "name" => "Como"
                ],
                [
                    "id" => 1741,
                    "country_id" => 107,
                    "name" => "Sondrio"
                ],
                [
                    "id" => 1742,
                    "country_id" => 107,
                    "name" => "Cosenza"
                ],
                [
                    "id" => 1743,
                    "country_id" => 107,
                    "name" => "Taranto"
                ],
                [
                    "id" => 1744,
                    "country_id" => 107,
                    "name" => "Fermo"
                ],
                [
                    "id" => 1745,
                    "country_id" => 107,
                    "name" => "Livorno"
                ],
                [
                    "id" => 1746,
                    "country_id" => 107,
                    "name" => "Ferrara"
                ],
                [
                    "id" => 1747,
                    "country_id" => 107,
                    "name" => "Lodi"
                ],
                [
                    "id" => 1749,
                    "country_id" => 107,
                    "name" => "Lucca"
                ],
                [
                    "id" => 1750,
                    "country_id" => 107,
                    "name" => "Macerata"
                ],
                [
                    "id" => 1751,
                    "country_id" => 107,
                    "name" => "Cremona"
                ],
                [
                    "id" => 1752,
                    "country_id" => 107,
                    "name" => "Teramo"
                ],
                [
                    "id" => 1753,
                    "country_id" => 107,
                    "name" => "Veneto"
                ],
                [
                    "id" => 1754,
                    "country_id" => 107,
                    "name" => "Crotone"
                ],
                [
                    "id" => 1755,
                    "country_id" => 107,
                    "name" => "Terni"
                ],
                [
                    "id" => 1756,
                    "country_id" => 107,
                    "name" => "Friuli–Venezia Giulia"
                ],
                [
                    "id" => 1757,
                    "country_id" => 107,
                    "name" => "Modena"
                ],
                [
                    "id" => 1758,
                    "country_id" => 107,
                    "name" => "Mantua"
                ],
                [
                    "id" => 1759,
                    "country_id" => 107,
                    "name" => "Massa and Carrara"
                ],
                [
                    "id" => 1760,
                    "country_id" => 107,
                    "name" => "Matera"
                ],
                [
                    "id" => 1761,
                    "country_id" => 107,
                    "name" => "Medio Campidano"
                ],
                [
                    "id" => 1762,
                    "country_id" => 107,
                    "name" => "Treviso"
                ],
                [
                    "id" => 1763,
                    "country_id" => 107,
                    "name" => "Trieste"
                ],
                [
                    "id" => 1764,
                    "country_id" => 107,
                    "name" => "Udine"
                ],
                [
                    "id" => 1765,
                    "country_id" => 107,
                    "name" => "Varese"
                ],
                [
                    "id" => 1768,
                    "country_id" => 107,
                    "name" => "Liguria"
                ],
                [
                    "id" => 1769,
                    "country_id" => 107,
                    "name" => "Monza and Brianza"
                ],
                [
                    "id" => 1771,
                    "country_id" => 107,
                    "name" => "Foggia"
                ],
                [
                    "id" => 1773,
                    "country_id" => 107,
                    "name" => "Emilia-Romagna"
                ],
                [
                    "id" => 1774,
                    "country_id" => 107,
                    "name" => "Novara"
                ],
                [
                    "id" => 1775,
                    "country_id" => 107,
                    "name" => "Cuneo"
                ],
                [
                    "id" => 1776,
                    "country_id" => 107,
                    "name" => "Frosinone"
                ],
                [
                    "id" => 1777,
                    "country_id" => 107,
                    "name" => "Gorizia"
                ],
                [
                    "id" => 1778,
                    "country_id" => 107,
                    "name" => "Biella"
                ],
                [
                    "id" => 1779,
                    "country_id" => 107,
                    "name" => "Forlì-Cesena"
                ],
                [
                    "id" => 1780,
                    "country_id" => 107,
                    "name" => "Asti"
                ],
                [
                    "id" => 1781,
                    "country_id" => 107,
                    "name" => "L'Aquila"
                ],
                [
                    "id" => 1783,
                    "country_id" => 107,
                    "name" => "Alessandria"
                ],
                [
                    "id" => 1785,
                    "country_id" => 107,
                    "name" => "Vercelli"
                ],
                [
                    "id" => 1786,
                    "country_id" => 107,
                    "name" => "Oristano"
                ],
                [
                    "id" => 1787,
                    "country_id" => 107,
                    "name" => "Grosseto"
                ],
                [
                    "id" => 1788,
                    "country_id" => 107,
                    "name" => "Imperia"
                ],
                [
                    "id" => 1789,
                    "country_id" => 107,
                    "name" => "Isernia"
                ],
                [
                    "id" => 1790,
                    "country_id" => 107,
                    "name" => "Nuoro"
                ],
                [
                    "id" => 1791,
                    "country_id" => 107,
                    "name" => "La Spezia"
                ],
                [
                    "id" => 1792,
                    "country_id" => 102,
                    "name" => "Sumatera Utara"
                ],
                [
                    "id" => 1793,
                    "country_id" => 102,
                    "name" => "Bengkulu"
                ],
                [
                    "id" => 1794,
                    "country_id" => 102,
                    "name" => "Kalimantan Tengah"
                ],
                [
                    "id" => 1795,
                    "country_id" => 102,
                    "name" => "Sulawesi Selatan"
                ],
                [
                    "id" => 1796,
                    "country_id" => 102,
                    "name" => "Sulawesi Tenggara"
                ],
                [
                    "id" => 1798,
                    "country_id" => 102,
                    "name" => "Papua"
                ],
                [
                    "id" => 1799,
                    "country_id" => 102,
                    "name" => "Papua Barat"
                ],
                [
                    "id" => 1800,
                    "country_id" => 102,
                    "name" => "Maluku"
                ],
                [
                    "id" => 1801,
                    "country_id" => 102,
                    "name" => "Maluku Utara"
                ],
                [
                    "id" => 1802,
                    "country_id" => 102,
                    "name" => "Jawa Tengah"
                ],
                [
                    "id" => 1804,
                    "country_id" => 102,
                    "name" => "Kalimantan Timur"
                ],
                [
                    "id" => 1805,
                    "country_id" => 102,
                    "name" => "DKI Jakarta"
                ],
                [
                    "id" => 1806,
                    "country_id" => 102,
                    "name" => "Kalimantan Barat"
                ],
                [
                    "id" => 1807,
                    "country_id" => 102,
                    "name" => "Kepulauan Riau"
                ],
                [
                    "id" => 1808,
                    "country_id" => 102,
                    "name" => "Sulawesi Utara"
                ],
                [
                    "id" => 1809,
                    "country_id" => 102,
                    "name" => "Riau"
                ],
                [
                    "id" => 1810,
                    "country_id" => 102,
                    "name" => "Banten"
                ],
                [
                    "id" => 1811,
                    "country_id" => 102,
                    "name" => "Lampung"
                ],
                [
                    "id" => 1812,
                    "country_id" => 102,
                    "name" => "Gorontalo"
                ],
                [
                    "id" => 1813,
                    "country_id" => 102,
                    "name" => "Sulawesi Tengah"
                ],
                [
                    "id" => 1814,
                    "country_id" => 102,
                    "name" => "Nusa Tenggara Barat"
                ],
                [
                    "id" => 1815,
                    "country_id" => 102,
                    "name" => "Jambi"
                ],
                [
                    "id" => 1816,
                    "country_id" => 102,
                    "name" => "Sumatera Selatan"
                ],
                [
                    "id" => 1817,
                    "country_id" => 102,
                    "name" => "Sulawesi Barat"
                ],
                [
                    "id" => 1818,
                    "country_id" => 102,
                    "name" => "Nusa Tenggara Timur"
                ],
                [
                    "id" => 1819,
                    "country_id" => 102,
                    "name" => "Kalimantan Selatan"
                ],
                [
                    "id" => 1820,
                    "country_id" => 102,
                    "name" => "Kepulauan Bangka Belitung"
                ],
                [
                    "id" => 1822,
                    "country_id" => 102,
                    "name" => "Aceh"
                ],
                [
                    "id" => 1824,
                    "country_id" => 102,
                    "name" => "Kalimantan Utara"
                ],
                [
                    "id" => 1825,
                    "country_id" => 102,
                    "name" => "Jawa Barat"
                ],
                [
                    "id" => 1826,
                    "country_id" => 102,
                    "name" => "Bali"
                ],
                [
                    "id" => 1827,
                    "country_id" => 102,
                    "name" => "Jawa Timur"
                ],
                [
                    "id" => 1828,
                    "country_id" => 102,
                    "name" => "Sumatera Barat"
                ],
                [
                    "id" => 1829,
                    "country_id" => 102,
                    "name" => "DI Yogyakarta"
                ],
                [
                    "id" => 1830,
                    "country_id" => 114,
                    "name" => "Phoenix Islands"
                ],
                [
                    "id" => 1831,
                    "country_id" => 114,
                    "name" => "Gilbert Islands"
                ],
                [
                    "id" => 1832,
                    "country_id" => 114,
                    "name" => "Line Islands"
                ],
                [
                    "id" => 1833,
                    "country_id" => 182,
                    "name" => "Primorsky Krai"
                ],
                [
                    "id" => 1834,
                    "country_id" => 182,
                    "name" => "Novgorod Oblast"
                ],
                [
                    "id" => 1835,
                    "country_id" => 182,
                    "name" => "Jewish Autonomous Oblast"
                ],
                [
                    "id" => 1836,
                    "country_id" => 182,
                    "name" => "Nenets Autonomous Okrug"
                ],
                [
                    "id" => 1837,
                    "country_id" => 182,
                    "name" => "Rostov Oblast"
                ],
                [
                    "id" => 1838,
                    "country_id" => 182,
                    "name" => "Khanty-Mansi Autonomous Okrug"
                ],
                [
                    "id" => 1839,
                    "country_id" => 182,
                    "name" => "Magadan Oblast"
                ],
                [
                    "id" => 1840,
                    "country_id" => 182,
                    "name" => "Krasnoyarsk Krai"
                ],
                [
                    "id" => 1841,
                    "country_id" => 182,
                    "name" => "Republic of Karelia"
                ],
                [
                    "id" => 1842,
                    "country_id" => 182,
                    "name" => "Republic of Buryatia"
                ],
                [
                    "id" => 1843,
                    "country_id" => 182,
                    "name" => "Murmansk Oblast"
                ],
                [
                    "id" => 1844,
                    "country_id" => 182,
                    "name" => "Kaluga Oblast"
                ],
                [
                    "id" => 1845,
                    "country_id" => 182,
                    "name" => "Chelyabinsk Oblast"
                ],
                [
                    "id" => 1846,
                    "country_id" => 182,
                    "name" => "Omsk Oblast"
                ],
                [
                    "id" => 1847,
                    "country_id" => 182,
                    "name" => "Yamalo-Nenets Autonomous Okrug"
                ],
                [
                    "id" => 1848,
                    "country_id" => 182,
                    "name" => "Sakha Republic"
                ],
                [
                    "id" => 1849,
                    "country_id" => 182,
                    "name" => "Arkhangelsk"
                ],
                [
                    "id" => 1850,
                    "country_id" => 182,
                    "name" => "Republic of Dagestan"
                ],
                [
                    "id" => 1851,
                    "country_id" => 182,
                    "name" => "Yaroslavl Oblast"
                ],
                [
                    "id" => 1852,
                    "country_id" => 182,
                    "name" => "Republic of Adygea"
                ],
                [
                    "id" => 1853,
                    "country_id" => 182,
                    "name" => "Republic of North Ossetia-Alania"
                ],
                [
                    "id" => 1854,
                    "country_id" => 182,
                    "name" => "Republic of Bashkortostan"
                ],
                [
                    "id" => 1855,
                    "country_id" => 182,
                    "name" => "Kursk Oblast"
                ],
                [
                    "id" => 1856,
                    "country_id" => 182,
                    "name" => "Ulyanovsk Oblast"
                ],
                [
                    "id" => 1857,
                    "country_id" => 182,
                    "name" => "Nizhny Novgorod Oblast"
                ],
                [
                    "id" => 1858,
                    "country_id" => 182,
                    "name" => "Amur Oblast"
                ],
                [
                    "id" => 1859,
                    "country_id" => 182,
                    "name" => "Chukotka Autonomous Okrug"
                ],
                [
                    "id" => 1860,
                    "country_id" => 182,
                    "name" => "Tver Oblast"
                ],
                [
                    "id" => 1861,
                    "country_id" => 182,
                    "name" => "Republic of Tatarstan"
                ],
                [
                    "id" => 1862,
                    "country_id" => 182,
                    "name" => "Samara Oblast"
                ],
                [
                    "id" => 1863,
                    "country_id" => 182,
                    "name" => "Pskov Oblast"
                ],
                [
                    "id" => 1864,
                    "country_id" => 182,
                    "name" => "Ivanovo Oblast"
                ],
                [
                    "id" => 1865,
                    "country_id" => 182,
                    "name" => "Kamchatka Krai"
                ],
                [
                    "id" => 1866,
                    "country_id" => 182,
                    "name" => "Astrakhan Oblast"
                ],
                [
                    "id" => 1867,
                    "country_id" => 182,
                    "name" => "Bryansk Oblast"
                ],
                [
                    "id" => 1868,
                    "country_id" => 182,
                    "name" => "Stavropol Krai"
                ],
                [
                    "id" => 1869,
                    "country_id" => 182,
                    "name" => "Karachay-Cherkess Republic"
                ],
                [
                    "id" => 1870,
                    "country_id" => 182,
                    "name" => "Mari El Republic"
                ],
                [
                    "id" => 1871,
                    "country_id" => 182,
                    "name" => "Perm Krai"
                ],
                [
                    "id" => 1872,
                    "country_id" => 182,
                    "name" => "Tomsk Oblast"
                ],
                [
                    "id" => 1873,
                    "country_id" => 182,
                    "name" => "Khabarovsk Krai"
                ],
                [
                    "id" => 1874,
                    "country_id" => 182,
                    "name" => "Vologda Oblast"
                ],
                [
                    "id" => 1875,
                    "country_id" => 182,
                    "name" => "Sakhalin"
                ],
                [
                    "id" => 1876,
                    "country_id" => 182,
                    "name" => "Altai Republic"
                ],
                [
                    "id" => 1877,
                    "country_id" => 182,
                    "name" => "Republic of Khakassia"
                ],
                [
                    "id" => 1878,
                    "country_id" => 182,
                    "name" => "Tambov Oblast"
                ],
                [
                    "id" => 1879,
                    "country_id" => 182,
                    "name" => "Saint Petersburg"
                ],
                [
                    "id" => 1880,
                    "country_id" => 182,
                    "name" => "Irkutsk"
                ],
                [
                    "id" => 1881,
                    "country_id" => 182,
                    "name" => "Vladimir Oblast"
                ],
                [
                    "id" => 1882,
                    "country_id" => 182,
                    "name" => "Moscow Oblast"
                ],
                [
                    "id" => 1883,
                    "country_id" => 182,
                    "name" => "Republic of Kalmykia"
                ],
                [
                    "id" => 1884,
                    "country_id" => 182,
                    "name" => "Republic of Ingushetia"
                ],
                [
                    "id" => 1885,
                    "country_id" => 182,
                    "name" => "Smolensk Oblast"
                ],
                [
                    "id" => 1886,
                    "country_id" => 182,
                    "name" => "Orenburg Oblast"
                ],
                [
                    "id" => 1887,
                    "country_id" => 182,
                    "name" => "Saratov Oblast"
                ],
                [
                    "id" => 1888,
                    "country_id" => 182,
                    "name" => "Novosibirsk"
                ],
                [
                    "id" => 1889,
                    "country_id" => 182,
                    "name" => "Lipetsk Oblast"
                ],
                [
                    "id" => 1890,
                    "country_id" => 182,
                    "name" => "Kirov Oblast"
                ],
                [
                    "id" => 1891,
                    "country_id" => 182,
                    "name" => "Krasnodar Krai"
                ],
                [
                    "id" => 1892,
                    "country_id" => 182,
                    "name" => "Kabardino-Balkar Republic"
                ],
                [
                    "id" => 1893,
                    "country_id" => 182,
                    "name" => "Chechen Republic"
                ],
                [
                    "id" => 1894,
                    "country_id" => 182,
                    "name" => "Sverdlovsk"
                ],
                [
                    "id" => 1895,
                    "country_id" => 182,
                    "name" => "Tula Oblast"
                ],
                [
                    "id" => 1896,
                    "country_id" => 182,
                    "name" => "Leningrad Oblast"
                ],
                [
                    "id" => 1897,
                    "country_id" => 182,
                    "name" => "Kemerovo Oblast"
                ],
                [
                    "id" => 1898,
                    "country_id" => 182,
                    "name" => "Republic of Mordovia"
                ],
                [
                    "id" => 1899,
                    "country_id" => 182,
                    "name" => "Komi Republic"
                ],
                [
                    "id" => 1900,
                    "country_id" => 182,
                    "name" => "Tuva Republic"
                ],
                [
                    "id" => 1901,
                    "country_id" => 182,
                    "name" => "Moscow"
                ],
                [
                    "id" => 1902,
                    "country_id" => 182,
                    "name" => "Kaliningrad"
                ],
                [
                    "id" => 1903,
                    "country_id" => 182,
                    "name" => "Belgorod Oblast"
                ],
                [
                    "id" => 1904,
                    "country_id" => 182,
                    "name" => "Zabaykalsky Krai"
                ],
                [
                    "id" => 1905,
                    "country_id" => 182,
                    "name" => "Ryazan Oblast"
                ],
                [
                    "id" => 1906,
                    "country_id" => 182,
                    "name" => "Voronezh Oblast"
                ],
                [
                    "id" => 1907,
                    "country_id" => 182,
                    "name" => "Tyumen Oblast"
                ],
                [
                    "id" => 1908,
                    "country_id" => 182,
                    "name" => "Oryol Oblast"
                ],
                [
                    "id" => 1909,
                    "country_id" => 182,
                    "name" => "Penza Oblast"
                ],
                [
                    "id" => 1910,
                    "country_id" => 182,
                    "name" => "Kostroma Oblast"
                ],
                [
                    "id" => 1911,
                    "country_id" => 182,
                    "name" => "Altai Krai"
                ],
                [
                    "id" => 1912,
                    "country_id" => 182,
                    "name" => "Sevastopol"
                ],
                [
                    "id" => 1913,
                    "country_id" => 182,
                    "name" => "Udmurt Republic"
                ],
                [
                    "id" => 1914,
                    "country_id" => 182,
                    "name" => "Chuvash Republic"
                ],
                [
                    "id" => 1915,
                    "country_id" => 182,
                    "name" => "Kurgan Oblast"
                ],
                [
                    "id" => 1916,
                    "country_id" => 73,
                    "name" => "Lomaiviti"
                ],
                [
                    "id" => 1917,
                    "country_id" => 73,
                    "name" => "Ba"
                ],
                [
                    "id" => 1918,
                    "country_id" => 73,
                    "name" => "Tailevu"
                ],
                [
                    "id" => 1919,
                    "country_id" => 73,
                    "name" => "Nadroga-Navosa"
                ],
                [
                    "id" => 1920,
                    "country_id" => 73,
                    "name" => "Rewa"
                ],
                [
                    "id" => 1921,
                    "country_id" => 73,
                    "name" => "Northern Division"
                ],
                [
                    "id" => 1922,
                    "country_id" => 73,
                    "name" => "Macuata"
                ],
                [
                    "id" => 1923,
                    "country_id" => 73,
                    "name" => "Western Division"
                ],
                [
                    "id" => 1924,
                    "country_id" => 73,
                    "name" => "Cakaudrove"
                ],
                [
                    "id" => 1925,
                    "country_id" => 73,
                    "name" => "Serua"
                ],
                [
                    "id" => 1926,
                    "country_id" => 73,
                    "name" => "Ra"
                ],
                [
                    "id" => 1927,
                    "country_id" => 73,
                    "name" => "Naitasiri"
                ],
                [
                    "id" => 1928,
                    "country_id" => 73,
                    "name" => "Namosi"
                ],
                [
                    "id" => 1929,
                    "country_id" => 73,
                    "name" => "Central Division"
                ],
                [
                    "id" => 1930,
                    "country_id" => 73,
                    "name" => "Bua"
                ],
                [
                    "id" => 1931,
                    "country_id" => 73,
                    "name" => "Rotuma"
                ],
                [
                    "id" => 1932,
                    "country_id" => 73,
                    "name" => "Eastern Division"
                ],
                [
                    "id" => 1933,
                    "country_id" => 73,
                    "name" => "Lau"
                ],
                [
                    "id" => 1934,
                    "country_id" => 73,
                    "name" => "Kadavu"
                ],
                [
                    "id" => 1935,
                    "country_id" => 132,
                    "name" => "Labuan"
                ],
                [
                    "id" => 1936,
                    "country_id" => 132,
                    "name" => "Sabah"
                ],
                [
                    "id" => 1937,
                    "country_id" => 132,
                    "name" => "Sarawak"
                ],
                [
                    "id" => 1938,
                    "country_id" => 132,
                    "name" => "Perlis"
                ],
                [
                    "id" => 1939,
                    "country_id" => 132,
                    "name" => "Penang"
                ],
                [
                    "id" => 1940,
                    "country_id" => 132,
                    "name" => "Pahang"
                ],
                [
                    "id" => 1941,
                    "country_id" => 132,
                    "name" => "Malacca"
                ],
                [
                    "id" => 1942,
                    "country_id" => 132,
                    "name" => "Terengganu"
                ],
                [
                    "id" => 1943,
                    "country_id" => 132,
                    "name" => "Perak"
                ],
                [
                    "id" => 1944,
                    "country_id" => 132,
                    "name" => "Selangor"
                ],
                [
                    "id" => 1945,
                    "country_id" => 132,
                    "name" => "Putrajaya"
                ],
                [
                    "id" => 1946,
                    "country_id" => 132,
                    "name" => "Kelantan"
                ],
                [
                    "id" => 1947,
                    "country_id" => 132,
                    "name" => "Kedah"
                ],
                [
                    "id" => 1948,
                    "country_id" => 132,
                    "name" => "Negeri Sembilan"
                ],
                [
                    "id" => 1949,
                    "country_id" => 132,
                    "name" => "Kuala Lumpur"
                ],
                [
                    "id" => 1950,
                    "country_id" => 132,
                    "name" => "Johor"
                ],
                [
                    "id" => 1951,
                    "country_id" => 247,
                    "name" => "Mashonaland East Province"
                ],
                [
                    "id" => 1952,
                    "country_id" => 247,
                    "name" => "Matabeleland South Province"
                ],
                [
                    "id" => 1953,
                    "country_id" => 247,
                    "name" => "Mashonaland West Province"
                ],
                [
                    "id" => 1954,
                    "country_id" => 247,
                    "name" => "Matabeleland North Province"
                ],
                [
                    "id" => 1955,
                    "country_id" => 247,
                    "name" => "Mashonaland Central Province"
                ],
                [
                    "id" => 1956,
                    "country_id" => 247,
                    "name" => "Bulawayo Province"
                ],
                [
                    "id" => 1957,
                    "country_id" => 247,
                    "name" => "Midlands Province"
                ],
                [
                    "id" => 1958,
                    "country_id" => 247,
                    "name" => "Harare Province"
                ],
                [
                    "id" => 1959,
                    "country_id" => 247,
                    "name" => "Manicaland"
                ],
                [
                    "id" => 1960,
                    "country_id" => 247,
                    "name" => "Masvingo Province"
                ],
                [
                    "id" => 1961,
                    "country_id" => 146,
                    "name" => "Bulgan Province"
                ],
                [
                    "id" => 1962,
                    "country_id" => 146,
                    "name" => "Darkhan-Uul Province"
                ],
                [
                    "id" => 1963,
                    "country_id" => 146,
                    "name" => "Dornod Province"
                ],
                [
                    "id" => 1964,
                    "country_id" => 146,
                    "name" => "Khovd Province"
                ],
                [
                    "id" => 1965,
                    "country_id" => 146,
                    "name" => "Övörkhangai Province"
                ],
                [
                    "id" => 1966,
                    "country_id" => 146,
                    "name" => "Orkhon Province"
                ],
                [
                    "id" => 1967,
                    "country_id" => 146,
                    "name" => "Ömnögovi Province"
                ],
                [
                    "id" => 1968,
                    "country_id" => 146,
                    "name" => "Töv Province"
                ],
                [
                    "id" => 1969,
                    "country_id" => 146,
                    "name" => "Bayan-Ölgii Province"
                ],
                [
                    "id" => 1970,
                    "country_id" => 146,
                    "name" => "Dundgovi Province"
                ],
                [
                    "id" => 1971,
                    "country_id" => 146,
                    "name" => "Uvs Province"
                ],
                [
                    "id" => 1972,
                    "country_id" => 146,
                    "name" => "Govi-Altai Province"
                ],
                [
                    "id" => 1973,
                    "country_id" => 146,
                    "name" => "Arkhangai Province"
                ],
                [
                    "id" => 1974,
                    "country_id" => 146,
                    "name" => "Khentii Province"
                ],
                [
                    "id" => 1975,
                    "country_id" => 146,
                    "name" => "Khövsgöl Province"
                ],
                [
                    "id" => 1976,
                    "country_id" => 146,
                    "name" => "Bayankhongor Province"
                ],
                [
                    "id" => 1977,
                    "country_id" => 146,
                    "name" => "Sükhbaatar Province"
                ],
                [
                    "id" => 1978,
                    "country_id" => 146,
                    "name" => "Govisümber Province"
                ],
                [
                    "id" => 1979,
                    "country_id" => 146,
                    "name" => "Zavkhan Province"
                ],
                [
                    "id" => 1980,
                    "country_id" => 146,
                    "name" => "Selenge Province"
                ],
                [
                    "id" => 1981,
                    "country_id" => 146,
                    "name" => "Dornogovi Province"
                ],
                [
                    "id" => 1982,
                    "country_id" => 246,
                    "name" => "Northern Province"
                ],
                [
                    "id" => 1983,
                    "country_id" => 246,
                    "name" => "Western Province"
                ],
                [
                    "id" => 1984,
                    "country_id" => 246,
                    "name" => "Copperbelt Province"
                ],
                [
                    "id" => 1985,
                    "country_id" => 246,
                    "name" => "Northwestern Province"
                ],
                [
                    "id" => 1986,
                    "country_id" => 246,
                    "name" => "Central Province"
                ],
                [
                    "id" => 1987,
                    "country_id" => 246,
                    "name" => "Luapula Province"
                ],
                [
                    "id" => 1988,
                    "country_id" => 246,
                    "name" => "Lusaka Province"
                ],
                [
                    "id" => 1989,
                    "country_id" => 246,
                    "name" => "Muchinga Province"
                ],
                [
                    "id" => 1990,
                    "country_id" => 246,
                    "name" => "Southern Province"
                ],
                [
                    "id" => 1991,
                    "country_id" => 246,
                    "name" => "Eastern Province"
                ],
                [
                    "id" => 1992,
                    "country_id" => 18,
                    "name" => "Capital"
                ],
                [
                    "id" => 1993,
                    "country_id" => 18,
                    "name" => "Southern"
                ],
                [
                    "id" => 1994,
                    "country_id" => 18,
                    "name" => "Northern"
                ],
                [
                    "id" => 1995,
                    "country_id" => 18,
                    "name" => "Muharraq"
                ],
                [
                    "id" => 1996,
                    "country_id" => 18,
                    "name" => "Central"
                ],
                [
                    "id" => 1997,
                    "country_id" => 31,
                    "name" => "Rio de Janeiro"
                ],
                [
                    "id" => 1998,
                    "country_id" => 31,
                    "name" => "Minas Gerais"
                ],
                [
                    "id" => 1999,
                    "country_id" => 31,
                    "name" => "Amapá"
                ],
                [
                    "id" => 2000,
                    "country_id" => 31,
                    "name" => "Goiás"
                ],
                [
                    "id" => 2001,
                    "country_id" => 31,
                    "name" => "Rio Grande do Sul"
                ],
                [
                    "id" => 2002,
                    "country_id" => 31,
                    "name" => "Bahia"
                ],
                [
                    "id" => 2003,
                    "country_id" => 31,
                    "name" => "Sergipe"
                ],
                [
                    "id" => 2004,
                    "country_id" => 31,
                    "name" => "Amazonas"
                ],
                [
                    "id" => 2005,
                    "country_id" => 31,
                    "name" => "Paraíba"
                ],
                [
                    "id" => 2006,
                    "country_id" => 31,
                    "name" => "Pernambuco"
                ],
                [
                    "id" => 2007,
                    "country_id" => 31,
                    "name" => "Alagoas"
                ],
                [
                    "id" => 2008,
                    "country_id" => 31,
                    "name" => "Piauí"
                ],
                [
                    "id" => 2009,
                    "country_id" => 31,
                    "name" => "Pará"
                ],
                [
                    "id" => 2010,
                    "country_id" => 31,
                    "name" => "Mato Grosso do Sul"
                ],
                [
                    "id" => 2011,
                    "country_id" => 31,
                    "name" => "Mato Grosso"
                ],
                [
                    "id" => 2012,
                    "country_id" => 31,
                    "name" => "Acre"
                ],
                [
                    "id" => 2013,
                    "country_id" => 31,
                    "name" => "Rondônia"
                ],
                [
                    "id" => 2014,
                    "country_id" => 31,
                    "name" => "Santa Catarina"
                ],
                [
                    "id" => 2015,
                    "country_id" => 31,
                    "name" => "Maranhão"
                ],
                [
                    "id" => 2016,
                    "country_id" => 31,
                    "name" => "Ceará"
                ],
                [
                    "id" => 2017,
                    "country_id" => 31,
                    "name" => "Distrito Federal"
                ],
                [
                    "id" => 2018,
                    "country_id" => 31,
                    "name" => "Espírito Santo"
                ],
                [
                    "id" => 2019,
                    "country_id" => 31,
                    "name" => "Rio Grande do Norte"
                ],
                [
                    "id" => 2020,
                    "country_id" => 31,
                    "name" => "Tocantins"
                ],
                [
                    "id" => 2021,
                    "country_id" => 31,
                    "name" => "São Paulo"
                ],
                [
                    "id" => 2022,
                    "country_id" => 31,
                    "name" => "Paraná"
                ],
                [
                    "id" => 2023,
                    "country_id" => 12,
                    "name" => "Aragatsotn Region"
                ],
                [
                    "id" => 2024,
                    "country_id" => 12,
                    "name" => "Ararat Province"
                ],
                [
                    "id" => 2025,
                    "country_id" => 12,
                    "name" => "Vayots Dzor Region"
                ],
                [
                    "id" => 2026,
                    "country_id" => 12,
                    "name" => "Armavir Region"
                ],
                [
                    "id" => 2027,
                    "country_id" => 12,
                    "name" => "Syunik Province"
                ],
                [
                    "id" => 2028,
                    "country_id" => 12,
                    "name" => "Gegharkunik Province"
                ],
                [
                    "id" => 2029,
                    "country_id" => 12,
                    "name" => "Lori Region"
                ],
                [
                    "id" => 2030,
                    "country_id" => 12,
                    "name" => "Yerevan"
                ],
                [
                    "id" => 2031,
                    "country_id" => 12,
                    "name" => "Shirak Region"
                ],
                [
                    "id" => 2032,
                    "country_id" => 12,
                    "name" => "Tavush Region"
                ],
                [
                    "id" => 2033,
                    "country_id" => 12,
                    "name" => "Kotayk Region"
                ],
                [
                    "id" => 2034,
                    "country_id" => 239,
                    "name" => "Cojedes"
                ],
                [
                    "id" => 2035,
                    "country_id" => 239,
                    "name" => "Falcón"
                ],
                [
                    "id" => 2036,
                    "country_id" => 239,
                    "name" => "Portuguesa"
                ],
                [
                    "id" => 2037,
                    "country_id" => 239,
                    "name" => "Miranda"
                ],
                [
                    "id" => 2038,
                    "country_id" => 239,
                    "name" => "Lara"
                ],
                [
                    "id" => 2039,
                    "country_id" => 239,
                    "name" => "Bolívar"
                ],
                [
                    "id" => 2040,
                    "country_id" => 239,
                    "name" => "Carabobo"
                ],
                [
                    "id" => 2041,
                    "country_id" => 239,
                    "name" => "Yaracuy"
                ],
                [
                    "id" => 2042,
                    "country_id" => 239,
                    "name" => "Zulia"
                ],
                [
                    "id" => 2043,
                    "country_id" => 239,
                    "name" => "Trujillo"
                ],
                [
                    "id" => 2044,
                    "country_id" => 239,
                    "name" => "Amazonas"
                ],
                [
                    "id" => 2045,
                    "country_id" => 239,
                    "name" => "Guárico"
                ],
                [
                    "id" => 2046,
                    "country_id" => 239,
                    "name" => "Federal Dependencies of Venezuela"
                ],
                [
                    "id" => 2047,
                    "country_id" => 239,
                    "name" => "Aragua"
                ],
                [
                    "id" => 2048,
                    "country_id" => 239,
                    "name" => "Táchira"
                ],
                [
                    "id" => 2049,
                    "country_id" => 239,
                    "name" => "Barinas"
                ],
                [
                    "id" => 2050,
                    "country_id" => 239,
                    "name" => "Anzoátegui"
                ],
                [
                    "id" => 2051,
                    "country_id" => 239,
                    "name" => "Delta Amacuro"
                ],
                [
                    "id" => 2052,
                    "country_id" => 239,
                    "name" => "Nueva Esparta"
                ],
                [
                    "id" => 2053,
                    "country_id" => 239,
                    "name" => "Mérida"
                ],
                [
                    "id" => 2054,
                    "country_id" => 239,
                    "name" => "Monagas"
                ],
                [
                    "id" => 2055,
                    "country_id" => 239,
                    "name" => "La Guaira"
                ],
                [
                    "id" => 2056,
                    "country_id" => 239,
                    "name" => "Sucre"
                ],
                [
                    "id" => 2057,
                    "country_id" => 15,
                    "name" => "Carinthia"
                ],
                [
                    "id" => 2058,
                    "country_id" => 15,
                    "name" => "Upper Austria"
                ],
                [
                    "id" => 2059,
                    "country_id" => 15,
                    "name" => "Styria"
                ],
                [
                    "id" => 2060,
                    "country_id" => 15,
                    "name" => "Vienna"
                ],
                [
                    "id" => 2061,
                    "country_id" => 15,
                    "name" => "Salzburg"
                ],
                [
                    "id" => 2062,
                    "country_id" => 15,
                    "name" => "Burgenland"
                ],
                [
                    "id" => 2063,
                    "country_id" => 15,
                    "name" => "Vorarlberg"
                ],
                [
                    "id" => 2064,
                    "country_id" => 15,
                    "name" => "Tyrol"
                ],
                [
                    "id" => 2065,
                    "country_id" => 15,
                    "name" => "Lower Austria"
                ],
                [
                    "id" => 2066,
                    "country_id" => 154,
                    "name" => "Mid-Western Region"
                ],
                [
                    "id" => 2067,
                    "country_id" => 154,
                    "name" => "Western Region"
                ],
                [
                    "id" => 2068,
                    "country_id" => 154,
                    "name" => "Far-Western Development Region"
                ],
                [
                    "id" => 2069,
                    "country_id" => 154,
                    "name" => "Eastern Development Region"
                ],
                [
                    "id" => 2070,
                    "country_id" => 154,
                    "name" => "Mechi Zone"
                ],
                [
                    "id" => 2071,
                    "country_id" => 154,
                    "name" => "Bheri Zone"
                ],
                [
                    "id" => 2072,
                    "country_id" => 154,
                    "name" => "Kosi Zone"
                ],
                [
                    "id" => 2073,
                    "country_id" => 154,
                    "name" => "Central Region"
                ],
                [
                    "id" => 2074,
                    "country_id" => 154,
                    "name" => "Lumbini Zone"
                ],
                [
                    "id" => 2075,
                    "country_id" => 154,
                    "name" => "Narayani Zone"
                ],
                [
                    "id" => 2076,
                    "country_id" => 154,
                    "name" => "Janakpur Zone"
                ],
                [
                    "id" => 2077,
                    "country_id" => 154,
                    "name" => "Rapti Zone"
                ],
                [
                    "id" => 2078,
                    "country_id" => 154,
                    "name" => "Seti Zone"
                ],
                [
                    "id" => 2079,
                    "country_id" => 154,
                    "name" => "Karnali Zone"
                ],
                [
                    "id" => 2080,
                    "country_id" => 154,
                    "name" => "Dhaulagiri Zone"
                ],
                [
                    "id" => 2081,
                    "country_id" => 154,
                    "name" => "Gandaki Zone"
                ],
                [
                    "id" => 2082,
                    "country_id" => 154,
                    "name" => "Bagmati Zone"
                ],
                [
                    "id" => 2083,
                    "country_id" => 154,
                    "name" => "Mahakali Zone"
                ],
                [
                    "id" => 2084,
                    "country_id" => 154,
                    "name" => "Sagarmatha Zone"
                ],
                [
                    "id" => 2085,
                    "country_id" => 206,
                    "name" => "Unity"
                ],
                [
                    "id" => 2086,
                    "country_id" => 206,
                    "name" => "Upper Nile"
                ],
                [
                    "id" => 2087,
                    "country_id" => 206,
                    "name" => "Warrap"
                ],
                [
                    "id" => 2088,
                    "country_id" => 206,
                    "name" => "Northern Bahr el Ghazal"
                ],
                [
                    "id" => 2089,
                    "country_id" => 206,
                    "name" => "Western Equatoria"
                ],
                [
                    "id" => 2090,
                    "country_id" => 206,
                    "name" => "Lakes"
                ],
                [
                    "id" => 2091,
                    "country_id" => 206,
                    "name" => "Western Bahr el Ghazal"
                ],
                [
                    "id" => 2092,
                    "country_id" => 206,
                    "name" => "Central Equatoria"
                ],
                [
                    "id" => 2093,
                    "country_id" => 206,
                    "name" => "Eastern Equatoria"
                ],
                [
                    "id" => 2094,
                    "country_id" => 206,
                    "name" => "Jonglei State"
                ],
                [
                    "id" => 2095,
                    "country_id" => 85,
                    "name" => "Karditsa Regional Unit"
                ],
                [
                    "id" => 2096,
                    "country_id" => 85,
                    "name" => "West Greece Region"
                ],
                [
                    "id" => 2097,
                    "country_id" => 85,
                    "name" => "Thessaloniki Regional Unit"
                ],
                [
                    "id" => 2098,
                    "country_id" => 85,
                    "name" => "Arcadia Prefecture"
                ],
                [
                    "id" => 2099,
                    "country_id" => 85,
                    "name" => "Imathia Regional Unit"
                ],
                [
                    "id" => 2100,
                    "country_id" => 85,
                    "name" => "Kastoria Regional Unit"
                ],
                [
                    "id" => 2101,
                    "country_id" => 85,
                    "name" => "Euboea"
                ],
                [
                    "id" => 2102,
                    "country_id" => 85,
                    "name" => "Grevena Prefecture"
                ],
                [
                    "id" => 2103,
                    "country_id" => 85,
                    "name" => "Preveza Prefecture"
                ],
                [
                    "id" => 2104,
                    "country_id" => 85,
                    "name" => "Lefkada Regional Unit"
                ],
                [
                    "id" => 2105,
                    "country_id" => 85,
                    "name" => "Argolis Regional Unit"
                ],
                [
                    "id" => 2106,
                    "country_id" => 85,
                    "name" => "Laconia"
                ],
                [
                    "id" => 2107,
                    "country_id" => 85,
                    "name" => "Pella Regional Unit"
                ],
                [
                    "id" => 2108,
                    "country_id" => 85,
                    "name" => "West Macedonia Region"
                ],
                [
                    "id" => 2109,
                    "country_id" => 85,
                    "name" => "Crete Region"
                ],
                [
                    "id" => 2110,
                    "country_id" => 85,
                    "name" => "Epirus Region"
                ],
                [
                    "id" => 2111,
                    "country_id" => 85,
                    "name" => "Kilkis Regional Unit"
                ],
                [
                    "id" => 2112,
                    "country_id" => 85,
                    "name" => "Kozani Prefecture"
                ],
                [
                    "id" => 2113,
                    "country_id" => 85,
                    "name" => "Ioannina Regional Unit"
                ],
                [
                    "id" => 2114,
                    "country_id" => 85,
                    "name" => "Phthiotis Prefecture"
                ],
                [
                    "id" => 2115,
                    "country_id" => 85,
                    "name" => "Chania Regional Unit"
                ],
                [
                    "id" => 2116,
                    "country_id" => 85,
                    "name" => "Achaea Regional Unit"
                ],
                [
                    "id" => 2117,
                    "country_id" => 85,
                    "name" => "East Macedonia and Thrace"
                ],
                [
                    "id" => 2118,
                    "country_id" => 85,
                    "name" => "South Aegean"
                ],
                [
                    "id" => 2119,
                    "country_id" => 85,
                    "name" => "Peloponnese Region"
                ],
                [
                    "id" => 2120,
                    "country_id" => 85,
                    "name" => "East Attica Regional Unit"
                ],
                [
                    "id" => 2121,
                    "country_id" => 85,
                    "name" => "Serres Prefecture"
                ],
                [
                    "id" => 2122,
                    "country_id" => 85,
                    "name" => "Attica Region"
                ],
                [
                    "id" => 2123,
                    "country_id" => 85,
                    "name" => "Aetolia-Acarnania Regional Unit"
                ],
                [
                    "id" => 2124,
                    "country_id" => 85,
                    "name" => "Corfu Prefecture"
                ],
                [
                    "id" => 2125,
                    "country_id" => 85,
                    "name" => "Central Macedonia"
                ],
                [
                    "id" => 2126,
                    "country_id" => 85,
                    "name" => "Boeotia Regional Unit"
                ],
                [
                    "id" => 2127,
                    "country_id" => 85,
                    "name" => "Kefalonia Prefecture"
                ],
                [
                    "id" => 2128,
                    "country_id" => 85,
                    "name" => "Central Greece Region"
                ],
                [
                    "id" => 2129,
                    "country_id" => 85,
                    "name" => "Corinthia Regional Unit"
                ],
                [
                    "id" => 2130,
                    "country_id" => 85,
                    "name" => "Drama Regional Unit"
                ],
                [
                    "id" => 2131,
                    "country_id" => 85,
                    "name" => "Ionian Islands Region"
                ],
                [
                    "id" => 2132,
                    "country_id" => 85,
                    "name" => "Larissa Prefecture"
                ],
                [
                    "id" => 2133,
                    "country_id" => 151,
                    "name" => "Kayin State"
                ],
                [
                    "id" => 2134,
                    "country_id" => 151,
                    "name" => "Mandalay Region"
                ],
                [
                    "id" => 2135,
                    "country_id" => 151,
                    "name" => "Yangon Region"
                ],
                [
                    "id" => 2136,
                    "country_id" => 151,
                    "name" => "Magway Region"
                ],
                [
                    "id" => 2137,
                    "country_id" => 151,
                    "name" => "Chin State"
                ],
                [
                    "id" => 2138,
                    "country_id" => 151,
                    "name" => "Rakhine State"
                ],
                [
                    "id" => 2139,
                    "country_id" => 151,
                    "name" => "Shan State"
                ],
                [
                    "id" => 2140,
                    "country_id" => 151,
                    "name" => "Tanintharyi Region"
                ],
                [
                    "id" => 2141,
                    "country_id" => 151,
                    "name" => "Bago"
                ],
                [
                    "id" => 2142,
                    "country_id" => 151,
                    "name" => "Ayeyarwady Region"
                ],
                [
                    "id" => 2143,
                    "country_id" => 151,
                    "name" => "Kachin State"
                ],
                [
                    "id" => 2144,
                    "country_id" => 151,
                    "name" => "Kayah State"
                ],
                [
                    "id" => 2145,
                    "country_id" => 151,
                    "name" => "Sagaing Region"
                ],
                [
                    "id" => 2146,
                    "country_id" => 151,
                    "name" => "Naypyidaw Union Territory"
                ],
                [
                    "id" => 2147,
                    "country_id" => 151,
                    "name" => "Mon State"
                ],
                [
                    "id" => 2148,
                    "country_id" => 225,
                    "name" => "Bartın"
                ],
                [
                    "id" => 2149,
                    "country_id" => 225,
                    "name" => "Kütahya"
                ],
                [
                    "id" => 2150,
                    "country_id" => 225,
                    "name" => "Sakarya"
                ],
                [
                    "id" => 2151,
                    "country_id" => 225,
                    "name" => "Edirne"
                ],
                [
                    "id" => 2152,
                    "country_id" => 225,
                    "name" => "Van"
                ],
                [
                    "id" => 2153,
                    "country_id" => 225,
                    "name" => "Bingöl"
                ],
                [
                    "id" => 2154,
                    "country_id" => 225,
                    "name" => "Kilis"
                ],
                [
                    "id" => 2155,
                    "country_id" => 225,
                    "name" => "Adıyaman"
                ],
                [
                    "id" => 2156,
                    "country_id" => 225,
                    "name" => "Mersin"
                ],
                [
                    "id" => 2157,
                    "country_id" => 225,
                    "name" => "Denizli"
                ],
                [
                    "id" => 2158,
                    "country_id" => 225,
                    "name" => "Malatya"
                ],
                [
                    "id" => 2159,
                    "country_id" => 225,
                    "name" => "Elazığ"
                ],
                [
                    "id" => 2160,
                    "country_id" => 225,
                    "name" => "Erzincan"
                ],
                [
                    "id" => 2161,
                    "country_id" => 225,
                    "name" => "Amasya"
                ],
                [
                    "id" => 2162,
                    "country_id" => 225,
                    "name" => "Muş"
                ],
                [
                    "id" => 2163,
                    "country_id" => 225,
                    "name" => "Bursa"
                ],
                [
                    "id" => 2164,
                    "country_id" => 225,
                    "name" => "Eskişehir"
                ],
                [
                    "id" => 2165,
                    "country_id" => 225,
                    "name" => "Erzurum"
                ],
                [
                    "id" => 2166,
                    "country_id" => 225,
                    "name" => "Iğdır"
                ],
                [
                    "id" => 2167,
                    "country_id" => 225,
                    "name" => "Tekirdağ"
                ],
                [
                    "id" => 2168,
                    "country_id" => 225,
                    "name" => "Çankırı"
                ],
                [
                    "id" => 2169,
                    "country_id" => 225,
                    "name" => "Antalya"
                ],
                [
                    "id" => 2170,
                    "country_id" => 225,
                    "name" => "İstanbul"
                ],
                [
                    "id" => 2171,
                    "country_id" => 225,
                    "name" => "Konya"
                ],
                [
                    "id" => 2172,
                    "country_id" => 225,
                    "name" => "Bolu"
                ],
                [
                    "id" => 2173,
                    "country_id" => 225,
                    "name" => "Çorum"
                ],
                [
                    "id" => 2174,
                    "country_id" => 225,
                    "name" => "Ordu"
                ],
                [
                    "id" => 2175,
                    "country_id" => 225,
                    "name" => "Balıkesir"
                ],
                [
                    "id" => 2176,
                    "country_id" => 225,
                    "name" => "Kırklareli"
                ],
                [
                    "id" => 2177,
                    "country_id" => 225,
                    "name" => "Bayburt"
                ],
                [
                    "id" => 2178,
                    "country_id" => 225,
                    "name" => "Kırıkkale"
                ],
                [
                    "id" => 2179,
                    "country_id" => 225,
                    "name" => "Afyonkarahisar"
                ],
                [
                    "id" => 2180,
                    "country_id" => 225,
                    "name" => "Kırşehir"
                ],
                [
                    "id" => 2181,
                    "country_id" => 225,
                    "name" => "Sivas"
                ],
                [
                    "id" => 2182,
                    "country_id" => 225,
                    "name" => "Muğla"
                ],
                [
                    "id" => 2183,
                    "country_id" => 225,
                    "name" => "Şanlıurfa"
                ],
                [
                    "id" => 2184,
                    "country_id" => 225,
                    "name" => "Karaman"
                ],
                [
                    "id" => 2185,
                    "country_id" => 225,
                    "name" => "Ardahan"
                ],
                [
                    "id" => 2186,
                    "country_id" => 225,
                    "name" => "Giresun"
                ],
                [
                    "id" => 2187,
                    "country_id" => 225,
                    "name" => "Aydın"
                ],
                [
                    "id" => 2188,
                    "country_id" => 225,
                    "name" => "Yozgat"
                ],
                [
                    "id" => 2189,
                    "country_id" => 225,
                    "name" => "Niğde"
                ],
                [
                    "id" => 2190,
                    "country_id" => 225,
                    "name" => "Hakkâri"
                ],
                [
                    "id" => 2191,
                    "country_id" => 225,
                    "name" => "Artvin"
                ],
                [
                    "id" => 2192,
                    "country_id" => 225,
                    "name" => "Tunceli"
                ],
                [
                    "id" => 2193,
                    "country_id" => 225,
                    "name" => "Ağrı"
                ],
                [
                    "id" => 2194,
                    "country_id" => 225,
                    "name" => "Batman"
                ],
                [
                    "id" => 2195,
                    "country_id" => 225,
                    "name" => "Kocaeli"
                ],
                [
                    "id" => 2196,
                    "country_id" => 225,
                    "name" => "Nevşehir"
                ],
                [
                    "id" => 2197,
                    "country_id" => 225,
                    "name" => "Kastamonu"
                ],
                [
                    "id" => 2198,
                    "country_id" => 225,
                    "name" => "Manisa"
                ],
                [
                    "id" => 2199,
                    "country_id" => 225,
                    "name" => "Tokat"
                ],
                [
                    "id" => 2200,
                    "country_id" => 225,
                    "name" => "Kayseri"
                ],
                [
                    "id" => 2201,
                    "country_id" => 225,
                    "name" => "Uşak"
                ],
                [
                    "id" => 2202,
                    "country_id" => 225,
                    "name" => "Düzce"
                ],
                [
                    "id" => 2203,
                    "country_id" => 225,
                    "name" => "Gaziantep"
                ],
                [
                    "id" => 2204,
                    "country_id" => 225,
                    "name" => "Gümüşhane"
                ],
                [
                    "id" => 2205,
                    "country_id" => 225,
                    "name" => "İzmir"
                ],
                [
                    "id" => 2206,
                    "country_id" => 225,
                    "name" => "Trabzon"
                ],
                [
                    "id" => 2207,
                    "country_id" => 225,
                    "name" => "Siirt"
                ],
                [
                    "id" => 2208,
                    "country_id" => 225,
                    "name" => "Kars"
                ],
                [
                    "id" => 2209,
                    "country_id" => 225,
                    "name" => "Burdur"
                ],
                [
                    "id" => 2210,
                    "country_id" => 225,
                    "name" => "Aksaray"
                ],
                [
                    "id" => 2211,
                    "country_id" => 225,
                    "name" => "Hatay"
                ],
                [
                    "id" => 2212,
                    "country_id" => 225,
                    "name" => "Adana"
                ],
                [
                    "id" => 2213,
                    "country_id" => 225,
                    "name" => "Zonguldak"
                ],
                [
                    "id" => 2214,
                    "country_id" => 225,
                    "name" => "Osmaniye"
                ],
                [
                    "id" => 2215,
                    "country_id" => 225,
                    "name" => "Bitlis"
                ],
                [
                    "id" => 2216,
                    "country_id" => 225,
                    "name" => "Çanakkale"
                ],
                [
                    "id" => 2217,
                    "country_id" => 225,
                    "name" => "Ankara"
                ],
                [
                    "id" => 2218,
                    "country_id" => 225,
                    "name" => "Yalova"
                ],
                [
                    "id" => 2219,
                    "country_id" => 225,
                    "name" => "Rize"
                ],
                [
                    "id" => 2220,
                    "country_id" => 225,
                    "name" => "Samsun"
                ],
                [
                    "id" => 2221,
                    "country_id" => 225,
                    "name" => "Bilecik"
                ],
                [
                    "id" => 2222,
                    "country_id" => 225,
                    "name" => "Isparta"
                ],
                [
                    "id" => 2223,
                    "country_id" => 225,
                    "name" => "Karabük"
                ],
                [
                    "id" => 2224,
                    "country_id" => 225,
                    "name" => "Mardin"
                ],
                [
                    "id" => 2225,
                    "country_id" => 225,
                    "name" => "Şırnak"
                ],
                [
                    "id" => 2226,
                    "country_id" => 225,
                    "name" => "Diyarbakır"
                ],
                [
                    "id" => 2227,
                    "country_id" => 225,
                    "name" => "Kahramanmaraş"
                ],
                [
                    "id" => 2228,
                    "country_id" => 177,
                    "name" => "Lisbon"
                ],
                [
                    "id" => 2229,
                    "country_id" => 177,
                    "name" => "Bragança"
                ],
                [
                    "id" => 2230,
                    "country_id" => 177,
                    "name" => "Beja"
                ],
                [
                    "id" => 2231,
                    "country_id" => 177,
                    "name" => "Madeira"
                ],
                [
                    "id" => 2232,
                    "country_id" => 177,
                    "name" => "Portalegre"
                ],
                [
                    "id" => 2233,
                    "country_id" => 177,
                    "name" => "Açores"
                ],
                [
                    "id" => 2234,
                    "country_id" => 177,
                    "name" => "Vila Real"
                ],
                [
                    "id" => 2235,
                    "country_id" => 177,
                    "name" => "Aveiro"
                ],
                [
                    "id" => 2236,
                    "country_id" => 177,
                    "name" => "Évora"
                ],
                [
                    "id" => 2237,
                    "country_id" => 177,
                    "name" => "Viseu"
                ],
                [
                    "id" => 2238,
                    "country_id" => 177,
                    "name" => "Santarém"
                ],
                [
                    "id" => 2239,
                    "country_id" => 177,
                    "name" => "Faro"
                ],
                [
                    "id" => 2240,
                    "country_id" => 177,
                    "name" => "Leiria"
                ],
                [
                    "id" => 2241,
                    "country_id" => 177,
                    "name" => "Castelo Branco"
                ],
                [
                    "id" => 2242,
                    "country_id" => 177,
                    "name" => "Setúbal"
                ],
                [
                    "id" => 2243,
                    "country_id" => 177,
                    "name" => "Porto"
                ],
                [
                    "id" => 2244,
                    "country_id" => 177,
                    "name" => "Braga"
                ],
                [
                    "id" => 2245,
                    "country_id" => 177,
                    "name" => "Viana do Castelo"
                ],
                [
                    "id" => 2246,
                    "country_id" => 177,
                    "name" => "Coimbra"
                ],
                [
                    "id" => 2247,
                    "country_id" => 45,
                    "name" => "Zhejiang"
                ],
                [
                    "id" => 2248,
                    "country_id" => 45,
                    "name" => "Fujian"
                ],
                [
                    "id" => 2249,
                    "country_id" => 45,
                    "name" => "Shanghai"
                ],
                [
                    "id" => 2250,
                    "country_id" => 45,
                    "name" => "Jiangsu"
                ],
                [
                    "id" => 2251,
                    "country_id" => 45,
                    "name" => "Anhui"
                ],
                [
                    "id" => 2252,
                    "country_id" => 45,
                    "name" => "Shandong"
                ],
                [
                    "id" => 2253,
                    "country_id" => 45,
                    "name" => "Jilin"
                ],
                [
                    "id" => 2254,
                    "country_id" => 45,
                    "name" => "Shanxi"
                ],
                [
                    "id" => 2255,
                    "country_id" => 45,
                    "name" => "Taiwan"
                ],
                [
                    "id" => 2256,
                    "country_id" => 45,
                    "name" => "Jiangxi"
                ],
                [
                    "id" => 2257,
                    "country_id" => 45,
                    "name" => "Beijing"
                ],
                [
                    "id" => 2258,
                    "country_id" => 45,
                    "name" => "Hunan"
                ],
                [
                    "id" => 2259,
                    "country_id" => 45,
                    "name" => "Henan"
                ],
                [
                    "id" => 2260,
                    "country_id" => 45,
                    "name" => "Yunnan"
                ],
                [
                    "id" => 2261,
                    "country_id" => 45,
                    "name" => "Guizhou"
                ],
                [
                    "id" => 2262,
                    "country_id" => 45,
                    "name" => "Ningxia Huizu"
                ],
                [
                    "id" => 2263,
                    "country_id" => 45,
                    "name" => "Xinjiang"
                ],
                [
                    "id" => 2264,
                    "country_id" => 45,
                    "name" => "Xizang"
                ],
                [
                    "id" => 2265,
                    "country_id" => 45,
                    "name" => "Heilongjiang"
                ],
                [
                    "id" => 2266,
                    "country_id" => 45,
                    "name" => "Macau SAR"
                ],
                [
                    "id" => 2267,
                    "country_id" => 45,
                    "name" => "Hong Kong SAR"
                ],
                [
                    "id" => 2268,
                    "country_id" => 45,
                    "name" => "Liaoning"
                ],
                [
                    "id" => 2269,
                    "country_id" => 45,
                    "name" => "Inner Mongolia"
                ],
                [
                    "id" => 2270,
                    "country_id" => 45,
                    "name" => "Qinghai"
                ],
                [
                    "id" => 2271,
                    "country_id" => 45,
                    "name" => "Chongqing"
                ],
                [
                    "id" => 2272,
                    "country_id" => 45,
                    "name" => "Shaanxi"
                ],
                [
                    "id" => 2273,
                    "country_id" => 45,
                    "name" => "Hainan"
                ],
                [
                    "id" => 2274,
                    "country_id" => 45,
                    "name" => "Hubei"
                ],
                [
                    "id" => 2275,
                    "country_id" => 45,
                    "name" => "Gansu"
                ],
                [
                    "id" => 2276,
                    "country_id" => 45,
                    "name" => "Tianjin"
                ],
                [
                    "id" => 2277,
                    "country_id" => 45,
                    "name" => "Sichuan"
                ],
                [
                    "id" => 2278,
                    "country_id" => 45,
                    "name" => "Guangxi Zhuang"
                ],
                [
                    "id" => 2279,
                    "country_id" => 45,
                    "name" => "Guangdong"
                ],
                [
                    "id" => 2280,
                    "country_id" => 45,
                    "name" => "Hebei"
                ],
                [
                    "id" => 2281,
                    "country_id" => 121,
                    "name" => "South"
                ],
                [
                    "id" => 2282,
                    "country_id" => 121,
                    "name" => "Mount Lebanon"
                ],
                [
                    "id" => 2283,
                    "country_id" => 121,
                    "name" => "Baalbek-Hermel"
                ],
                [
                    "id" => 2284,
                    "country_id" => 121,
                    "name" => "North"
                ],
                [
                    "id" => 2285,
                    "country_id" => 121,
                    "name" => "Akkar"
                ],
                [
                    "id" => 2286,
                    "country_id" => 121,
                    "name" => "Beirut"
                ],
                [
                    "id" => 2287,
                    "country_id" => 121,
                    "name" => "Beqaa"
                ],
                [
                    "id" => 2288,
                    "country_id" => 121,
                    "name" => "Nabatieh"
                ],
                [
                    "id" => 2289,
                    "country_id" => 232,
                    "name" => "Isle of Wight"
                ],
                [
                    "id" => 2290,
                    "country_id" => 232,
                    "name" => "St Helens"
                ],
                [
                    "id" => 2291,
                    "country_id" => 232,
                    "name" => "London Borough of Brent"
                ],
                [
                    "id" => 2292,
                    "country_id" => 232,
                    "name" => "Walsall"
                ],
                [
                    "id" => 2293,
                    "country_id" => 232,
                    "name" => "Trafford"
                ],
                [
                    "id" => 2294,
                    "country_id" => 232,
                    "name" => "City of Southampton"
                ],
                [
                    "id" => 2295,
                    "country_id" => 232,
                    "name" => "Sheffield"
                ],
                [
                    "id" => 2296,
                    "country_id" => 232,
                    "name" => "West Sussex"
                ],
                [
                    "id" => 2297,
                    "country_id" => 232,
                    "name" => "City of Peterborough"
                ],
                [
                    "id" => 2298,
                    "country_id" => 232,
                    "name" => "Caerphilly County Borough"
                ],
                [
                    "id" => 2299,
                    "country_id" => 232,
                    "name" => "Vale of Glamorgan"
                ],
                [
                    "id" => 2300,
                    "country_id" => 232,
                    "name" => "Shetland Islands"
                ],
                [
                    "id" => 2301,
                    "country_id" => 232,
                    "name" => "Rhondda Cynon Taf"
                ],
                [
                    "id" => 2302,
                    "country_id" => 232,
                    "name" => "Poole"
                ],
                [
                    "id" => 2303,
                    "country_id" => 232,
                    "name" => "Central Bedfordshire"
                ],
                [
                    "id" => 2304,
                    "country_id" => 232,
                    "name" => "Down District Council"
                ],
                [
                    "id" => 2305,
                    "country_id" => 232,
                    "name" => "City of Portsmouth"
                ],
                [
                    "id" => 2306,
                    "country_id" => 232,
                    "name" => "London Borough of Haringey"
                ],
                [
                    "id" => 2307,
                    "country_id" => 232,
                    "name" => "London Borough of Bexley"
                ],
                [
                    "id" => 2308,
                    "country_id" => 232,
                    "name" => "Rotherham"
                ],
                [
                    "id" => 2309,
                    "country_id" => 232,
                    "name" => "Hartlepool"
                ],
                [
                    "id" => 2310,
                    "country_id" => 232,
                    "name" => "Telford and Wrekin"
                ],
                [
                    "id" => 2311,
                    "country_id" => 232,
                    "name" => "Belfast district"
                ],
                [
                    "id" => 2312,
                    "country_id" => 232,
                    "name" => "Cornwall"
                ],
                [
                    "id" => 2313,
                    "country_id" => 232,
                    "name" => "London Borough of Sutton"
                ],
                [
                    "id" => 2314,
                    "country_id" => 232,
                    "name" => "Omagh District Council"
                ],
                [
                    "id" => 2315,
                    "country_id" => 232,
                    "name" => "Banbridge"
                ],
                [
                    "id" => 2316,
                    "country_id" => 232,
                    "name" => "Causeway Coast and Glens"
                ],
                [
                    "id" => 2317,
                    "country_id" => 232,
                    "name" => "Newtownabbey Borough Council"
                ],
                [
                    "id" => 2318,
                    "country_id" => 232,
                    "name" => "City of Leicester"
                ],
                [
                    "id" => 2319,
                    "country_id" => 232,
                    "name" => "London Borough of Islington"
                ],
                [
                    "id" => 2320,
                    "country_id" => 232,
                    "name" => "Metropolitan Borough of Wigan"
                ],
                [
                    "id" => 2321,
                    "country_id" => 232,
                    "name" => "Oxfordshire"
                ],
                [
                    "id" => 2322,
                    "country_id" => 232,
                    "name" => "Magherafelt District Council"
                ],
                [
                    "id" => 2323,
                    "country_id" => 232,
                    "name" => "Southend-on-Sea"
                ],
                [
                    "id" => 2324,
                    "country_id" => 232,
                    "name" => "Armagh, Banbridge and Craigavon"
                ],
                [
                    "id" => 2325,
                    "country_id" => 232,
                    "name" => "Perth and Kinross"
                ],
                [
                    "id" => 2326,
                    "country_id" => 232,
                    "name" => "London Borough of Waltham Forest"
                ],
                [
                    "id" => 2327,
                    "country_id" => 232,
                    "name" => "Rochdale"
                ],
                [
                    "id" => 2328,
                    "country_id" => 232,
                    "name" => "Merthyr Tydfil County Borough"
                ],
                [
                    "id" => 2329,
                    "country_id" => 232,
                    "name" => "Blackburn with Darwen"
                ],
                [
                    "id" => 2330,
                    "country_id" => 232,
                    "name" => "Knowsley"
                ],
                [
                    "id" => 2331,
                    "country_id" => 232,
                    "name" => "Armagh City and District Council"
                ],
                [
                    "id" => 2332,
                    "country_id" => 232,
                    "name" => "Middlesbrough"
                ],
                [
                    "id" => 2333,
                    "country_id" => 232,
                    "name" => "East Renfrewshire"
                ],
                [
                    "id" => 2334,
                    "country_id" => 232,
                    "name" => "Cumbria"
                ],
                [
                    "id" => 2335,
                    "country_id" => 232,
                    "name" => "Scotland"
                ],
                [
                    "id" => 2336,
                    "country_id" => 232,
                    "name" => "England"
                ],
                [
                    "id" => 2337,
                    "country_id" => 232,
                    "name" => "Northern Ireland"
                ],
                [
                    "id" => 2338,
                    "country_id" => 232,
                    "name" => "Wales"
                ],
                [
                    "id" => 2339,
                    "country_id" => 232,
                    "name" => "Bath and North East Somerset"
                ],
                [
                    "id" => 2340,
                    "country_id" => 232,
                    "name" => "Liverpool"
                ],
                [
                    "id" => 2341,
                    "country_id" => 232,
                    "name" => "Sandwell"
                ],
                [
                    "id" => 2342,
                    "country_id" => 232,
                    "name" => "Bournemouth"
                ],
                [
                    "id" => 2343,
                    "country_id" => 232,
                    "name" => "Isles of Scilly"
                ],
                [
                    "id" => 2344,
                    "country_id" => 232,
                    "name" => "Falkirk"
                ],
                [
                    "id" => 2345,
                    "country_id" => 232,
                    "name" => "Dorset"
                ],
                [
                    "id" => 2346,
                    "country_id" => 232,
                    "name" => "Scottish Borders"
                ],
                [
                    "id" => 2347,
                    "country_id" => 232,
                    "name" => "London Borough of Havering"
                ],
                [
                    "id" => 2348,
                    "country_id" => 232,
                    "name" => "Moyle District Council"
                ],
                [
                    "id" => 2349,
                    "country_id" => 232,
                    "name" => "London Borough of Camden"
                ],
                [
                    "id" => 2350,
                    "country_id" => 232,
                    "name" => "Newry and Mourne District Council"
                ],
                [
                    "id" => 2351,
                    "country_id" => 232,
                    "name" => "Neath Port Talbot County Borough"
                ],
                [
                    "id" => 2352,
                    "country_id" => 232,
                    "name" => "Conwy County Borough"
                ],
                [
                    "id" => 2353,
                    "country_id" => 232,
                    "name" => "Outer Hebrides"
                ],
                [
                    "id" => 2354,
                    "country_id" => 232,
                    "name" => "West Lothian"
                ],
                [
                    "id" => 2355,
                    "country_id" => 232,
                    "name" => "Lincolnshire"
                ],
                [
                    "id" => 2356,
                    "country_id" => 232,
                    "name" => "London Borough of Barking and Dagenham"
                ],
                [
                    "id" => 2357,
                    "country_id" => 232,
                    "name" => "City of Westminster"
                ],
                [
                    "id" => 2358,
                    "country_id" => 232,
                    "name" => "London Borough of Lewisham"
                ],
                [
                    "id" => 2359,
                    "country_id" => 232,
                    "name" => "City of Nottingham"
                ],
                [
                    "id" => 2360,
                    "country_id" => 232,
                    "name" => "Moray"
                ],
                [
                    "id" => 2361,
                    "country_id" => 232,
                    "name" => "Ballymoney"
                ],
                [
                    "id" => 2362,
                    "country_id" => 232,
                    "name" => "South Lanarkshire"
                ],
                [
                    "id" => 2363,
                    "country_id" => 232,
                    "name" => "Ballymena Borough"
                ],
                [
                    "id" => 2364,
                    "country_id" => 232,
                    "name" => "Doncaster"
                ],
                [
                    "id" => 2365,
                    "country_id" => 232,
                    "name" => "Northumberland"
                ],
                [
                    "id" => 2366,
                    "country_id" => 232,
                    "name" => "Fermanagh and Omagh"
                ],
                [
                    "id" => 2367,
                    "country_id" => 232,
                    "name" => "Tameside"
                ],
                [
                    "id" => 2368,
                    "country_id" => 232,
                    "name" => "Royal Borough of Kensington and Chelsea"
                ],
                [
                    "id" => 2369,
                    "country_id" => 232,
                    "name" => "Hertfordshire"
                ],
                [
                    "id" => 2370,
                    "country_id" => 232,
                    "name" => "East Riding of Yorkshire"
                ],
                [
                    "id" => 2371,
                    "country_id" => 232,
                    "name" => "Kirklees"
                ],
                [
                    "id" => 2372,
                    "country_id" => 232,
                    "name" => "City of Sunderland"
                ],
                [
                    "id" => 2373,
                    "country_id" => 232,
                    "name" => "Gloucestershire"
                ],
                [
                    "id" => 2374,
                    "country_id" => 232,
                    "name" => "East Ayrshire"
                ],
                [
                    "id" => 2375,
                    "country_id" => 232,
                    "name" => "United Kingdom"
                ],
                [
                    "id" => 2376,
                    "country_id" => 232,
                    "name" => "London Borough of Hillingdon"
                ],
                [
                    "id" => 2377,
                    "country_id" => 232,
                    "name" => "South Ayrshire"
                ],
                [
                    "id" => 2378,
                    "country_id" => 232,
                    "name" => "Ascension Island"
                ],
                [
                    "id" => 2379,
                    "country_id" => 232,
                    "name" => "Gwynedd"
                ],
                [
                    "id" => 2380,
                    "country_id" => 232,
                    "name" => "London Borough of Hounslow"
                ],
                [
                    "id" => 2381,
                    "country_id" => 232,
                    "name" => "Medway"
                ],
                [
                    "id" => 2382,
                    "country_id" => 232,
                    "name" => "Limavady Borough Council"
                ],
                [
                    "id" => 2383,
                    "country_id" => 232,
                    "name" => "Highland"
                ],
                [
                    "id" => 2384,
                    "country_id" => 232,
                    "name" => "North East Lincolnshire"
                ],
                [
                    "id" => 2385,
                    "country_id" => 232,
                    "name" => "London Borough of Harrow"
                ],
                [
                    "id" => 2386,
                    "country_id" => 232,
                    "name" => "Somerset"
                ],
                [
                    "id" => 2387,
                    "country_id" => 232,
                    "name" => "Angus"
                ],
                [
                    "id" => 2388,
                    "country_id" => 232,
                    "name" => "Inverclyde"
                ],
                [
                    "id" => 2389,
                    "country_id" => 232,
                    "name" => "Darlington"
                ],
                [
                    "id" => 2390,
                    "country_id" => 232,
                    "name" => "London Borough of Tower Hamlets"
                ],
                [
                    "id" => 2391,
                    "country_id" => 232,
                    "name" => "Wiltshire"
                ],
                [
                    "id" => 2392,
                    "country_id" => 232,
                    "name" => "Argyll and Bute"
                ],
                [
                    "id" => 2393,
                    "country_id" => 232,
                    "name" => "Strabane District Council"
                ],
                [
                    "id" => 2394,
                    "country_id" => 232,
                    "name" => "Stockport"
                ],
                [
                    "id" => 2395,
                    "country_id" => 232,
                    "name" => "Brighton and Hove"
                ],
                [
                    "id" => 2396,
                    "country_id" => 232,
                    "name" => "London Borough of Lambeth"
                ],
                [
                    "id" => 2397,
                    "country_id" => 232,
                    "name" => "London Borough of Redbridge"
                ],
                [
                    "id" => 2398,
                    "country_id" => 232,
                    "name" => "Manchester"
                ],
                [
                    "id" => 2399,
                    "country_id" => 232,
                    "name" => "Mid Ulster"
                ],
                [
                    "id" => 2400,
                    "country_id" => 232,
                    "name" => "South Gloucestershire"
                ],
                [
                    "id" => 2401,
                    "country_id" => 232,
                    "name" => "Aberdeenshire"
                ],
                [
                    "id" => 2402,
                    "country_id" => 232,
                    "name" => "Monmouthshire"
                ],
                [
                    "id" => 2403,
                    "country_id" => 232,
                    "name" => "Derbyshire"
                ],
                [
                    "id" => 2404,
                    "country_id" => 232,
                    "name" => "Glasgow"
                ],
                [
                    "id" => 2405,
                    "country_id" => 232,
                    "name" => "Buckinghamshire"
                ],
                [
                    "id" => 2406,
                    "country_id" => 232,
                    "name" => "County Durham"
                ],
                [
                    "id" => 2407,
                    "country_id" => 232,
                    "name" => "Shropshire"
                ],
                [
                    "id" => 2408,
                    "country_id" => 232,
                    "name" => "Wirral"
                ],
                [
                    "id" => 2409,
                    "country_id" => 232,
                    "name" => "South Tyneside"
                ],
                [
                    "id" => 2410,
                    "country_id" => 232,
                    "name" => "Essex"
                ],
                [
                    "id" => 2411,
                    "country_id" => 232,
                    "name" => "London Borough of Hackney"
                ],
                [
                    "id" => 2412,
                    "country_id" => 232,
                    "name" => "Antrim and Newtownabbey"
                ],
                [
                    "id" => 2413,
                    "country_id" => 232,
                    "name" => "City of Bristol"
                ],
                [
                    "id" => 2414,
                    "country_id" => 232,
                    "name" => "East Sussex"
                ],
                [
                    "id" => 2415,
                    "country_id" => 232,
                    "name" => "Dumfries and Galloway"
                ],
                [
                    "id" => 2416,
                    "country_id" => 232,
                    "name" => "Milton Keynes"
                ],
                [
                    "id" => 2417,
                    "country_id" => 232,
                    "name" => "Derry City Council"
                ],
                [
                    "id" => 2418,
                    "country_id" => 232,
                    "name" => "London Borough of Newham"
                ],
                [
                    "id" => 2419,
                    "country_id" => 232,
                    "name" => "Wokingham"
                ],
                [
                    "id" => 2420,
                    "country_id" => 232,
                    "name" => "Warrington"
                ],
                [
                    "id" => 2421,
                    "country_id" => 232,
                    "name" => "Stockton-on-Tees"
                ],
                [
                    "id" => 2422,
                    "country_id" => 232,
                    "name" => "Swindon"
                ],
                [
                    "id" => 2423,
                    "country_id" => 232,
                    "name" => "Cambridgeshire"
                ],
                [
                    "id" => 2424,
                    "country_id" => 232,
                    "name" => "City of London"
                ],
                [
                    "id" => 2425,
                    "country_id" => 232,
                    "name" => "Birmingham"
                ],
                [
                    "id" => 2426,
                    "country_id" => 232,
                    "name" => "City of York"
                ],
                [
                    "id" => 2427,
                    "country_id" => 232,
                    "name" => "Slough"
                ],
                [
                    "id" => 2428,
                    "country_id" => 232,
                    "name" => "Edinburgh"
                ],
                [
                    "id" => 2429,
                    "country_id" => 232,
                    "name" => "Mid and East Antrim"
                ],
                [
                    "id" => 2430,
                    "country_id" => 232,
                    "name" => "North Somerset"
                ],
                [
                    "id" => 2431,
                    "country_id" => 232,
                    "name" => "Gateshead"
                ],
                [
                    "id" => 2432,
                    "country_id" => 232,
                    "name" => "London Borough of Southwark"
                ],
                [
                    "id" => 2433,
                    "country_id" => 232,
                    "name" => "City and County of Swansea"
                ],
                [
                    "id" => 2434,
                    "country_id" => 232,
                    "name" => "London Borough of Wandsworth"
                ],
                [
                    "id" => 2435,
                    "country_id" => 232,
                    "name" => "Hampshire"
                ],
                [
                    "id" => 2436,
                    "country_id" => 232,
                    "name" => "Wrexham County Borough"
                ],
                [
                    "id" => 2437,
                    "country_id" => 232,
                    "name" => "Flintshire"
                ],
                [
                    "id" => 2438,
                    "country_id" => 232,
                    "name" => "Coventry"
                ],
                [
                    "id" => 2439,
                    "country_id" => 232,
                    "name" => "Carrickfergus Borough Council"
                ],
                [
                    "id" => 2440,
                    "country_id" => 232,
                    "name" => "West Dunbartonshire"
                ],
                [
                    "id" => 2441,
                    "country_id" => 232,
                    "name" => "Powys"
                ],
                [
                    "id" => 2442,
                    "country_id" => 232,
                    "name" => "Cheshire West and Chester"
                ],
                [
                    "id" => 2443,
                    "country_id" => 232,
                    "name" => "Renfrewshire"
                ],
                [
                    "id" => 2444,
                    "country_id" => 232,
                    "name" => "Cheshire East"
                ],
                [
                    "id" => 2445,
                    "country_id" => 232,
                    "name" => "Cookstown District Council"
                ],
                [
                    "id" => 2446,
                    "country_id" => 232,
                    "name" => "Derry City and Strabane"
                ],
                [
                    "id" => 2447,
                    "country_id" => 232,
                    "name" => "Staffordshire"
                ],
                [
                    "id" => 2448,
                    "country_id" => 232,
                    "name" => "London Borough of Hammersmith and Fulham"
                ],
                [
                    "id" => 2449,
                    "country_id" => 232,
                    "name" => "Craigavon Borough Council"
                ],
                [
                    "id" => 2450,
                    "country_id" => 232,
                    "name" => "Clackmannanshire"
                ],
                [
                    "id" => 2451,
                    "country_id" => 232,
                    "name" => "Blackpool"
                ],
                [
                    "id" => 2452,
                    "country_id" => 232,
                    "name" => "Bridgend County Borough"
                ],
                [
                    "id" => 2453,
                    "country_id" => 232,
                    "name" => "North Lincolnshire"
                ],
                [
                    "id" => 2454,
                    "country_id" => 232,
                    "name" => "East Dunbartonshire"
                ],
                [
                    "id" => 2455,
                    "country_id" => 232,
                    "name" => "Reading"
                ],
                [
                    "id" => 2456,
                    "country_id" => 232,
                    "name" => "Nottinghamshire"
                ],
                [
                    "id" => 2457,
                    "country_id" => 232,
                    "name" => "Dudley"
                ],
                [
                    "id" => 2458,
                    "country_id" => 232,
                    "name" => "Newcastle upon Tyne"
                ],
                [
                    "id" => 2459,
                    "country_id" => 232,
                    "name" => "Bury"
                ],
                [
                    "id" => 2460,
                    "country_id" => 232,
                    "name" => "Lisburn and Castlereagh"
                ],
                [
                    "id" => 2461,
                    "country_id" => 232,
                    "name" => "Coleraine Borough Council"
                ],
                [
                    "id" => 2462,
                    "country_id" => 232,
                    "name" => "East Lothian"
                ],
                [
                    "id" => 2463,
                    "country_id" => 232,
                    "name" => "Aberdeen"
                ],
                [
                    "id" => 2464,
                    "country_id" => 232,
                    "name" => "Kent"
                ],
                [
                    "id" => 2465,
                    "country_id" => 232,
                    "name" => "Wakefield"
                ],
                [
                    "id" => 2466,
                    "country_id" => 232,
                    "name" => "Halton"
                ],
                [
                    "id" => 2467,
                    "country_id" => 232,
                    "name" => "Suffolk"
                ],
                [
                    "id" => 2468,
                    "country_id" => 232,
                    "name" => "Thurrock"
                ],
                [
                    "id" => 2469,
                    "country_id" => 232,
                    "name" => "Solihull"
                ],
                [
                    "id" => 2470,
                    "country_id" => 232,
                    "name" => "Bracknell Forest"
                ],
                [
                    "id" => 2471,
                    "country_id" => 232,
                    "name" => "West Berkshire"
                ],
                [
                    "id" => 2472,
                    "country_id" => 232,
                    "name" => "Rutland"
                ],
                [
                    "id" => 2473,
                    "country_id" => 232,
                    "name" => "Norfolk"
                ],
                [
                    "id" => 2474,
                    "country_id" => 232,
                    "name" => "Orkney Islands"
                ],
                [
                    "id" => 2475,
                    "country_id" => 232,
                    "name" => "City of Kingston upon Hull"
                ],
                [
                    "id" => 2476,
                    "country_id" => 232,
                    "name" => "London Borough of Enfield"
                ],
                [
                    "id" => 2477,
                    "country_id" => 232,
                    "name" => "Oldham"
                ],
                [
                    "id" => 2478,
                    "country_id" => 232,
                    "name" => "Torbay"
                ],
                [
                    "id" => 2479,
                    "country_id" => 232,
                    "name" => "Fife"
                ],
                [
                    "id" => 2480,
                    "country_id" => 232,
                    "name" => "Northamptonshire"
                ],
                [
                    "id" => 2481,
                    "country_id" => 232,
                    "name" => "Royal Borough of Kingston upon Thames"
                ],
                [
                    "id" => 2482,
                    "country_id" => 232,
                    "name" => "Windsor and Maidenhead"
                ],
                [
                    "id" => 2483,
                    "country_id" => 232,
                    "name" => "London Borough of Merton"
                ],
                [
                    "id" => 2484,
                    "country_id" => 232,
                    "name" => "Carmarthenshire"
                ],
                [
                    "id" => 2485,
                    "country_id" => 232,
                    "name" => "City of Derby"
                ],
                [
                    "id" => 2486,
                    "country_id" => 232,
                    "name" => "Pembrokeshire"
                ],
                [
                    "id" => 2487,
                    "country_id" => 232,
                    "name" => "North Lanarkshire"
                ],
                [
                    "id" => 2488,
                    "country_id" => 232,
                    "name" => "Stirling"
                ],
                [
                    "id" => 2489,
                    "country_id" => 232,
                    "name" => "City of Wolverhampton"
                ],
                [
                    "id" => 2490,
                    "country_id" => 232,
                    "name" => "London Borough of Bromley"
                ],
                [
                    "id" => 2491,
                    "country_id" => 232,
                    "name" => "Devon"
                ],
                [
                    "id" => 2492,
                    "country_id" => 232,
                    "name" => "Royal Borough of Greenwich"
                ],
                [
                    "id" => 2493,
                    "country_id" => 232,
                    "name" => "Salford"
                ],
                [
                    "id" => 2494,
                    "country_id" => 232,
                    "name" => "Lisburn City Council"
                ],
                [
                    "id" => 2495,
                    "country_id" => 232,
                    "name" => "Lancashire"
                ],
                [
                    "id" => 2496,
                    "country_id" => 232,
                    "name" => "Torfaen"
                ],
                [
                    "id" => 2497,
                    "country_id" => 232,
                    "name" => "Denbighshire"
                ],
                [
                    "id" => 2498,
                    "country_id" => 232,
                    "name" => "Ards"
                ],
                [
                    "id" => 2499,
                    "country_id" => 232,
                    "name" => "Barnsley"
                ],
                [
                    "id" => 2500,
                    "country_id" => 232,
                    "name" => "Herefordshire"
                ],
                [
                    "id" => 2501,
                    "country_id" => 232,
                    "name" => "London Borough of Richmond upon Thames"
                ],
                [
                    "id" => 2502,
                    "country_id" => 232,
                    "name" => "Saint Helena"
                ],
                [
                    "id" => 2503,
                    "country_id" => 232,
                    "name" => "Leeds"
                ],
                [
                    "id" => 2504,
                    "country_id" => 232,
                    "name" => "Bolton"
                ],
                [
                    "id" => 2505,
                    "country_id" => 232,
                    "name" => "Warwickshire"
                ],
                [
                    "id" => 2506,
                    "country_id" => 232,
                    "name" => "City of Stoke-on-Trent"
                ],
                [
                    "id" => 2507,
                    "country_id" => 232,
                    "name" => "Bedford"
                ],
                [
                    "id" => 2508,
                    "country_id" => 232,
                    "name" => "Dungannon and South Tyrone Borough Council"
                ],
                [
                    "id" => 2509,
                    "country_id" => 232,
                    "name" => "Ceredigion"
                ],
                [
                    "id" => 2510,
                    "country_id" => 232,
                    "name" => "Worcestershire"
                ],
                [
                    "id" => 2511,
                    "country_id" => 232,
                    "name" => "Dundee"
                ],
                [
                    "id" => 2512,
                    "country_id" => 232,
                    "name" => "London Borough of Croydon"
                ],
                [
                    "id" => 2513,
                    "country_id" => 232,
                    "name" => "North Down Borough Council"
                ],
                [
                    "id" => 2514,
                    "country_id" => 232,
                    "name" => "City of Plymouth"
                ],
                [
                    "id" => 2515,
                    "country_id" => 232,
                    "name" => "Larne Borough Council"
                ],
                [
                    "id" => 2516,
                    "country_id" => 232,
                    "name" => "Leicestershire"
                ],
                [
                    "id" => 2517,
                    "country_id" => 232,
                    "name" => "Calderdale"
                ],
                [
                    "id" => 2518,
                    "country_id" => 232,
                    "name" => "Sefton"
                ],
                [
                    "id" => 2519,
                    "country_id" => 232,
                    "name" => "Midlothian"
                ],
                [
                    "id" => 2520,
                    "country_id" => 232,
                    "name" => "London Borough of Barnet"
                ],
                [
                    "id" => 2521,
                    "country_id" => 232,
                    "name" => "North Tyneside"
                ],
                [
                    "id" => 2522,
                    "country_id" => 232,
                    "name" => "North Yorkshire"
                ],
                [
                    "id" => 2523,
                    "country_id" => 232,
                    "name" => "Ards and North Down"
                ],
                [
                    "id" => 2524,
                    "country_id" => 232,
                    "name" => "Newport"
                ],
                [
                    "id" => 2525,
                    "country_id" => 232,
                    "name" => "Castlereagh"
                ],
                [
                    "id" => 2526,
                    "country_id" => 232,
                    "name" => "Surrey"
                ],
                [
                    "id" => 2527,
                    "country_id" => 232,
                    "name" => "Redcar and Cleveland"
                ],
                [
                    "id" => 2528,
                    "country_id" => 232,
                    "name" => "City and County of Cardiff"
                ],
                [
                    "id" => 2529,
                    "country_id" => 232,
                    "name" => "Bradford"
                ],
                [
                    "id" => 2530,
                    "country_id" => 232,
                    "name" => "Blaenau Gwent County Borough"
                ],
                [
                    "id" => 2531,
                    "country_id" => 232,
                    "name" => "Fermanagh District Council"
                ],
                [
                    "id" => 2532,
                    "country_id" => 232,
                    "name" => "London Borough of Ealing"
                ],
                [
                    "id" => 2533,
                    "country_id" => 232,
                    "name" => "Antrim"
                ],
                [
                    "id" => 2534,
                    "country_id" => 232,
                    "name" => "Newry, Mourne and Down"
                ],
                [
                    "id" => 2535,
                    "country_id" => 232,
                    "name" => "North Ayrshire"
                ],
                [
                    "id" => 2536,
                    "country_id" => 236,
                    "name" => "Tashkent"
                ],
                [
                    "id" => 2537,
                    "country_id" => 236,
                    "name" => "Namangan Region"
                ],
                [
                    "id" => 2538,
                    "country_id" => 236,
                    "name" => "Fergana Region"
                ],
                [
                    "id" => 2539,
                    "country_id" => 236,
                    "name" => "Xorazm Region"
                ],
                [
                    "id" => 2540,
                    "country_id" => 236,
                    "name" => "Andijan Region"
                ],
                [
                    "id" => 2541,
                    "country_id" => 236,
                    "name" => "Bukhara Region"
                ],
                [
                    "id" => 2542,
                    "country_id" => 236,
                    "name" => "Navoiy Region"
                ],
                [
                    "id" => 2543,
                    "country_id" => 236,
                    "name" => "Qashqadaryo Region"
                ],
                [
                    "id" => 2544,
                    "country_id" => 236,
                    "name" => "Samarqand Region"
                ],
                [
                    "id" => 2545,
                    "country_id" => 236,
                    "name" => "Jizzakh Region"
                ],
                [
                    "id" => 2546,
                    "country_id" => 236,
                    "name" => "Surxondaryo Region"
                ],
                [
                    "id" => 2547,
                    "country_id" => 236,
                    "name" => "Sirdaryo Region"
                ],
                [
                    "id" => 2548,
                    "country_id" => 236,
                    "name" => "Karakalpakstan"
                ],
                [
                    "id" => 2549,
                    "country_id" => 236,
                    "name" => "Tashkent Region"
                ],
                [
                    "id" => 2550,
                    "country_id" => 224,
                    "name" => "Ariana"
                ],
                [
                    "id" => 2551,
                    "country_id" => 224,
                    "name" => "Bizerte"
                ],
                [
                    "id" => 2552,
                    "country_id" => 224,
                    "name" => "Jendouba"
                ],
                [
                    "id" => 2553,
                    "country_id" => 224,
                    "name" => "Monastir"
                ],
                [
                    "id" => 2554,
                    "country_id" => 224,
                    "name" => "Tunis"
                ],
                [
                    "id" => 2555,
                    "country_id" => 224,
                    "name" => "Manouba"
                ],
                [
                    "id" => 2556,
                    "country_id" => 224,
                    "name" => "Gafsa"
                ],
                [
                    "id" => 2557,
                    "country_id" => 224,
                    "name" => "Sfax"
                ],
                [
                    "id" => 2558,
                    "country_id" => 224,
                    "name" => "Gabès"
                ],
                [
                    "id" => 2559,
                    "country_id" => 224,
                    "name" => "Tataouine"
                ],
                [
                    "id" => 2560,
                    "country_id" => 224,
                    "name" => "Medenine"
                ],
                [
                    "id" => 2561,
                    "country_id" => 224,
                    "name" => "Kef"
                ],
                [
                    "id" => 2562,
                    "country_id" => 224,
                    "name" => "Kebili"
                ],
                [
                    "id" => 2563,
                    "country_id" => 224,
                    "name" => "Siliana"
                ],
                [
                    "id" => 2564,
                    "country_id" => 224,
                    "name" => "Kairouan"
                ],
                [
                    "id" => 2565,
                    "country_id" => 224,
                    "name" => "Zaghouan"
                ],
                [
                    "id" => 2566,
                    "country_id" => 224,
                    "name" => "Ben Arous"
                ],
                [
                    "id" => 2567,
                    "country_id" => 224,
                    "name" => "Sidi Bouzid"
                ],
                [
                    "id" => 2568,
                    "country_id" => 224,
                    "name" => "Mahdia"
                ],
                [
                    "id" => 2569,
                    "country_id" => 224,
                    "name" => "Tozeur"
                ],
                [
                    "id" => 2570,
                    "country_id" => 224,
                    "name" => "Kasserine"
                ],
                [
                    "id" => 2571,
                    "country_id" => 224,
                    "name" => "Sousse"
                ],
                [
                    "id" => 2572,
                    "country_id" => 224,
                    "name" => "Béja"
                ],
                [
                    "id" => 2573,
                    "country_id" => 137,
                    "name" => "Ratak Chain"
                ],
                [
                    "id" => 2574,
                    "country_id" => 137,
                    "name" => "Ralik Chain"
                ],
                [
                    "id" => 2575,
                    "country_id" => 220,
                    "name" => "Centrale Region"
                ],
                [
                    "id" => 2576,
                    "country_id" => 220,
                    "name" => "Maritime"
                ],
                [
                    "id" => 2577,
                    "country_id" => 220,
                    "name" => "Plateaux Region"
                ],
                [
                    "id" => 2578,
                    "country_id" => 220,
                    "name" => "Savanes Region"
                ],
                [
                    "id" => 2579,
                    "country_id" => 220,
                    "name" => "Kara Region"
                ],
                [
                    "id" => 2580,
                    "country_id" => 143,
                    "name" => "Chuuk State"
                ],
                [
                    "id" => 2581,
                    "country_id" => 143,
                    "name" => "Pohnpei State"
                ],
                [
                    "id" => 2582,
                    "country_id" => 143,
                    "name" => "Yap State"
                ],
                [
                    "id" => 2583,
                    "country_id" => 143,
                    "name" => "Kosrae State"
                ],
                [
                    "id" => 2584,
                    "country_id" => 133,
                    "name" => "Vaavu Atoll"
                ],
                [
                    "id" => 2585,
                    "country_id" => 133,
                    "name" => "Shaviyani Atoll"
                ],
                [
                    "id" => 2586,
                    "country_id" => 133,
                    "name" => "Haa Alif Atoll"
                ],
                [
                    "id" => 2587,
                    "country_id" => 133,
                    "name" => "Alif Alif Atoll"
                ],
                [
                    "id" => 2588,
                    "country_id" => 133,
                    "name" => "North Province"
                ],
                [
                    "id" => 2589,
                    "country_id" => 133,
                    "name" => "North Central Province"
                ],
                [
                    "id" => 2590,
                    "country_id" => 133,
                    "name" => "Dhaalu Atoll"
                ],
                [
                    "id" => 2591,
                    "country_id" => 133,
                    "name" => "Thaa Atoll"
                ],
                [
                    "id" => 2592,
                    "country_id" => 133,
                    "name" => "Noonu Atoll"
                ],
                [
                    "id" => 2593,
                    "country_id" => 133,
                    "name" => "Upper South Province"
                ],
                [
                    "id" => 2594,
                    "country_id" => 133,
                    "name" => "Addu Atoll"
                ],
                [
                    "id" => 2595,
                    "country_id" => 133,
                    "name" => "Gnaviyani Atoll"
                ],
                [
                    "id" => 2596,
                    "country_id" => 133,
                    "name" => "Kaafu Atoll"
                ],
                [
                    "id" => 2597,
                    "country_id" => 133,
                    "name" => "Haa Dhaalu Atoll"
                ],
                [
                    "id" => 2598,
                    "country_id" => 133,
                    "name" => "Gaafu Alif Atoll"
                ],
                [
                    "id" => 2599,
                    "country_id" => 133,
                    "name" => "Faafu Atoll"
                ],
                [
                    "id" => 2600,
                    "country_id" => 133,
                    "name" => "Alif Dhaal Atoll"
                ],
                [
                    "id" => 2601,
                    "country_id" => 133,
                    "name" => "Laamu Atoll"
                ],
                [
                    "id" => 2602,
                    "country_id" => 133,
                    "name" => "Raa Atoll"
                ],
                [
                    "id" => 2603,
                    "country_id" => 133,
                    "name" => "Gaafu Dhaalu Atoll"
                ],
                [
                    "id" => 2604,
                    "country_id" => 133,
                    "name" => "Central Province"
                ],
                [
                    "id" => 2605,
                    "country_id" => 133,
                    "name" => "South Province"
                ],
                [
                    "id" => 2606,
                    "country_id" => 133,
                    "name" => "South Central Province"
                ],
                [
                    "id" => 2607,
                    "country_id" => 133,
                    "name" => "Lhaviyani Atoll"
                ],
                [
                    "id" => 2608,
                    "country_id" => 133,
                    "name" => "Meemu Atoll"
                ],
                [
                    "id" => 2609,
                    "country_id" => 133,
                    "name" => "Malé"
                ],
                [
                    "id" => 2610,
                    "country_id" => 156,
                    "name" => "Utrecht"
                ],
                [
                    "id" => 2611,
                    "country_id" => 156,
                    "name" => "Gelderland"
                ],
                [
                    "id" => 2612,
                    "country_id" => 156,
                    "name" => "North Holland"
                ],
                [
                    "id" => 2613,
                    "country_id" => 156,
                    "name" => "Drenthe"
                ],
                [
                    "id" => 2614,
                    "country_id" => 156,
                    "name" => "South Holland"
                ],
                [
                    "id" => 2615,
                    "country_id" => 156,
                    "name" => "Limburg"
                ],
                [
                    "id" => 2616,
                    "country_id" => 156,
                    "name" => "Sint Eustatius"
                ],
                [
                    "id" => 2617,
                    "country_id" => 156,
                    "name" => "Groningen"
                ],
                [
                    "id" => 2618,
                    "country_id" => 156,
                    "name" => "Overijssel"
                ],
                [
                    "id" => 2619,
                    "country_id" => 156,
                    "name" => "Flevoland"
                ],
                [
                    "id" => 2620,
                    "country_id" => 156,
                    "name" => "Zeeland"
                ],
                [
                    "id" => 2621,
                    "country_id" => 156,
                    "name" => "Saba"
                ],
                [
                    "id" => 2622,
                    "country_id" => 156,
                    "name" => "Friesland"
                ],
                [
                    "id" => 2623,
                    "country_id" => 156,
                    "name" => "North Brabant"
                ],
                [
                    "id" => 2624,
                    "country_id" => 156,
                    "name" => "Bonaire"
                ],
                [
                    "id" => 2625,
                    "country_id" => 54,
                    "name" => "Savanes Region"
                ],
                [
                    "id" => 2626,
                    "country_id" => 54,
                    "name" => "Agnéby"
                ],
                [
                    "id" => 2627,
                    "country_id" => 54,
                    "name" => "Lagunes District"
                ],
                [
                    "id" => 2628,
                    "country_id" => 54,
                    "name" => "Sud-Bandama"
                ],
                [
                    "id" => 2629,
                    "country_id" => 54,
                    "name" => "Montagnes District"
                ],
                [
                    "id" => 2630,
                    "country_id" => 54,
                    "name" => "Moyen-Comoé"
                ],
                [
                    "id" => 2631,
                    "country_id" => 54,
                    "name" => "Marahoué Region"
                ],
                [
                    "id" => 2632,
                    "country_id" => 54,
                    "name" => "Lacs District"
                ],
                [
                    "id" => 2633,
                    "country_id" => 54,
                    "name" => "Fromager"
                ],
                [
                    "id" => 2634,
                    "country_id" => 54,
                    "name" => "Abidjan"
                ],
                [
                    "id" => 2635,
                    "country_id" => 54,
                    "name" => "Bas-Sassandra Region"
                ],
                [
                    "id" => 2636,
                    "country_id" => 54,
                    "name" => "Bafing Region"
                ],
                [
                    "id" => 2637,
                    "country_id" => 54,
                    "name" => "Vallée du Bandama District"
                ],
                [
                    "id" => 2638,
                    "country_id" => 54,
                    "name" => "Haut-Sassandra"
                ],
                [
                    "id" => 2639,
                    "country_id" => 54,
                    "name" => "Lagunes region"
                ],
                [
                    "id" => 2640,
                    "country_id" => 54,
                    "name" => "Lacs Region"
                ],
                [
                    "id" => 2641,
                    "country_id" => 54,
                    "name" => "Zanzan Region"
                ],
                [
                    "id" => 2642,
                    "country_id" => 54,
                    "name" => "Denguélé Region"
                ],
                [
                    "id" => 2643,
                    "country_id" => 54,
                    "name" => "Bas-Sassandra District"
                ],
                [
                    "id" => 2644,
                    "country_id" => 54,
                    "name" => "Denguélé District"
                ],
                [
                    "id" => 2645,
                    "country_id" => 54,
                    "name" => "Dix-Huit Montagnes"
                ],
                [
                    "id" => 2646,
                    "country_id" => 54,
                    "name" => "Moyen-Cavally"
                ],
                [
                    "id" => 2647,
                    "country_id" => 54,
                    "name" => "Vallée du Bandama Region"
                ],
                [
                    "id" => 2648,
                    "country_id" => 54,
                    "name" => "Sassandra-Marahoué District"
                ],
                [
                    "id" => 2649,
                    "country_id" => 54,
                    "name" => "Worodougou"
                ],
                [
                    "id" => 2650,
                    "country_id" => 54,
                    "name" => "Woroba District"
                ],
                [
                    "id" => 2651,
                    "country_id" => 54,
                    "name" => "Gôh-Djiboua District"
                ],
                [
                    "id" => 2652,
                    "country_id" => 54,
                    "name" => "Sud-Comoé"
                ],
                [
                    "id" => 2653,
                    "country_id" => 54,
                    "name" => "Yamoussoukro"
                ],
                [
                    "id" => 2654,
                    "country_id" => 54,
                    "name" => "Comoé District"
                ],
                [
                    "id" => 2655,
                    "country_id" => 54,
                    "name" => "N'zi-Comoé"
                ],
                [
                    "id" => 2656,
                    "country_id" => 38,
                    "name" => "Far North"
                ],
                [
                    "id" => 2657,
                    "country_id" => 38,
                    "name" => "Northwest"
                ],
                [
                    "id" => 2658,
                    "country_id" => 38,
                    "name" => "Southwest"
                ],
                [
                    "id" => 2659,
                    "country_id" => 38,
                    "name" => "South"
                ],
                [
                    "id" => 2660,
                    "country_id" => 38,
                    "name" => "Centre"
                ],
                [
                    "id" => 2661,
                    "country_id" => 38,
                    "name" => "East"
                ],
                [
                    "id" => 2662,
                    "country_id" => 38,
                    "name" => "Littoral"
                ],
                [
                    "id" => 2663,
                    "country_id" => 38,
                    "name" => "Adamawa"
                ],
                [
                    "id" => 2664,
                    "country_id" => 38,
                    "name" => "West"
                ],
                [
                    "id" => 2665,
                    "country_id" => 38,
                    "name" => "North"
                ],
                [
                    "id" => 2666,
                    "country_id" => 80,
                    "name" => "Banjul"
                ],
                [
                    "id" => 2667,
                    "country_id" => 80,
                    "name" => "West Coast Division"
                ],
                [
                    "id" => 2668,
                    "country_id" => 80,
                    "name" => "Upper River Division"
                ],
                [
                    "id" => 2669,
                    "country_id" => 80,
                    "name" => "Central River Division"
                ],
                [
                    "id" => 2670,
                    "country_id" => 80,
                    "name" => "Lower River Division"
                ],
                [
                    "id" => 2671,
                    "country_id" => 80,
                    "name" => "North Bank Division"
                ],
                [
                    "id" => 2672,
                    "country_id" => 92,
                    "name" => "Beyla Prefecture"
                ],
                [
                    "id" => 2673,
                    "country_id" => 92,
                    "name" => "Mandiana Prefecture"
                ],
                [
                    "id" => 2674,
                    "country_id" => 92,
                    "name" => "Yomou Prefecture"
                ],
                [
                    "id" => 2675,
                    "country_id" => 92,
                    "name" => "Fria Prefecture"
                ],
                [
                    "id" => 2676,
                    "country_id" => 92,
                    "name" => "Boké Region"
                ],
                [
                    "id" => 2677,
                    "country_id" => 92,
                    "name" => "Labé Region"
                ],
                [
                    "id" => 2678,
                    "country_id" => 92,
                    "name" => "Nzérékoré Prefecture"
                ],
                [
                    "id" => 2679,
                    "country_id" => 92,
                    "name" => "Dabola Prefecture"
                ],
                [
                    "id" => 2680,
                    "country_id" => 92,
                    "name" => "Labé Prefecture"
                ],
                [
                    "id" => 2681,
                    "country_id" => 92,
                    "name" => "Dubréka Prefecture"
                ],
                [
                    "id" => 2682,
                    "country_id" => 92,
                    "name" => "Faranah Prefecture"
                ],
                [
                    "id" => 2683,
                    "country_id" => 92,
                    "name" => "Forécariah Prefecture"
                ],
                [
                    "id" => 2684,
                    "country_id" => 92,
                    "name" => "Nzérékoré Region"
                ],
                [
                    "id" => 2685,
                    "country_id" => 92,
                    "name" => "Gaoual Prefecture"
                ],
                [
                    "id" => 2686,
                    "country_id" => 92,
                    "name" => "Conakry"
                ],
                [
                    "id" => 2687,
                    "country_id" => 92,
                    "name" => "Télimélé Prefecture"
                ],
                [
                    "id" => 2688,
                    "country_id" => 92,
                    "name" => "Dinguiraye Prefecture"
                ],
                [
                    "id" => 2689,
                    "country_id" => 92,
                    "name" => "Mamou Prefecture"
                ],
                [
                    "id" => 2690,
                    "country_id" => 92,
                    "name" => "Lélouma Prefecture"
                ],
                [
                    "id" => 2691,
                    "country_id" => 92,
                    "name" => "Kissidougou Prefecture"
                ],
                [
                    "id" => 2692,
                    "country_id" => 92,
                    "name" => "Koubia Prefecture"
                ],
                [
                    "id" => 2693,
                    "country_id" => 92,
                    "name" => "Kindia Prefecture"
                ],
                [
                    "id" => 2694,
                    "country_id" => 92,
                    "name" => "Pita Prefecture"
                ],
                [
                    "id" => 2695,
                    "country_id" => 92,
                    "name" => "Kouroussa Prefecture"
                ],
                [
                    "id" => 2696,
                    "country_id" => 92,
                    "name" => "Tougué Prefecture"
                ],
                [
                    "id" => 2697,
                    "country_id" => 92,
                    "name" => "Kankan Region"
                ],
                [
                    "id" => 2698,
                    "country_id" => 92,
                    "name" => "Mamou Region"
                ],
                [
                    "id" => 2699,
                    "country_id" => 92,
                    "name" => "Boffa Prefecture"
                ],
                [
                    "id" => 2700,
                    "country_id" => 92,
                    "name" => "Mali Prefecture"
                ],
                [
                    "id" => 2701,
                    "country_id" => 92,
                    "name" => "Kindia Region"
                ],
                [
                    "id" => 2702,
                    "country_id" => 92,
                    "name" => "Macenta Prefecture"
                ],
                [
                    "id" => 2703,
                    "country_id" => 92,
                    "name" => "Koundara Prefecture"
                ],
                [
                    "id" => 2704,
                    "country_id" => 92,
                    "name" => "Kankan Prefecture"
                ],
                [
                    "id" => 2705,
                    "country_id" => 92,
                    "name" => "Coyah Prefecture"
                ],
                [
                    "id" => 2706,
                    "country_id" => 92,
                    "name" => "Dalaba Prefecture"
                ],
                [
                    "id" => 2707,
                    "country_id" => 92,
                    "name" => "Siguiri Prefecture"
                ],
                [
                    "id" => 2708,
                    "country_id" => 92,
                    "name" => "Lola Prefecture"
                ],
                [
                    "id" => 2709,
                    "country_id" => 92,
                    "name" => "Boké Prefecture"
                ],
                [
                    "id" => 2710,
                    "country_id" => 92,
                    "name" => "Kérouané Prefecture"
                ],
                [
                    "id" => 2711,
                    "country_id" => 92,
                    "name" => "Guéckédou Prefecture"
                ],
                [
                    "id" => 2712,
                    "country_id" => 93,
                    "name" => "Tombali Region"
                ],
                [
                    "id" => 2713,
                    "country_id" => 93,
                    "name" => "Cacheu Region"
                ],
                [
                    "id" => 2714,
                    "country_id" => 93,
                    "name" => "Biombo Region"
                ],
                [
                    "id" => 2715,
                    "country_id" => 93,
                    "name" => "Quinara Region"
                ],
                [
                    "id" => 2716,
                    "country_id" => 93,
                    "name" => "Sul Province"
                ],
                [
                    "id" => 2717,
                    "country_id" => 93,
                    "name" => "Norte Province"
                ],
                [
                    "id" => 2718,
                    "country_id" => 93,
                    "name" => "Oio Region"
                ],
                [
                    "id" => 2719,
                    "country_id" => 93,
                    "name" => "Gabú Region"
                ],
                [
                    "id" => 2720,
                    "country_id" => 93,
                    "name" => "Bafatá"
                ],
                [
                    "id" => 2721,
                    "country_id" => 93,
                    "name" => "Leste Province"
                ],
                [
                    "id" => 2722,
                    "country_id" => 93,
                    "name" => "Bolama Region"
                ],
                [
                    "id" => 2723,
                    "country_id" => 79,
                    "name" => "Woleu-Ntem Province"
                ],
                [
                    "id" => 2724,
                    "country_id" => 79,
                    "name" => "Ogooué-Ivindo Province"
                ],
                [
                    "id" => 2725,
                    "country_id" => 79,
                    "name" => "Nyanga Province"
                ],
                [
                    "id" => 2726,
                    "country_id" => 79,
                    "name" => "Haut-Ogooué Province"
                ],
                [
                    "id" => 2727,
                    "country_id" => 79,
                    "name" => "Estuaire Province"
                ],
                [
                    "id" => 2728,
                    "country_id" => 79,
                    "name" => "Ogooué-Maritime Province"
                ],
                [
                    "id" => 2729,
                    "country_id" => 79,
                    "name" => "Ogooué-Lolo Province"
                ],
                [
                    "id" => 2730,
                    "country_id" => 79,
                    "name" => "Moyen-Ogooué Province"
                ],
                [
                    "id" => 2731,
                    "country_id" => 79,
                    "name" => "Ngounié Province"
                ],
                [
                    "id" => 2732,
                    "country_id" => 51,
                    "name" => "Tshuapa"
                ],
                [
                    "id" => 2733,
                    "country_id" => 51,
                    "name" => "Tanganyika"
                ],
                [
                    "id" => 2734,
                    "country_id" => 51,
                    "name" => "Haut-Uélé"
                ],
                [
                    "id" => 2735,
                    "country_id" => 51,
                    "name" => "Kasaï Oriental"
                ],
                [
                    "id" => 2738,
                    "country_id" => 51,
                    "name" => "Sud-Kivu"
                ],
                [
                    "id" => 2739,
                    "country_id" => 51,
                    "name" => "Nord-Ubangi"
                ],
                [
                    "id" => 2740,
                    "country_id" => 51,
                    "name" => "Kwango"
                ],
                [
                    "id" => 2741,
                    "country_id" => 51,
                    "name" => "Kinshasa"
                ],
                [
                    "id" => 2742,
                    "country_id" => 51,
                    "name" => "Kasaï Central"
                ],
                [
                    "id" => 2743,
                    "country_id" => 51,
                    "name" => "Sankuru"
                ],
                [
                    "id" => 2744,
                    "country_id" => 51,
                    "name" => "Équateur"
                ],
                [
                    "id" => 2745,
                    "country_id" => 51,
                    "name" => "Maniema"
                ],
                [
                    "id" => 2746,
                    "country_id" => 51,
                    "name" => "Kongo Central"
                ],
                [
                    "id" => 2747,
                    "country_id" => 51,
                    "name" => "Lomami"
                ],
                [
                    "id" => 2748,
                    "country_id" => 51,
                    "name" => "Sud-Ubangi"
                ],
                [
                    "id" => 2749,
                    "country_id" => 51,
                    "name" => "Nord-Kivu"
                ],
                [
                    "id" => 2750,
                    "country_id" => 51,
                    "name" => "Haut-Katanga"
                ],
                [
                    "id" => 2751,
                    "country_id" => 51,
                    "name" => "Ituri"
                ],
                [
                    "id" => 2752,
                    "country_id" => 51,
                    "name" => "Mongala"
                ],
                [
                    "id" => 2753,
                    "country_id" => 51,
                    "name" => "Bas-Uélé"
                ],
                [
                    "id" => 2755,
                    "country_id" => 51,
                    "name" => "Mai-Ndombe"
                ],
                [
                    "id" => 2756,
                    "country_id" => 51,
                    "name" => "Tshopo"
                ],
                [
                    "id" => 2757,
                    "country_id" => 51,
                    "name" => "Kasaï"
                ],
                [
                    "id" => 2758,
                    "country_id" => 51,
                    "name" => "Haut-Lomami"
                ],
                [
                    "id" => 2759,
                    "country_id" => 51,
                    "name" => "Kwilu"
                ],
                [
                    "id" => 2760,
                    "country_id" => 94,
                    "name" => "Cuyuni-Mazaruni"
                ],
                [
                    "id" => 2761,
                    "country_id" => 94,
                    "name" => "Potaro-Siparuni"
                ],
                [
                    "id" => 2762,
                    "country_id" => 94,
                    "name" => "Mahaica-Berbice"
                ],
                [
                    "id" => 2763,
                    "country_id" => 94,
                    "name" => "Upper Demerara-Berbice"
                ],
                [
                    "id" => 2764,
                    "country_id" => 94,
                    "name" => "Barima-Waini"
                ],
                [
                    "id" => 2765,
                    "country_id" => 94,
                    "name" => "Pomeroon-Supenaam"
                ],
                [
                    "id" => 2766,
                    "country_id" => 94,
                    "name" => "East Berbice-Corentyne"
                ],
                [
                    "id" => 2767,
                    "country_id" => 94,
                    "name" => "Demerara-Mahaica"
                ],
                [
                    "id" => 2768,
                    "country_id" => 94,
                    "name" => "Essequibo Islands-West Demerara"
                ],
                [
                    "id" => 2769,
                    "country_id" => 94,
                    "name" => "Upper Takutu-Upper Essequibo"
                ],
                [
                    "id" => 2770,
                    "country_id" => 172,
                    "name" => "Presidente Hayes Department"
                ],
                [
                    "id" => 2771,
                    "country_id" => 172,
                    "name" => "Canindeyú"
                ],
                [
                    "id" => 2772,
                    "country_id" => 172,
                    "name" => "Guairá Department"
                ],
                [
                    "id" => 2773,
                    "country_id" => 172,
                    "name" => "Caaguazú"
                ],
                [
                    "id" => 2774,
                    "country_id" => 172,
                    "name" => "Paraguarí Department"
                ],
                [
                    "id" => 2775,
                    "country_id" => 172,
                    "name" => "Caazapá"
                ],
                [
                    "id" => 2776,
                    "country_id" => 172,
                    "name" => "San Pedro Department"
                ],
                [
                    "id" => 2777,
                    "country_id" => 172,
                    "name" => "Central Department"
                ],
                [
                    "id" => 2778,
                    "country_id" => 172,
                    "name" => "Itapúa"
                ],
                [
                    "id" => 2779,
                    "country_id" => 172,
                    "name" => "Concepción Department"
                ],
                [
                    "id" => 2780,
                    "country_id" => 172,
                    "name" => "Boquerón Department"
                ],
                [
                    "id" => 2781,
                    "country_id" => 172,
                    "name" => "Ñeembucú Department"
                ],
                [
                    "id" => 2782,
                    "country_id" => 172,
                    "name" => "Amambay Department"
                ],
                [
                    "id" => 2783,
                    "country_id" => 172,
                    "name" => "Cordillera Department"
                ],
                [
                    "id" => 2784,
                    "country_id" => 172,
                    "name" => "Alto Paraná Department"
                ],
                [
                    "id" => 2785,
                    "country_id" => 172,
                    "name" => "Alto Paraguay Department"
                ],
                [
                    "id" => 2786,
                    "country_id" => 172,
                    "name" => "Misiones Department"
                ],
                [
                    "id" => 2787,
                    "country_id" => 208,
                    "name" => "Jaffna District"
                ],
                [
                    "id" => 2788,
                    "country_id" => 208,
                    "name" => "Kandy District"
                ],
                [
                    "id" => 2789,
                    "country_id" => 208,
                    "name" => "Kalutara District"
                ],
                [
                    "id" => 2790,
                    "country_id" => 208,
                    "name" => "Badulla District"
                ],
                [
                    "id" => 2791,
                    "country_id" => 208,
                    "name" => "Hambantota District"
                ],
                [
                    "id" => 2792,
                    "country_id" => 208,
                    "name" => "Galle District"
                ],
                [
                    "id" => 2793,
                    "country_id" => 208,
                    "name" => "Kilinochchi District"
                ],
                [
                    "id" => 2794,
                    "country_id" => 208,
                    "name" => "Nuwara Eliya District"
                ],
                [
                    "id" => 2795,
                    "country_id" => 208,
                    "name" => "Trincomalee District"
                ],
                [
                    "id" => 2796,
                    "country_id" => 208,
                    "name" => "Puttalam District"
                ],
                [
                    "id" => 2797,
                    "country_id" => 208,
                    "name" => "Kegalle District"
                ],
                [
                    "id" => 2798,
                    "country_id" => 208,
                    "name" => "Central Province"
                ],
                [
                    "id" => 2799,
                    "country_id" => 208,
                    "name" => "Ampara District"
                ],
                [
                    "id" => 2800,
                    "country_id" => 208,
                    "name" => "North Central Province"
                ],
                [
                    "id" => 2801,
                    "country_id" => 208,
                    "name" => "Southern Province"
                ],
                [
                    "id" => 2802,
                    "country_id" => 208,
                    "name" => "Western Province"
                ],
                [
                    "id" => 2803,
                    "country_id" => 208,
                    "name" => "Sabaragamuwa Province"
                ],
                [
                    "id" => 2804,
                    "country_id" => 208,
                    "name" => "Gampaha District"
                ],
                [
                    "id" => 2805,
                    "country_id" => 208,
                    "name" => "Mannar District"
                ],
                [
                    "id" => 2806,
                    "country_id" => 208,
                    "name" => "Matara District"
                ],
                [
                    "id" => 2807,
                    "country_id" => 208,
                    "name" => "Ratnapura district"
                ],
                [
                    "id" => 2808,
                    "country_id" => 208,
                    "name" => "Eastern Province"
                ],
                [
                    "id" => 2809,
                    "country_id" => 208,
                    "name" => "Vavuniya District"
                ],
                [
                    "id" => 2810,
                    "country_id" => 208,
                    "name" => "Matale District"
                ],
                [
                    "id" => 2811,
                    "country_id" => 208,
                    "name" => "Uva Province"
                ],
                [
                    "id" => 2812,
                    "country_id" => 208,
                    "name" => "Polonnaruwa District"
                ],
                [
                    "id" => 2813,
                    "country_id" => 208,
                    "name" => "Northern Province"
                ],
                [
                    "id" => 2814,
                    "country_id" => 208,
                    "name" => "Mullaitivu District"
                ],
                [
                    "id" => 2815,
                    "country_id" => 208,
                    "name" => "Colombo District"
                ],
                [
                    "id" => 2816,
                    "country_id" => 208,
                    "name" => "Anuradhapura District"
                ],
                [
                    "id" => 2817,
                    "country_id" => 208,
                    "name" => "North Western Province"
                ],
                [
                    "id" => 2818,
                    "country_id" => 208,
                    "name" => "Batticaloa District"
                ],
                [
                    "id" => 2819,
                    "country_id" => 208,
                    "name" => "Monaragala District"
                ],
                [
                    "id" => 2820,
                    "country_id" => 49,
                    "name" => "Mohéli"
                ],
                [
                    "id" => 2821,
                    "country_id" => 49,
                    "name" => "Anjouan"
                ],
                [
                    "id" => 2822,
                    "country_id" => 49,
                    "name" => "Grande Comore"
                ],
                [
                    "id" => 2823,
                    "country_id" => 44,
                    "name" => "Atacama"
                ],
                [
                    "id" => 2824,
                    "country_id" => 44,
                    "name" => "Región Metropolitana de Santiago"
                ],
                [
                    "id" => 2825,
                    "country_id" => 44,
                    "name" => "Coquimbo"
                ],
                [
                    "id" => 2826,
                    "country_id" => 44,
                    "name" => "La Araucanía"
                ],
                [
                    "id" => 2827,
                    "country_id" => 44,
                    "name" => "Biobío"
                ],
                [
                    "id" => 2828,
                    "country_id" => 44,
                    "name" => "Aisén del General Carlos Ibañez del Campo"
                ],
                [
                    "id" => 2829,
                    "country_id" => 44,
                    "name" => "Arica y Parinacota"
                ],
                [
                    "id" => 2830,
                    "country_id" => 44,
                    "name" => "Valparaíso"
                ],
                [
                    "id" => 2831,
                    "country_id" => 44,
                    "name" => "Ñuble"
                ],
                [
                    "id" => 2832,
                    "country_id" => 44,
                    "name" => "Antofagasta"
                ],
                [
                    "id" => 2833,
                    "country_id" => 44,
                    "name" => "Maule"
                ],
                [
                    "id" => 2834,
                    "country_id" => 44,
                    "name" => "Los Ríos"
                ],
                [
                    "id" => 2835,
                    "country_id" => 44,
                    "name" => "Los Lagos"
                ],
                [
                    "id" => 2836,
                    "country_id" => 44,
                    "name" => "Magallanes y de la Antártica Chilena"
                ],
                [
                    "id" => 2837,
                    "country_id" => 44,
                    "name" => "Tarapacá"
                ],
                [
                    "id" => 2838,
                    "country_id" => 44,
                    "name" => "Libertador General Bernardo O'Higgins"
                ],
                [
                    "id" => 2839,
                    "country_id" => 210,
                    "name" => "Commewijne District"
                ],
                [
                    "id" => 2840,
                    "country_id" => 210,
                    "name" => "Nickerie District"
                ],
                [
                    "id" => 2841,
                    "country_id" => 210,
                    "name" => "Para District"
                ],
                [
                    "id" => 2842,
                    "country_id" => 210,
                    "name" => "Coronie District"
                ],
                [
                    "id" => 2843,
                    "country_id" => 210,
                    "name" => "Paramaribo District"
                ],
                [
                    "id" => 2844,
                    "country_id" => 210,
                    "name" => "Wanica District"
                ],
                [
                    "id" => 2845,
                    "country_id" => 210,
                    "name" => "Marowijne District"
                ],
                [
                    "id" => 2846,
                    "country_id" => 210,
                    "name" => "Brokopondo District"
                ],
                [
                    "id" => 2847,
                    "country_id" => 210,
                    "name" => "Sipaliwini District"
                ],
                [
                    "id" => 2848,
                    "country_id" => 210,
                    "name" => "Saramacca District"
                ],
                [
                    "id" => 2849,
                    "country_id" => 194,
                    "name" => "Riyadh"
                ],
                [
                    "id" => 2850,
                    "country_id" => 194,
                    "name" => "Makkah"
                ],
                [
                    "id" => 2851,
                    "country_id" => 194,
                    "name" => "Al Madinah"
                ],
                [
                    "id" => 2852,
                    "country_id" => 194,
                    "name" => "Tabuk"
                ],
                [
                    "id" => 2853,
                    "country_id" => 194,
                    "name" => "'Asir"
                ],
                [
                    "id" => 2854,
                    "country_id" => 194,
                    "name" => "Northern Borders"
                ],
                [
                    "id" => 2855,
                    "country_id" => 194,
                    "name" => "Ha'il"
                ],
                [
                    "id" => 2856,
                    "country_id" => 194,
                    "name" => "Eastern Province"
                ],
                [
                    "id" => 2857,
                    "country_id" => 194,
                    "name" => "Al Jawf"
                ],
                [
                    "id" => 2858,
                    "country_id" => 194,
                    "name" => "Jizan"
                ],
                [
                    "id" => 2859,
                    "country_id" => 194,
                    "name" => "Al Bahah"
                ],
                [
                    "id" => 2860,
                    "country_id" => 194,
                    "name" => "Najran"
                ],
                [
                    "id" => 2861,
                    "country_id" => 194,
                    "name" => "Al-Qassim"
                ],
                [
                    "id" => 2862,
                    "country_id" => 50,
                    "name" => "Plateaux Department"
                ],
                [
                    "id" => 2863,
                    "country_id" => 50,
                    "name" => "Pointe-Noire"
                ],
                [
                    "id" => 2864,
                    "country_id" => 50,
                    "name" => "Cuvette Department"
                ],
                [
                    "id" => 2865,
                    "country_id" => 50,
                    "name" => "Likouala Department"
                ],
                [
                    "id" => 2866,
                    "country_id" => 50,
                    "name" => "Bouenza Department"
                ],
                [
                    "id" => 2867,
                    "country_id" => 50,
                    "name" => "Kouilou Department"
                ],
                [
                    "id" => 2868,
                    "country_id" => 50,
                    "name" => "Lékoumou Department"
                ],
                [
                    "id" => 2869,
                    "country_id" => 50,
                    "name" => "Cuvette-Ouest Department"
                ],
                [
                    "id" => 2870,
                    "country_id" => 50,
                    "name" => "Brazzaville"
                ],
                [
                    "id" => 2871,
                    "country_id" => 50,
                    "name" => "Sangha Department"
                ],
                [
                    "id" => 2872,
                    "country_id" => 50,
                    "name" => "Niari Department"
                ],
                [
                    "id" => 2873,
                    "country_id" => 50,
                    "name" => "Pool Department"
                ],
                [
                    "id" => 2874,
                    "country_id" => 48,
                    "name" => "Quindío"
                ],
                [
                    "id" => 2875,
                    "country_id" => 48,
                    "name" => "Cundinamarca"
                ],
                [
                    "id" => 2876,
                    "country_id" => 48,
                    "name" => "Chocó"
                ],
                [
                    "id" => 2877,
                    "country_id" => 48,
                    "name" => "Norte de Santander"
                ],
                [
                    "id" => 2878,
                    "country_id" => 48,
                    "name" => "Meta"
                ],
                [
                    "id" => 2879,
                    "country_id" => 48,
                    "name" => "Risaralda"
                ],
                [
                    "id" => 2880,
                    "country_id" => 48,
                    "name" => "Atlántico"
                ],
                [
                    "id" => 2881,
                    "country_id" => 48,
                    "name" => "Arauca"
                ],
                [
                    "id" => 2882,
                    "country_id" => 48,
                    "name" => "Guainía"
                ],
                [
                    "id" => 2883,
                    "country_id" => 48,
                    "name" => "Tolima"
                ],
                [
                    "id" => 2884,
                    "country_id" => 48,
                    "name" => "Cauca"
                ],
                [
                    "id" => 2885,
                    "country_id" => 48,
                    "name" => "Vaupés"
                ],
                [
                    "id" => 2886,
                    "country_id" => 48,
                    "name" => "Magdalena"
                ],
                [
                    "id" => 2887,
                    "country_id" => 48,
                    "name" => "Caldas"
                ],
                [
                    "id" => 2888,
                    "country_id" => 48,
                    "name" => "Guaviare"
                ],
                [
                    "id" => 2889,
                    "country_id" => 48,
                    "name" => "La Guajira"
                ],
                [
                    "id" => 2890,
                    "country_id" => 48,
                    "name" => "Antioquia"
                ],
                [
                    "id" => 2891,
                    "country_id" => 48,
                    "name" => "Caquetá"
                ],
                [
                    "id" => 2892,
                    "country_id" => 48,
                    "name" => "Casanare"
                ],
                [
                    "id" => 2893,
                    "country_id" => 48,
                    "name" => "Bolívar"
                ],
                [
                    "id" => 2894,
                    "country_id" => 48,
                    "name" => "Vichada"
                ],
                [
                    "id" => 2895,
                    "country_id" => 48,
                    "name" => "Amazonas"
                ],
                [
                    "id" => 2896,
                    "country_id" => 48,
                    "name" => "Putumayo"
                ],
                [
                    "id" => 2897,
                    "country_id" => 48,
                    "name" => "Nariño"
                ],
                [
                    "id" => 2898,
                    "country_id" => 48,
                    "name" => "Córdoba"
                ],
                [
                    "id" => 2899,
                    "country_id" => 48,
                    "name" => "Cesar"
                ],
                [
                    "id" => 2900,
                    "country_id" => 48,
                    "name" => "Archipiélago de San Andrés, Providencia y Santa Catalina"
                ],
                [
                    "id" => 2901,
                    "country_id" => 48,
                    "name" => "Santander"
                ],
                [
                    "id" => 2902,
                    "country_id" => 48,
                    "name" => "Sucre"
                ],
                [
                    "id" => 2903,
                    "country_id" => 48,
                    "name" => "Boyacá"
                ],
                [
                    "id" => 2904,
                    "country_id" => 48,
                    "name" => "Valle del Cauca"
                ],
                [
                    "id" => 2905,
                    "country_id" => 64,
                    "name" => "Galápagos"
                ],
                [
                    "id" => 2906,
                    "country_id" => 64,
                    "name" => "Sucumbíos"
                ],
                [
                    "id" => 2907,
                    "country_id" => 64,
                    "name" => "Pastaza"
                ],
                [
                    "id" => 2908,
                    "country_id" => 64,
                    "name" => "Tungurahua"
                ],
                [
                    "id" => 2909,
                    "country_id" => 64,
                    "name" => "Zamora Chinchipe"
                ],
                [
                    "id" => 2910,
                    "country_id" => 64,
                    "name" => "Los Ríos"
                ],
                [
                    "id" => 2911,
                    "country_id" => 64,
                    "name" => "Imbabura"
                ],
                [
                    "id" => 2912,
                    "country_id" => 64,
                    "name" => "Santa Elena"
                ],
                [
                    "id" => 2913,
                    "country_id" => 64,
                    "name" => "Manabí"
                ],
                [
                    "id" => 2914,
                    "country_id" => 64,
                    "name" => "Guayas"
                ],
                [
                    "id" => 2915,
                    "country_id" => 64,
                    "name" => "Carchi"
                ],
                [
                    "id" => 2916,
                    "country_id" => 64,
                    "name" => "Napo"
                ],
                [
                    "id" => 2917,
                    "country_id" => 64,
                    "name" => "Cañar"
                ],
                [
                    "id" => 2918,
                    "country_id" => 64,
                    "name" => "Morona-Santiago"
                ],
                [
                    "id" => 2919,
                    "country_id" => 64,
                    "name" => "Santo Domingo de los Tsáchilas"
                ],
                [
                    "id" => 2920,
                    "country_id" => 64,
                    "name" => "Bolívar"
                ],
                [
                    "id" => 2921,
                    "country_id" => 64,
                    "name" => "Cotopaxi"
                ],
                [
                    "id" => 2922,
                    "country_id" => 64,
                    "name" => "Esmeraldas"
                ],
                [
                    "id" => 2923,
                    "country_id" => 64,
                    "name" => "Azuay"
                ],
                [
                    "id" => 2924,
                    "country_id" => 64,
                    "name" => "El Oro"
                ],
                [
                    "id" => 2925,
                    "country_id" => 64,
                    "name" => "Chimborazo"
                ],
                [
                    "id" => 2926,
                    "country_id" => 64,
                    "name" => "Orellana"
                ],
                [
                    "id" => 2927,
                    "country_id" => 64,
                    "name" => "Pichincha"
                ],
                [
                    "id" => 2928,
                    "country_id" => 60,
                    "name" => "Obock Region"
                ],
                [
                    "id" => 2929,
                    "country_id" => 60,
                    "name" => "Djibouti"
                ],
                [
                    "id" => 2930,
                    "country_id" => 60,
                    "name" => "Dikhil Region"
                ],
                [
                    "id" => 2931,
                    "country_id" => 60,
                    "name" => "Tadjourah Region"
                ],
                [
                    "id" => 2932,
                    "country_id" => 60,
                    "name" => "Arta Region"
                ],
                [
                    "id" => 2933,
                    "country_id" => 60,
                    "name" => "Ali Sabieh Region"
                ],
                [
                    "id" => 2934,
                    "country_id" => 215,
                    "name" => "Hama"
                ],
                [
                    "id" => 2935,
                    "country_id" => 215,
                    "name" => "Rif Dimashq"
                ],
                [
                    "id" => 2936,
                    "country_id" => 215,
                    "name" => "As-Suwayda"
                ],
                [
                    "id" => 2937,
                    "country_id" => 215,
                    "name" => "Deir ez-Zor"
                ],
                [
                    "id" => 2938,
                    "country_id" => 215,
                    "name" => "Latakia"
                ],
                [
                    "id" => 2939,
                    "country_id" => 215,
                    "name" => "Damascus"
                ],
                [
                    "id" => 2940,
                    "country_id" => 215,
                    "name" => "Idlib"
                ],
                [
                    "id" => 2941,
                    "country_id" => 215,
                    "name" => "Al-Hasakah"
                ],
                [
                    "id" => 2942,
                    "country_id" => 215,
                    "name" => "Homs"
                ],
                [
                    "id" => 2943,
                    "country_id" => 215,
                    "name" => "Quneitra"
                ],
                [
                    "id" => 2944,
                    "country_id" => 215,
                    "name" => "Al-Raqqah"
                ],
                [
                    "id" => 2945,
                    "country_id" => 215,
                    "name" => "Daraa"
                ],
                [
                    "id" => 2946,
                    "country_id" => 215,
                    "name" => "Aleppo"
                ],
                [
                    "id" => 2947,
                    "country_id" => 215,
                    "name" => "Tartus"
                ],
                [
                    "id" => 2948,
                    "country_id" => 130,
                    "name" => "Fianarantsoa Province"
                ],
                [
                    "id" => 2949,
                    "country_id" => 130,
                    "name" => "Toliara Province"
                ],
                [
                    "id" => 2950,
                    "country_id" => 130,
                    "name" => "Antsiranana Province"
                ],
                [
                    "id" => 2951,
                    "country_id" => 130,
                    "name" => "Antananarivo Province"
                ],
                [
                    "id" => 2952,
                    "country_id" => 130,
                    "name" => "Toamasina Province"
                ],
                [
                    "id" => 2953,
                    "country_id" => 130,
                    "name" => "Mahajanga Province"
                ],
                [
                    "id" => 2954,
                    "country_id" => 21,
                    "name" => "Mogilev Region"
                ],
                [
                    "id" => 2955,
                    "country_id" => 21,
                    "name" => "Gomel Region"
                ],
                [
                    "id" => 2956,
                    "country_id" => 21,
                    "name" => "Grodno Region"
                ],
                [
                    "id" => 2957,
                    "country_id" => 21,
                    "name" => "Minsk Region"
                ],
                [
                    "id" => 2958,
                    "country_id" => 21,
                    "name" => "Minsk"
                ],
                [
                    "id" => 2959,
                    "country_id" => 21,
                    "name" => "Brest Region"
                ],
                [
                    "id" => 2960,
                    "country_id" => 21,
                    "name" => "Vitebsk Region"
                ],
                [
                    "id" => 2961,
                    "country_id" => 124,
                    "name" => "Murqub"
                ],
                [
                    "id" => 2962,
                    "country_id" => 124,
                    "name" => "Nuqat al Khams"
                ],
                [
                    "id" => 2963,
                    "country_id" => 124,
                    "name" => "Zawiya District"
                ],
                [
                    "id" => 2964,
                    "country_id" => 124,
                    "name" => "Al Wahat District"
                ],
                [
                    "id" => 2965,
                    "country_id" => 124,
                    "name" => "Sabha District"
                ],
                [
                    "id" => 2966,
                    "country_id" => 124,
                    "name" => "Derna District"
                ],
                [
                    "id" => 2967,
                    "country_id" => 124,
                    "name" => "Murzuq District"
                ],
                [
                    "id" => 2968,
                    "country_id" => 124,
                    "name" => "Marj District"
                ],
                [
                    "id" => 2969,
                    "country_id" => 124,
                    "name" => "Ghat District"
                ],
                [
                    "id" => 2970,
                    "country_id" => 124,
                    "name" => "Jufra"
                ],
                [
                    "id" => 2971,
                    "country_id" => 124,
                    "name" => "Tripoli District"
                ],
                [
                    "id" => 2972,
                    "country_id" => 124,
                    "name" => "Kufra District"
                ],
                [
                    "id" => 2973,
                    "country_id" => 124,
                    "name" => "Wadi al Hayaa District"
                ],
                [
                    "id" => 2974,
                    "country_id" => 124,
                    "name" => "Jabal al Gharbi District"
                ],
                [
                    "id" => 2975,
                    "country_id" => 124,
                    "name" => "Wadi al Shatii District"
                ],
                [
                    "id" => 2976,
                    "country_id" => 124,
                    "name" => "Nalut District"
                ],
                [
                    "id" => 2977,
                    "country_id" => 124,
                    "name" => "Sirte District"
                ],
                [
                    "id" => 2978,
                    "country_id" => 124,
                    "name" => "Misrata District"
                ],
                [
                    "id" => 2979,
                    "country_id" => 124,
                    "name" => "Jafara"
                ],
                [
                    "id" => 2980,
                    "country_id" => 124,
                    "name" => "Jabal al Akhdar"
                ],
                [
                    "id" => 2981,
                    "country_id" => 124,
                    "name" => "Benghazi"
                ],
                [
                    "id" => 2982,
                    "country_id" => 40,
                    "name" => "Ribeira Brava Municipality"
                ],
                [
                    "id" => 2983,
                    "country_id" => 40,
                    "name" => "Tarrafal"
                ],
                [
                    "id" => 2984,
                    "country_id" => 40,
                    "name" => "Ribeira Grande de Santiago"
                ],
                [
                    "id" => 2985,
                    "country_id" => 40,
                    "name" => "Santa Catarina"
                ],
                [
                    "id" => 2986,
                    "country_id" => 40,
                    "name" => "São Domingos"
                ],
                [
                    "id" => 2987,
                    "country_id" => 40,
                    "name" => "Mosteiros"
                ],
                [
                    "id" => 2988,
                    "country_id" => 40,
                    "name" => "Praia"
                ],
                [
                    "id" => 2989,
                    "country_id" => 40,
                    "name" => "Porto Novo"
                ],
                [
                    "id" => 2990,
                    "country_id" => 40,
                    "name" => "São Miguel"
                ],
                [
                    "id" => 2991,
                    "country_id" => 40,
                    "name" => "Maio Municipality"
                ],
                [
                    "id" => 2992,
                    "country_id" => 40,
                    "name" => "Sotavento Islands"
                ],
                [
                    "id" => 2993,
                    "country_id" => 40,
                    "name" => "São Lourenço dos Órgãos"
                ],
                [
                    "id" => 2994,
                    "country_id" => 40,
                    "name" => "Barlavento Islands"
                ],
                [
                    "id" => 2995,
                    "country_id" => 40,
                    "name" => "Santa Catarina do Fogo"
                ],
                [
                    "id" => 2996,
                    "country_id" => 40,
                    "name" => "Brava"
                ],
                [
                    "id" => 2997,
                    "country_id" => 40,
                    "name" => "Paul"
                ],
                [
                    "id" => 2998,
                    "country_id" => 40,
                    "name" => "Sal"
                ],
                [
                    "id" => 2999,
                    "country_id" => 40,
                    "name" => "Boa Vista"
                ],
                [
                    "id" => 3000,
                    "country_id" => 40,
                    "name" => "São Filipe"
                ],
                [
                    "id" => 3001,
                    "country_id" => 40,
                    "name" => "São Vicente"
                ],
                [
                    "id" => 3002,
                    "country_id" => 40,
                    "name" => "Ribeira Grande"
                ],
                [
                    "id" => 3003,
                    "country_id" => 40,
                    "name" => "Tarrafal de São Nicolau"
                ],
                [
                    "id" => 3004,
                    "country_id" => 40,
                    "name" => "Santa Cruz"
                ],
                [
                    "id" => 3005,
                    "country_id" => 82,
                    "name" => "Schleswig-Holstein"
                ],
                [
                    "id" => 3006,
                    "country_id" => 82,
                    "name" => "Baden-Württemberg"
                ],
                [
                    "id" => 3007,
                    "country_id" => 82,
                    "name" => "Mecklenburg-Vorpommern"
                ],
                [
                    "id" => 3008,
                    "country_id" => 82,
                    "name" => "Lower Saxony"
                ],
                [
                    "id" => 3009,
                    "country_id" => 82,
                    "name" => "Bavaria"
                ],
                [
                    "id" => 3010,
                    "country_id" => 82,
                    "name" => "Berlin"
                ],
                [
                    "id" => 3011,
                    "country_id" => 82,
                    "name" => "Saxony-Anhalt"
                ],
                [
                    "id" => 3013,
                    "country_id" => 82,
                    "name" => "Brandenburg"
                ],
                [
                    "id" => 3014,
                    "country_id" => 82,
                    "name" => "Bremen"
                ],
                [
                    "id" => 3015,
                    "country_id" => 82,
                    "name" => "Thuringia"
                ],
                [
                    "id" => 3016,
                    "country_id" => 82,
                    "name" => "Hamburg"
                ],
                [
                    "id" => 3017,
                    "country_id" => 82,
                    "name" => "North Rhine-Westphalia"
                ],
                [
                    "id" => 3018,
                    "country_id" => 82,
                    "name" => "Hesse"
                ],
                [
                    "id" => 3019,
                    "country_id" => 82,
                    "name" => "Rhineland-Palatinate"
                ],
                [
                    "id" => 3020,
                    "country_id" => 82,
                    "name" => "Saarland"
                ],
                [
                    "id" => 3021,
                    "country_id" => 82,
                    "name" => "Saxony"
                ],
                [
                    "id" => 3022,
                    "country_id" => 122,
                    "name" => "Mafeteng District"
                ],
                [
                    "id" => 3023,
                    "country_id" => 122,
                    "name" => "Mohale's Hoek District"
                ],
                [
                    "id" => 3024,
                    "country_id" => 122,
                    "name" => "Mokhotlong District"
                ],
                [
                    "id" => 3025,
                    "country_id" => 122,
                    "name" => "Qacha's Nek District"
                ],
                [
                    "id" => 3026,
                    "country_id" => 122,
                    "name" => "Leribe District"
                ],
                [
                    "id" => 3027,
                    "country_id" => 122,
                    "name" => "Quthing District"
                ],
                [
                    "id" => 3028,
                    "country_id" => 122,
                    "name" => "Maseru District"
                ],
                [
                    "id" => 3029,
                    "country_id" => 122,
                    "name" => "Butha-Buthe District"
                ],
                [
                    "id" => 3030,
                    "country_id" => 122,
                    "name" => "Berea District"
                ],
                [
                    "id" => 3031,
                    "country_id" => 122,
                    "name" => "Thaba-Tseka District"
                ],
                [
                    "id" => 3032,
                    "country_id" => 123,
                    "name" => "Montserrado County"
                ],
                [
                    "id" => 3033,
                    "country_id" => 123,
                    "name" => "River Cess County"
                ],
                [
                    "id" => 3034,
                    "country_id" => 123,
                    "name" => "Bong County"
                ],
                [
                    "id" => 3035,
                    "country_id" => 123,
                    "name" => "Sinoe County"
                ],
                [
                    "id" => 3036,
                    "country_id" => 123,
                    "name" => "Grand Cape Mount County"
                ],
                [
                    "id" => 3037,
                    "country_id" => 123,
                    "name" => "Lofa County"
                ],
                [
                    "id" => 3038,
                    "country_id" => 123,
                    "name" => "River Gee County"
                ],
                [
                    "id" => 3039,
                    "country_id" => 123,
                    "name" => "Grand Gedeh County"
                ],
                [
                    "id" => 3040,
                    "country_id" => 123,
                    "name" => "Grand Bassa County"
                ],
                [
                    "id" => 3041,
                    "country_id" => 123,
                    "name" => "Bomi County"
                ],
                [
                    "id" => 3042,
                    "country_id" => 123,
                    "name" => "Maryland County"
                ],
                [
                    "id" => 3043,
                    "country_id" => 123,
                    "name" => "Margibi County"
                ],
                [
                    "id" => 3044,
                    "country_id" => 123,
                    "name" => "Gbarpolu County"
                ],
                [
                    "id" => 3045,
                    "country_id" => 123,
                    "name" => "Grand Kru County"
                ],
                [
                    "id" => 3046,
                    "country_id" => 123,
                    "name" => "Nimba"
                ],
                [
                    "id" => 3047,
                    "country_id" => 166,
                    "name" => "Ad Dhahirah"
                ],
                [
                    "id" => 3048,
                    "country_id" => 166,
                    "name" => "Al Batinah North"
                ],
                [
                    "id" => 3049,
                    "country_id" => 166,
                    "name" => "Al Batinah South"
                ],
                [
                    "id" => 3050,
                    "country_id" => 166,
                    "name" => "Al Batinah Region"
                ],
                [
                    "id" => 3051,
                    "country_id" => 166,
                    "name" => "Ash Sharqiyah Region"
                ],
                [
                    "id" => 3052,
                    "country_id" => 166,
                    "name" => "Musandam"
                ],
                [
                    "id" => 3053,
                    "country_id" => 166,
                    "name" => "Ash Sharqiyah North"
                ],
                [
                    "id" => 3054,
                    "country_id" => 166,
                    "name" => "Ash Sharqiyah South"
                ],
                [
                    "id" => 3055,
                    "country_id" => 166,
                    "name" => "Muscat"
                ],
                [
                    "id" => 3056,
                    "country_id" => 166,
                    "name" => "Al Wusta"
                ],
                [
                    "id" => 3057,
                    "country_id" => 166,
                    "name" => "Dhofar"
                ],
                [
                    "id" => 3058,
                    "country_id" => 166,
                    "name" => "Ad Dakhiliyah"
                ],
                [
                    "id" => 3059,
                    "country_id" => 166,
                    "name" => "Al Buraimi"
                ],
                [
                    "id" => 3060,
                    "country_id" => 29,
                    "name" => "Ngamiland"
                ],
                [
                    "id" => 3061,
                    "country_id" => 29,
                    "name" => "Ghanzi District"
                ],
                [
                    "id" => 3062,
                    "country_id" => 29,
                    "name" => "Kgatleng District"
                ],
                [
                    "id" => 3063,
                    "country_id" => 29,
                    "name" => "Southern District"
                ],
                [
                    "id" => 3064,
                    "country_id" => 29,
                    "name" => "South-East District"
                ],
                [
                    "id" => 3065,
                    "country_id" => 29,
                    "name" => "North-West District"
                ],
                [
                    "id" => 3066,
                    "country_id" => 29,
                    "name" => "Kgalagadi District"
                ],
                [
                    "id" => 3067,
                    "country_id" => 29,
                    "name" => "Central District"
                ],
                [
                    "id" => 3068,
                    "country_id" => 29,
                    "name" => "North-East District"
                ],
                [
                    "id" => 3069,
                    "country_id" => 29,
                    "name" => "Kweneng District"
                ],
                [
                    "id" => 3070,
                    "country_id" => 24,
                    "name" => "Collines Department"
                ],
                [
                    "id" => 3071,
                    "country_id" => 24,
                    "name" => "Kouffo Department"
                ],
                [
                    "id" => 3072,
                    "country_id" => 24,
                    "name" => "Donga Department"
                ],
                [
                    "id" => 3073,
                    "country_id" => 24,
                    "name" => "Zou Department"
                ],
                [
                    "id" => 3074,
                    "country_id" => 24,
                    "name" => "Plateau Department"
                ],
                [
                    "id" => 3075,
                    "country_id" => 24,
                    "name" => "Mono Department"
                ],
                [
                    "id" => 3076,
                    "country_id" => 24,
                    "name" => "Atakora Department"
                ],
                [
                    "id" => 3077,
                    "country_id" => 24,
                    "name" => "Alibori Department"
                ],
                [
                    "id" => 3078,
                    "country_id" => 24,
                    "name" => "Borgou Department"
                ],
                [
                    "id" => 3079,
                    "country_id" => 24,
                    "name" => "Atlantique Department"
                ],
                [
                    "id" => 3080,
                    "country_id" => 24,
                    "name" => "Ouémé Department"
                ],
                [
                    "id" => 3081,
                    "country_id" => 24,
                    "name" => "Littoral Department"
                ],
                [
                    "id" => 3082,
                    "country_id" => 131,
                    "name" => "Machinga District"
                ],
                [
                    "id" => 3083,
                    "country_id" => 131,
                    "name" => "Zomba District"
                ],
                [
                    "id" => 3084,
                    "country_id" => 131,
                    "name" => "Mwanza District"
                ],
                [
                    "id" => 3085,
                    "country_id" => 131,
                    "name" => "Nsanje District"
                ],
                [
                    "id" => 3086,
                    "country_id" => 131,
                    "name" => "Salima District"
                ],
                [
                    "id" => 3087,
                    "country_id" => 131,
                    "name" => "Chitipa district"
                ],
                [
                    "id" => 3088,
                    "country_id" => 131,
                    "name" => "Ntcheu District"
                ],
                [
                    "id" => 3089,
                    "country_id" => 131,
                    "name" => "Rumphi District"
                ],
                [
                    "id" => 3090,
                    "country_id" => 131,
                    "name" => "Dowa District"
                ],
                [
                    "id" => 3091,
                    "country_id" => 131,
                    "name" => "Karonga District"
                ],
                [
                    "id" => 3092,
                    "country_id" => 131,
                    "name" => "Central Region"
                ],
                [
                    "id" => 3093,
                    "country_id" => 131,
                    "name" => "Likoma District"
                ],
                [
                    "id" => 3094,
                    "country_id" => 131,
                    "name" => "Kasungu District"
                ],
                [
                    "id" => 3095,
                    "country_id" => 131,
                    "name" => "Nkhata Bay District"
                ],
                [
                    "id" => 3096,
                    "country_id" => 131,
                    "name" => "Balaka District"
                ],
                [
                    "id" => 3097,
                    "country_id" => 131,
                    "name" => "Dedza District"
                ],
                [
                    "id" => 3098,
                    "country_id" => 131,
                    "name" => "Thyolo District"
                ],
                [
                    "id" => 3099,
                    "country_id" => 131,
                    "name" => "Mchinji District"
                ],
                [
                    "id" => 3100,
                    "country_id" => 131,
                    "name" => "Nkhotakota District"
                ],
                [
                    "id" => 3101,
                    "country_id" => 131,
                    "name" => "Lilongwe District"
                ],
                [
                    "id" => 3102,
                    "country_id" => 131,
                    "name" => "Blantyre District"
                ],
                [
                    "id" => 3103,
                    "country_id" => 131,
                    "name" => "Mulanje District"
                ],
                [
                    "id" => 3104,
                    "country_id" => 131,
                    "name" => "Mzimba District"
                ],
                [
                    "id" => 3105,
                    "country_id" => 131,
                    "name" => "Northern Region"
                ],
                [
                    "id" => 3106,
                    "country_id" => 131,
                    "name" => "Southern Region"
                ],
                [
                    "id" => 3107,
                    "country_id" => 131,
                    "name" => "Chikwawa District"
                ],
                [
                    "id" => 3108,
                    "country_id" => 131,
                    "name" => "Phalombe District"
                ],
                [
                    "id" => 3109,
                    "country_id" => 131,
                    "name" => "Chiradzulu District"
                ],
                [
                    "id" => 3110,
                    "country_id" => 131,
                    "name" => "Mangochi District"
                ],
                [
                    "id" => 3111,
                    "country_id" => 131,
                    "name" => "Ntchisi District"
                ],
                [
                    "id" => 3112,
                    "country_id" => 35,
                    "name" => "Kénédougou Province"
                ],
                [
                    "id" => 3113,
                    "country_id" => 35,
                    "name" => "Namentenga Province"
                ],
                [
                    "id" => 3114,
                    "country_id" => 35,
                    "name" => "Sahel Region"
                ],
                [
                    "id" => 3115,
                    "country_id" => 35,
                    "name" => "Centre-Ouest Region"
                ],
                [
                    "id" => 3116,
                    "country_id" => 35,
                    "name" => "Nahouri Province"
                ],
                [
                    "id" => 3117,
                    "country_id" => 35,
                    "name" => "Passoré Province"
                ],
                [
                    "id" => 3118,
                    "country_id" => 35,
                    "name" => "Zoundwéogo Province"
                ],
                [
                    "id" => 3119,
                    "country_id" => 35,
                    "name" => "Sissili Province"
                ],
                [
                    "id" => 3120,
                    "country_id" => 35,
                    "name" => "Banwa Province"
                ],
                [
                    "id" => 3121,
                    "country_id" => 35,
                    "name" => "Bougouriba Province"
                ],
                [
                    "id" => 3122,
                    "country_id" => 35,
                    "name" => "Gnagna Province"
                ],
                [
                    "id" => 3123,
                    "country_id" => 35,
                    "name" => "Mouhoun"
                ],
                [
                    "id" => 3124,
                    "country_id" => 35,
                    "name" => "Yagha Province"
                ],
                [
                    "id" => 3125,
                    "country_id" => 35,
                    "name" => "Plateau-Central Region"
                ],
                [
                    "id" => 3126,
                    "country_id" => 35,
                    "name" => "Sanmatenga Province"
                ],
                [
                    "id" => 3127,
                    "country_id" => 35,
                    "name" => "Centre-Nord Region"
                ],
                [
                    "id" => 3128,
                    "country_id" => 35,
                    "name" => "Tapoa Province"
                ],
                [
                    "id" => 3129,
                    "country_id" => 35,
                    "name" => "Houet Province"
                ],
                [
                    "id" => 3130,
                    "country_id" => 35,
                    "name" => "Zondoma Province"
                ],
                [
                    "id" => 3131,
                    "country_id" => 35,
                    "name" => "Boulgou"
                ],
                [
                    "id" => 3132,
                    "country_id" => 35,
                    "name" => "Komondjari Province"
                ],
                [
                    "id" => 3133,
                    "country_id" => 35,
                    "name" => "Koulpélogo Province"
                ],
                [
                    "id" => 3134,
                    "country_id" => 35,
                    "name" => "Tuy Province"
                ],
                [
                    "id" => 3135,
                    "country_id" => 35,
                    "name" => "Ioba Province"
                ],
                [
                    "id" => 3136,
                    "country_id" => 35,
                    "name" => "Centre"
                ],
                [
                    "id" => 3137,
                    "country_id" => 35,
                    "name" => "Sourou Province"
                ],
                [
                    "id" => 3138,
                    "country_id" => 35,
                    "name" => "Boucle du Mouhoun Region"
                ],
                [
                    "id" => 3139,
                    "country_id" => 35,
                    "name" => "Séno Province"
                ],
                [
                    "id" => 3140,
                    "country_id" => 35,
                    "name" => "Sud-Ouest Region"
                ],
                [
                    "id" => 3141,
                    "country_id" => 35,
                    "name" => "Oubritenga Province"
                ],
                [
                    "id" => 3142,
                    "country_id" => 35,
                    "name" => "Nayala Province"
                ],
                [
                    "id" => 3143,
                    "country_id" => 35,
                    "name" => "Gourma Province"
                ],
                [
                    "id" => 3144,
                    "country_id" => 35,
                    "name" => "Oudalan Province"
                ],
                [
                    "id" => 3145,
                    "country_id" => 35,
                    "name" => "Ziro Province"
                ],
                [
                    "id" => 3146,
                    "country_id" => 35,
                    "name" => "Kossi Province"
                ],
                [
                    "id" => 3147,
                    "country_id" => 35,
                    "name" => "Kourwéogo Province"
                ],
                [
                    "id" => 3148,
                    "country_id" => 35,
                    "name" => "Ganzourgou Province"
                ],
                [
                    "id" => 3149,
                    "country_id" => 35,
                    "name" => "Centre-Sud Region"
                ],
                [
                    "id" => 3150,
                    "country_id" => 35,
                    "name" => "Yatenga Province"
                ],
                [
                    "id" => 3151,
                    "country_id" => 35,
                    "name" => "Loroum Province"
                ],
                [
                    "id" => 3152,
                    "country_id" => 35,
                    "name" => "Bazèga Province"
                ],
                [
                    "id" => 3153,
                    "country_id" => 35,
                    "name" => "Cascades Region"
                ],
                [
                    "id" => 3154,
                    "country_id" => 35,
                    "name" => "Sanguié Province"
                ],
                [
                    "id" => 3155,
                    "country_id" => 35,
                    "name" => "Bam Province"
                ],
                [
                    "id" => 3156,
                    "country_id" => 35,
                    "name" => "Noumbiel Province"
                ],
                [
                    "id" => 3157,
                    "country_id" => 35,
                    "name" => "Kompienga Province"
                ],
                [
                    "id" => 3158,
                    "country_id" => 35,
                    "name" => "Est Region"
                ],
                [
                    "id" => 3159,
                    "country_id" => 35,
                    "name" => "Léraba Province"
                ],
                [
                    "id" => 3160,
                    "country_id" => 35,
                    "name" => "Balé Province"
                ],
                [
                    "id" => 3161,
                    "country_id" => 35,
                    "name" => "Kouritenga Province"
                ],
                [
                    "id" => 3162,
                    "country_id" => 35,
                    "name" => "Centre-Est Region"
                ],
                [
                    "id" => 3163,
                    "country_id" => 35,
                    "name" => "Poni Province"
                ],
                [
                    "id" => 3164,
                    "country_id" => 35,
                    "name" => "Nord Region, Burkina Faso"
                ],
                [
                    "id" => 3165,
                    "country_id" => 35,
                    "name" => "Hauts-Bassins Region"
                ],
                [
                    "id" => 3166,
                    "country_id" => 35,
                    "name" => "Soum Province"
                ],
                [
                    "id" => 3167,
                    "country_id" => 35,
                    "name" => "Comoé Province"
                ],
                [
                    "id" => 3168,
                    "country_id" => 35,
                    "name" => "Kadiogo Province"
                ],
                [
                    "id" => 3169,
                    "country_id" => 167,
                    "name" => "Islamabad Capital Territory"
                ],
                [
                    "id" => 3170,
                    "country_id" => 167,
                    "name" => "Gilgit-Baltistan"
                ],
                [
                    "id" => 3171,
                    "country_id" => 167,
                    "name" => "Khyber Pakhtunkhwa"
                ],
                [
                    "id" => 3172,
                    "country_id" => 167,
                    "name" => "Azad Kashmir"
                ],
                [
                    "id" => 3173,
                    "country_id" => 167,
                    "name" => "Federally Administered Tribal Areas"
                ],
                [
                    "id" => 3174,
                    "country_id" => 167,
                    "name" => "Balochistan"
                ],
                [
                    "id" => 3175,
                    "country_id" => 167,
                    "name" => "Sindh"
                ],
                [
                    "id" => 3176,
                    "country_id" => 167,
                    "name" => "Punjab"
                ],
                [
                    "id" => 3177,
                    "country_id" => 179,
                    "name" => "Al Rayyan Municipality"
                ],
                [
                    "id" => 3178,
                    "country_id" => 179,
                    "name" => "Al-Shahaniya"
                ],
                [
                    "id" => 3179,
                    "country_id" => 179,
                    "name" => "Al Wakrah"
                ],
                [
                    "id" => 3180,
                    "country_id" => 179,
                    "name" => "Madinat ash Shamal"
                ],
                [
                    "id" => 3181,
                    "country_id" => 179,
                    "name" => "Doha"
                ],
                [
                    "id" => 3182,
                    "country_id" => 179,
                    "name" => "Al Daayen"
                ],
                [
                    "id" => 3183,
                    "country_id" => 179,
                    "name" => "Al Khor"
                ],
                [
                    "id" => 3184,
                    "country_id" => 179,
                    "name" => "Umm Salal Municipality"
                ],
                [
                    "id" => 3185,
                    "country_id" => 36,
                    "name" => "Rumonge Province"
                ],
                [
                    "id" => 3186,
                    "country_id" => 36,
                    "name" => "Muyinga Province"
                ],
                [
                    "id" => 3187,
                    "country_id" => 36,
                    "name" => "Mwaro Province"
                ],
                [
                    "id" => 3188,
                    "country_id" => 36,
                    "name" => "Makamba Province"
                ],
                [
                    "id" => 3189,
                    "country_id" => 36,
                    "name" => "Rutana Province"
                ],
                [
                    "id" => 3190,
                    "country_id" => 36,
                    "name" => "Cibitoke Province"
                ],
                [
                    "id" => 3191,
                    "country_id" => 36,
                    "name" => "Ruyigi Province"
                ],
                [
                    "id" => 3192,
                    "country_id" => 36,
                    "name" => "Kayanza Province"
                ],
                [
                    "id" => 3193,
                    "country_id" => 36,
                    "name" => "Muramvya Province"
                ],
                [
                    "id" => 3194,
                    "country_id" => 36,
                    "name" => "Karuzi Province"
                ],
                [
                    "id" => 3195,
                    "country_id" => 36,
                    "name" => "Kirundo Province"
                ],
                [
                    "id" => 3196,
                    "country_id" => 36,
                    "name" => "Bubanza Province"
                ],
                [
                    "id" => 3197,
                    "country_id" => 36,
                    "name" => "Gitega Province"
                ],
                [
                    "id" => 3198,
                    "country_id" => 36,
                    "name" => "Bujumbura Mairie Province"
                ],
                [
                    "id" => 3199,
                    "country_id" => 36,
                    "name" => "Ngozi Province"
                ],
                [
                    "id" => 3200,
                    "country_id" => 36,
                    "name" => "Bujumbura Rural Province"
                ],
                [
                    "id" => 3201,
                    "country_id" => 36,
                    "name" => "Cankuzo Province"
                ],
                [
                    "id" => 3202,
                    "country_id" => 36,
                    "name" => "Bururi Province"
                ],
                [
                    "id" => 3203,
                    "country_id" => 235,
                    "name" => "Flores Department"
                ],
                [
                    "id" => 3204,
                    "country_id" => 235,
                    "name" => "San José Department"
                ],
                [
                    "id" => 3205,
                    "country_id" => 235,
                    "name" => "Artigas Department"
                ],
                [
                    "id" => 3206,
                    "country_id" => 235,
                    "name" => "Maldonado Department"
                ],
                [
                    "id" => 3207,
                    "country_id" => 235,
                    "name" => "Rivera Department"
                ],
                [
                    "id" => 3208,
                    "country_id" => 235,
                    "name" => "Colonia Department"
                ],
                [
                    "id" => 3209,
                    "country_id" => 235,
                    "name" => "Durazno Department"
                ],
                [
                    "id" => 3210,
                    "country_id" => 235,
                    "name" => "Río Negro Department"
                ],
                [
                    "id" => 3211,
                    "country_id" => 235,
                    "name" => "Cerro Largo Department"
                ],
                [
                    "id" => 3212,
                    "country_id" => 235,
                    "name" => "Paysandú Department"
                ],
                [
                    "id" => 3213,
                    "country_id" => 235,
                    "name" => "Canelones Department"
                ],
                [
                    "id" => 3214,
                    "country_id" => 235,
                    "name" => "Treinta y Tres Department"
                ],
                [
                    "id" => 3215,
                    "country_id" => 235,
                    "name" => "Lavalleja Department"
                ],
                [
                    "id" => 3216,
                    "country_id" => 235,
                    "name" => "Rocha Department"
                ],
                [
                    "id" => 3217,
                    "country_id" => 235,
                    "name" => "Florida Department"
                ],
                [
                    "id" => 3218,
                    "country_id" => 235,
                    "name" => "Montevideo Department"
                ],
                [
                    "id" => 3219,
                    "country_id" => 235,
                    "name" => "Soriano Department"
                ],
                [
                    "id" => 3220,
                    "country_id" => 235,
                    "name" => "Salto Department"
                ],
                [
                    "id" => 3221,
                    "country_id" => 235,
                    "name" => "Tacuarembó Department"
                ],
                [
                    "id" => 3222,
                    "country_id" => 65,
                    "name" => "Kafr el-Sheikh"
                ],
                [
                    "id" => 3223,
                    "country_id" => 65,
                    "name" => "Cairo"
                ],
                [
                    "id" => 3224,
                    "country_id" => 65,
                    "name" => "Damietta"
                ],
                [
                    "id" => 3225,
                    "country_id" => 65,
                    "name" => "Aswan"
                ],
                [
                    "id" => 3226,
                    "country_id" => 65,
                    "name" => "Sohag"
                ],
                [
                    "id" => 3227,
                    "country_id" => 65,
                    "name" => "North Sinai"
                ],
                [
                    "id" => 3228,
                    "country_id" => 65,
                    "name" => "Monufia"
                ],
                [
                    "id" => 3229,
                    "country_id" => 65,
                    "name" => "Port Said"
                ],
                [
                    "id" => 3230,
                    "country_id" => 65,
                    "name" => "Beni Suef"
                ],
                [
                    "id" => 3231,
                    "country_id" => 65,
                    "name" => "Matrouh"
                ],
                [
                    "id" => 3232,
                    "country_id" => 65,
                    "name" => "Qalyubia"
                ],
                [
                    "id" => 3233,
                    "country_id" => 65,
                    "name" => "Suez"
                ],
                [
                    "id" => 3234,
                    "country_id" => 65,
                    "name" => "Gharbia"
                ],
                [
                    "id" => 3235,
                    "country_id" => 65,
                    "name" => "Alexandria"
                ],
                [
                    "id" => 3236,
                    "country_id" => 65,
                    "name" => "Asyut"
                ],
                [
                    "id" => 3237,
                    "country_id" => 65,
                    "name" => "South Sinai"
                ],
                [
                    "id" => 3238,
                    "country_id" => 65,
                    "name" => "Faiyum"
                ],
                [
                    "id" => 3239,
                    "country_id" => 65,
                    "name" => "Giza"
                ],
                [
                    "id" => 3240,
                    "country_id" => 65,
                    "name" => "Red Sea"
                ],
                [
                    "id" => 3241,
                    "country_id" => 65,
                    "name" => "Beheira"
                ],
                [
                    "id" => 3242,
                    "country_id" => 65,
                    "name" => "Luxor"
                ],
                [
                    "id" => 3243,
                    "country_id" => 65,
                    "name" => "Minya"
                ],
                [
                    "id" => 3244,
                    "country_id" => 65,
                    "name" => "Ismailia"
                ],
                [
                    "id" => 3245,
                    "country_id" => 65,
                    "name" => "Dakahlia"
                ],
                [
                    "id" => 3246,
                    "country_id" => 65,
                    "name" => "New Valley"
                ],
                [
                    "id" => 3247,
                    "country_id" => 65,
                    "name" => "Qena"
                ],
                [
                    "id" => 3248,
                    "country_id" => 140,
                    "name" => "Agalega Islands"
                ],
                [
                    "id" => 3249,
                    "country_id" => 140,
                    "name" => "Rodrigues Island"
                ],
                [
                    "id" => 3250,
                    "country_id" => 140,
                    "name" => "Pamplemousses"
                ],
                [
                    "id" => 3251,
                    "country_id" => 140,
                    "name" => "Saint Brandon Islands"
                ],
                [
                    "id" => 3253,
                    "country_id" => 140,
                    "name" => "Moka"
                ],
                [
                    "id" => 3254,
                    "country_id" => 140,
                    "name" => "Flacq"
                ],
                [
                    "id" => 3257,
                    "country_id" => 140,
                    "name" => "Savanne"
                ],
                [
                    "id" => 3259,
                    "country_id" => 140,
                    "name" => "Black River"
                ],
                [
                    "id" => 3260,
                    "country_id" => 140,
                    "name" => "Port Louis"
                ],
                [
                    "id" => 3261,
                    "country_id" => 140,
                    "name" => "Rivière du Rempart"
                ],
                [
                    "id" => 3263,
                    "country_id" => 140,
                    "name" => "Plaines Wilhems"
                ],
                [
                    "id" => 3264,
                    "country_id" => 140,
                    "name" => "Grand Port"
                ],
                [
                    "id" => 3265,
                    "country_id" => 149,
                    "name" => "Guelmim"
                ],
                [
                    "id" => 3266,
                    "country_id" => 149,
                    "name" => "Aousserd (EH)"
                ],
                [
                    "id" => 3267,
                    "country_id" => 149,
                    "name" => "Al Hoceïma"
                ],
                [
                    "id" => 3268,
                    "country_id" => 149,
                    "name" => "Larache"
                ],
                [
                    "id" => 3269,
                    "country_id" => 149,
                    "name" => "Ouarzazate"
                ],
                [
                    "id" => 3270,
                    "country_id" => 149,
                    "name" => "Boulemane"
                ],
                [
                    "id" => 3271,
                    "country_id" => 149,
                    "name" => "L'Oriental"
                ],
                [
                    "id" => 3272,
                    "country_id" => 149,
                    "name" => "Béni Mellal"
                ],
                [
                    "id" => 3274,
                    "country_id" => 149,
                    "name" => "Chichaoua"
                ],
                [
                    "id" => 3275,
                    "country_id" => 149,
                    "name" => "Boujdour (EH)"
                ],
                [
                    "id" => 3276,
                    "country_id" => 149,
                    "name" => "Khémisset"
                ],
                [
                    "id" => 3277,
                    "country_id" => 149,
                    "name" => "Tiznit"
                ],
                [
                    "id" => 3278,
                    "country_id" => 149,
                    "name" => "Béni Mellal-Khénifra"
                ],
                [
                    "id" => 3279,
                    "country_id" => 149,
                    "name" => "Sidi Kacem"
                ],
                [
                    "id" => 3280,
                    "country_id" => 149,
                    "name" => "El Jadida"
                ],
                [
                    "id" => 3281,
                    "country_id" => 149,
                    "name" => "Nador"
                ],
                [
                    "id" => 3282,
                    "country_id" => 149,
                    "name" => "Settat"
                ],
                [
                    "id" => 3283,
                    "country_id" => 149,
                    "name" => "Zagora"
                ],
                [
                    "id" => 3284,
                    "country_id" => 149,
                    "name" => "Médiouna"
                ],
                [
                    "id" => 3285,
                    "country_id" => 149,
                    "name" => "Berkane"
                ],
                [
                    "id" => 3286,
                    "country_id" => 149,
                    "name" => "Tan-Tan (EH-partial)"
                ],
                [
                    "id" => 3287,
                    "country_id" => 149,
                    "name" => "Nouaceur"
                ],
                [
                    "id" => 3288,
                    "country_id" => 149,
                    "name" => "Marrakesh-Safi"
                ],
                [
                    "id" => 3289,
                    "country_id" => 149,
                    "name" => "Sefrou"
                ],
                [
                    "id" => 3290,
                    "country_id" => 149,
                    "name" => "Drâa-Tafilalet"
                ],
                [
                    "id" => 3291,
                    "country_id" => 149,
                    "name" => "El Hajeb"
                ],
                [
                    "id" => 3292,
                    "country_id" => 149,
                    "name" => "Es-Semara (EH-partial)"
                ],
                [
                    "id" => 3293,
                    "country_id" => 149,
                    "name" => "Laâyoune (EH)"
                ],
                [
                    "id" => 3294,
                    "country_id" => 149,
                    "name" => "Inezgane-Ait Melloul"
                ],
                [
                    "id" => 3295,
                    "country_id" => 149,
                    "name" => "Souss-Massa"
                ],
                [
                    "id" => 3296,
                    "country_id" => 149,
                    "name" => "Taza"
                ],
                [
                    "id" => 3297,
                    "country_id" => 149,
                    "name" => "Assa-Zag (EH-partial)"
                ],
                [
                    "id" => 3298,
                    "country_id" => 149,
                    "name" => "Laâyoune-Sakia El Hamra (EH-partial)"
                ],
                [
                    "id" => 3299,
                    "country_id" => 149,
                    "name" => "Errachidia"
                ],
                [
                    "id" => 3300,
                    "country_id" => 149,
                    "name" => "Fahs-Anjra"
                ],
                [
                    "id" => 3301,
                    "country_id" => 149,
                    "name" => "Figuig"
                ],
                [
                    "id" => 3302,
                    "country_id" => 149,
                    "name" => "Chtouka-Ait Baha"
                ],
                [
                    "id" => 3303,
                    "country_id" => 149,
                    "name" => "Casablanca-Settat"
                ],
                [
                    "id" => 3304,
                    "country_id" => 149,
                    "name" => "Benslimane"
                ],
                [
                    "id" => 3305,
                    "country_id" => 149,
                    "name" => "Guelmim-Oued Noun (EH-partial)"
                ],
                [
                    "id" => 3306,
                    "country_id" => 149,
                    "name" => "Dakhla-Oued Ed-Dahab (EH)"
                ],
                [
                    "id" => 3307,
                    "country_id" => 149,
                    "name" => "Jerada"
                ],
                [
                    "id" => 3308,
                    "country_id" => 149,
                    "name" => "Kénitra"
                ],
                [
                    "id" => 3309,
                    "country_id" => 149,
                    "name" => "El Kelâa des Sraghna"
                ],
                [
                    "id" => 3310,
                    "country_id" => 149,
                    "name" => "Chefchaouen"
                ],
                [
                    "id" => 3311,
                    "country_id" => 149,
                    "name" => "Safi"
                ],
                [
                    "id" => 3312,
                    "country_id" => 149,
                    "name" => "Tata"
                ],
                [
                    "id" => 3313,
                    "country_id" => 149,
                    "name" => "Fès-Meknès"
                ],
                [
                    "id" => 3314,
                    "country_id" => 149,
                    "name" => "Taroudannt"
                ],
                [
                    "id" => 3315,
                    "country_id" => 149,
                    "name" => "Moulay Yacoub"
                ],
                [
                    "id" => 3316,
                    "country_id" => 149,
                    "name" => "Essaouira"
                ],
                [
                    "id" => 3317,
                    "country_id" => 149,
                    "name" => "Khénifra"
                ],
                [
                    "id" => 3318,
                    "country_id" => 149,
                    "name" => "Tétouan"
                ],
                [
                    "id" => 3319,
                    "country_id" => 149,
                    "name" => "Oued Ed-Dahab (EH)"
                ],
                [
                    "id" => 3320,
                    "country_id" => 149,
                    "name" => "Al Haouz"
                ],
                [
                    "id" => 3321,
                    "country_id" => 149,
                    "name" => "Azilal"
                ],
                [
                    "id" => 3322,
                    "country_id" => 149,
                    "name" => "Taourirt"
                ],
                [
                    "id" => 3323,
                    "country_id" => 149,
                    "name" => "Taounate"
                ],
                [
                    "id" => 3324,
                    "country_id" => 149,
                    "name" => "Tanger-Tétouan-Al Hoceïma"
                ],
                [
                    "id" => 3325,
                    "country_id" => 149,
                    "name" => "Ifrane"
                ],
                [
                    "id" => 3326,
                    "country_id" => 149,
                    "name" => "Khouribga"
                ],
                [
                    "id" => 3327,
                    "country_id" => 150,
                    "name" => "Cabo Delgado Province"
                ],
                [
                    "id" => 3328,
                    "country_id" => 150,
                    "name" => "Zambezia Province"
                ],
                [
                    "id" => 3329,
                    "country_id" => 150,
                    "name" => "Gaza Province"
                ],
                [
                    "id" => 3330,
                    "country_id" => 150,
                    "name" => "Inhambane Province"
                ],
                [
                    "id" => 3331,
                    "country_id" => 150,
                    "name" => "Sofala Province"
                ],
                [
                    "id" => 3332,
                    "country_id" => 150,
                    "name" => "Maputo Province"
                ],
                [
                    "id" => 3333,
                    "country_id" => 150,
                    "name" => "Niassa Province"
                ],
                [
                    "id" => 3334,
                    "country_id" => 150,
                    "name" => "Tete Province"
                ],
                [
                    "id" => 3335,
                    "country_id" => 150,
                    "name" => "Maputo"
                ],
                [
                    "id" => 3336,
                    "country_id" => 150,
                    "name" => "Nampula Province"
                ],
                [
                    "id" => 3337,
                    "country_id" => 150,
                    "name" => "Manica Province"
                ],
                [
                    "id" => 3338,
                    "country_id" => 139,
                    "name" => "Hodh Ech Chargui"
                ],
                [
                    "id" => 3339,
                    "country_id" => 139,
                    "name" => "Brakna"
                ],
                [
                    "id" => 3340,
                    "country_id" => 139,
                    "name" => "Tiris Zemmour"
                ],
                [
                    "id" => 3341,
                    "country_id" => 139,
                    "name" => "Gorgol"
                ],
                [
                    "id" => 3342,
                    "country_id" => 139,
                    "name" => "Inchiri"
                ],
                [
                    "id" => 3343,
                    "country_id" => 139,
                    "name" => "Nouakchott-Nord"
                ],
                [
                    "id" => 3344,
                    "country_id" => 139,
                    "name" => "Adrar"
                ],
                [
                    "id" => 3345,
                    "country_id" => 139,
                    "name" => "Tagant"
                ],
                [
                    "id" => 3346,
                    "country_id" => 139,
                    "name" => "Dakhlet Nouadhibou"
                ],
                [
                    "id" => 3347,
                    "country_id" => 139,
                    "name" => "Nouakchott-Sud"
                ],
                [
                    "id" => 3348,
                    "country_id" => 139,
                    "name" => "Trarza"
                ],
                [
                    "id" => 3349,
                    "country_id" => 139,
                    "name" => "Assaba"
                ],
                [
                    "id" => 3350,
                    "country_id" => 139,
                    "name" => "Guidimaka"
                ],
                [
                    "id" => 3351,
                    "country_id" => 139,
                    "name" => "Hodh El Gharbi"
                ],
                [
                    "id" => 3352,
                    "country_id" => 139,
                    "name" => "Nouakchott-Ouest"
                ],
                [
                    "id" => 3353,
                    "country_id" => 223,
                    "name" => "Western Tobago"
                ],
                [
                    "id" => 3354,
                    "country_id" => 223,
                    "name" => "Couva-Tabaquite-Talparo Regional Corporation"
                ],
                [
                    "id" => 3355,
                    "country_id" => 223,
                    "name" => "Eastern Tobago"
                ],
                [
                    "id" => 3356,
                    "country_id" => 223,
                    "name" => "Rio Claro-Mayaro Regional Corporation"
                ],
                [
                    "id" => 3357,
                    "country_id" => 223,
                    "name" => "San Juan-Laventille Regional Corporation"
                ],
                [
                    "id" => 3358,
                    "country_id" => 223,
                    "name" => "Tunapuna-Piarco Regional Corporation"
                ],
                [
                    "id" => 3359,
                    "country_id" => 223,
                    "name" => "San Fernando"
                ],
                [
                    "id" => 3360,
                    "country_id" => 223,
                    "name" => "Point Fortin"
                ],
                [
                    "id" => 3361,
                    "country_id" => 223,
                    "name" => "Sangre Grande Regional Corporation"
                ],
                [
                    "id" => 3362,
                    "country_id" => 223,
                    "name" => "Arima"
                ],
                [
                    "id" => 3363,
                    "country_id" => 223,
                    "name" => "Port of Spain"
                ],
                [
                    "id" => 3364,
                    "country_id" => 223,
                    "name" => "Siparia Regional Corporation"
                ],
                [
                    "id" => 3365,
                    "country_id" => 223,
                    "name" => "Penal-Debe Regional Corporation"
                ],
                [
                    "id" => 3366,
                    "country_id" => 223,
                    "name" => "Chaguanas"
                ],
                [
                    "id" => 3367,
                    "country_id" => 223,
                    "name" => "Diego Martin Regional Corporation"
                ],
                [
                    "id" => 3368,
                    "country_id" => 223,
                    "name" => "Princes Town Regional Corporation"
                ],
                [
                    "id" => 3369,
                    "country_id" => 226,
                    "name" => "Mary Region"
                ],
                [
                    "id" => 3370,
                    "country_id" => 226,
                    "name" => "Lebap Region"
                ],
                [
                    "id" => 3371,
                    "country_id" => 226,
                    "name" => "Ashgabat"
                ],
                [
                    "id" => 3372,
                    "country_id" => 226,
                    "name" => "Balkan Region"
                ],
                [
                    "id" => 3373,
                    "country_id" => 226,
                    "name" => "Daşoguz Region"
                ],
                [
                    "id" => 3374,
                    "country_id" => 226,
                    "name" => "Ahal Region"
                ],
                [
                    "id" => 3375,
                    "country_id" => 27,
                    "name" => "Beni Department"
                ],
                [
                    "id" => 3376,
                    "country_id" => 27,
                    "name" => "Oruro Department"
                ],
                [
                    "id" => 3377,
                    "country_id" => 27,
                    "name" => "Santa Cruz Department"
                ],
                [
                    "id" => 3378,
                    "country_id" => 27,
                    "name" => "Tarija Department"
                ],
                [
                    "id" => 3379,
                    "country_id" => 27,
                    "name" => "Pando Department"
                ],
                [
                    "id" => 3380,
                    "country_id" => 27,
                    "name" => "La Paz Department"
                ],
                [
                    "id" => 3381,
                    "country_id" => 27,
                    "name" => "Cochabamba Department"
                ],
                [
                    "id" => 3382,
                    "country_id" => 27,
                    "name" => "Chuquisaca Department"
                ],
                [
                    "id" => 3383,
                    "country_id" => 27,
                    "name" => "Potosí Department"
                ],
                [
                    "id" => 3384,
                    "country_id" => 188,
                    "name" => "Saint George Parish"
                ],
                [
                    "id" => 3385,
                    "country_id" => 188,
                    "name" => "Saint Patrick Parish"
                ],
                [
                    "id" => 3386,
                    "country_id" => 188,
                    "name" => "Saint Andrew Parish"
                ],
                [
                    "id" => 3387,
                    "country_id" => 188,
                    "name" => "Saint David Parish"
                ],
                [
                    "id" => 3388,
                    "country_id" => 188,
                    "name" => "Grenadines Parish"
                ],
                [
                    "id" => 3389,
                    "country_id" => 188,
                    "name" => "Charlotte Parish"
                ],
                [
                    "id" => 3390,
                    "country_id" => 231,
                    "name" => "Sharjah Emirate"
                ],
                [
                    "id" => 3391,
                    "country_id" => 231,
                    "name" => "Dubai"
                ],
                [
                    "id" => 3392,
                    "country_id" => 231,
                    "name" => "Umm al-Quwain"
                ],
                [
                    "id" => 3393,
                    "country_id" => 231,
                    "name" => "Fujairah"
                ],
                [
                    "id" => 3394,
                    "country_id" => 231,
                    "name" => "Ras al-Khaimah"
                ],
                [
                    "id" => 3395,
                    "country_id" => 231,
                    "name" => "Ajman Emirate"
                ],
                [
                    "id" => 3396,
                    "country_id" => 231,
                    "name" => "Abu Dhabi Emirate"
                ],
                [
                    "id" => 3397,
                    "country_id" => 217,
                    "name" => "districts of Republican Subordination"
                ],
                [
                    "id" => 3398,
                    "country_id" => 217,
                    "name" => "Khatlon Province"
                ],
                [
                    "id" => 3399,
                    "country_id" => 217,
                    "name" => "Gorno-Badakhshan Autonomous Province"
                ],
                [
                    "id" => 3400,
                    "country_id" => 217,
                    "name" => "Sughd Province"
                ],
                [
                    "id" => 3402,
                    "country_id" => 216,
                    "name" => "Yilan"
                ],
                [
                    "id" => 3403,
                    "country_id" => 216,
                    "name" => "Penghu"
                ],
                [
                    "id" => 3404,
                    "country_id" => 216,
                    "name" => "Changhua"
                ],
                [
                    "id" => 3405,
                    "country_id" => 216,
                    "name" => "Pingtung"
                ],
                [
                    "id" => 3406,
                    "country_id" => 216,
                    "name" => "Taichung"
                ],
                [
                    "id" => 3407,
                    "country_id" => 216,
                    "name" => "Nantou"
                ],
                [
                    "id" => 3408,
                    "country_id" => 216,
                    "name" => "Chiayi"
                ],
                [
                    "id" => 3410,
                    "country_id" => 216,
                    "name" => "Taitung"
                ],
                [
                    "id" => 3411,
                    "country_id" => 216,
                    "name" => "Hualien"
                ],
                [
                    "id" => 3412,
                    "country_id" => 216,
                    "name" => "Kaohsiung"
                ],
                [
                    "id" => 3413,
                    "country_id" => 216,
                    "name" => "Miaoli"
                ],
                [
                    "id" => 3415,
                    "country_id" => 216,
                    "name" => "Kinmen"
                ],
                [
                    "id" => 3416,
                    "country_id" => 216,
                    "name" => "Yunlin"
                ],
                [
                    "id" => 3417,
                    "country_id" => 216,
                    "name" => "Hsinchu"
                ],
                [
                    "id" => 3418,
                    "country_id" => 216,
                    "name" => "Chiayi"
                ],
                [
                    "id" => 3419,
                    "country_id" => 216,
                    "name" => "Taoyuan"
                ],
                [
                    "id" => 3420,
                    "country_id" => 216,
                    "name" => "Lienchiang"
                ],
                [
                    "id" => 3421,
                    "country_id" => 216,
                    "name" => "Tainan"
                ],
                [
                    "id" => 3422,
                    "country_id" => 216,
                    "name" => "Taipei"
                ],
                [
                    "id" => 3423,
                    "country_id" => 216,
                    "name" => "Hsinchu"
                ],
                [
                    "id" => 3424,
                    "country_id" => 68,
                    "name" => "Northern Red Sea Region"
                ],
                [
                    "id" => 3425,
                    "country_id" => 68,
                    "name" => "Anseba Region"
                ],
                [
                    "id" => 3426,
                    "country_id" => 68,
                    "name" => "Maekel Region"
                ],
                [
                    "id" => 3427,
                    "country_id" => 68,
                    "name" => "Debub Region"
                ],
                [
                    "id" => 3428,
                    "country_id" => 68,
                    "name" => "Gash-Barka Region"
                ],
                [
                    "id" => 3429,
                    "country_id" => 68,
                    "name" => "Southern Red Sea Region"
                ],
                [
                    "id" => 3430,
                    "country_id" => 100,
                    "name" => "Southern Peninsula Region"
                ],
                [
                    "id" => 3431,
                    "country_id" => 100,
                    "name" => "Capital Region"
                ],
                [
                    "id" => 3432,
                    "country_id" => 100,
                    "name" => "Westfjords"
                ],
                [
                    "id" => 3433,
                    "country_id" => 100,
                    "name" => "Eastern Region"
                ],
                [
                    "id" => 3434,
                    "country_id" => 100,
                    "name" => "Southern Region"
                ],
                [
                    "id" => 3435,
                    "country_id" => 100,
                    "name" => "Northwestern Region"
                ],
                [
                    "id" => 3436,
                    "country_id" => 100,
                    "name" => "Western Region"
                ],
                [
                    "id" => 3437,
                    "country_id" => 100,
                    "name" => "Northeastern Region"
                ],
                [
                    "id" => 3438,
                    "country_id" => 67,
                    "name" => "Río Muni"
                ],
                [
                    "id" => 3439,
                    "country_id" => 67,
                    "name" => "Kié-Ntem Province"
                ],
                [
                    "id" => 3440,
                    "country_id" => 67,
                    "name" => "Wele-Nzas Province"
                ],
                [
                    "id" => 3441,
                    "country_id" => 67,
                    "name" => "Litoral Province"
                ],
                [
                    "id" => 3442,
                    "country_id" => 67,
                    "name" => "Insular Region"
                ],
                [
                    "id" => 3443,
                    "country_id" => 67,
                    "name" => "Bioko Sur Province"
                ],
                [
                    "id" => 3444,
                    "country_id" => 67,
                    "name" => "Annobón Province"
                ],
                [
                    "id" => 3445,
                    "country_id" => 67,
                    "name" => "Centro Sur Province"
                ],
                [
                    "id" => 3446,
                    "country_id" => 67,
                    "name" => "Bioko Norte Province"
                ],
                [
                    "id" => 3447,
                    "country_id" => 142,
                    "name" => "Chihuahua"
                ],
                [
                    "id" => 3448,
                    "country_id" => 142,
                    "name" => "Oaxaca"
                ],
                [
                    "id" => 3449,
                    "country_id" => 142,
                    "name" => "Sinaloa"
                ],
                [
                    "id" => 3450,
                    "country_id" => 142,
                    "name" => "Estado de México"
                ],
                [
                    "id" => 3451,
                    "country_id" => 142,
                    "name" => "Chiapas"
                ],
                [
                    "id" => 3452,
                    "country_id" => 142,
                    "name" => "Nuevo León"
                ],
                [
                    "id" => 3453,
                    "country_id" => 142,
                    "name" => "Durango"
                ],
                [
                    "id" => 3454,
                    "country_id" => 142,
                    "name" => "Tabasco"
                ],
                [
                    "id" => 3455,
                    "country_id" => 142,
                    "name" => "Querétaro"
                ],
                [
                    "id" => 3456,
                    "country_id" => 142,
                    "name" => "Aguascalientes"
                ],
                [
                    "id" => 3457,
                    "country_id" => 142,
                    "name" => "Baja California"
                ],
                [
                    "id" => 3458,
                    "country_id" => 142,
                    "name" => "Tlaxcala"
                ],
                [
                    "id" => 3459,
                    "country_id" => 142,
                    "name" => "Guerrero"
                ],
                [
                    "id" => 3460,
                    "country_id" => 142,
                    "name" => "Baja California Sur"
                ],
                [
                    "id" => 3461,
                    "country_id" => 142,
                    "name" => "San Luis Potosí"
                ],
                [
                    "id" => 3462,
                    "country_id" => 142,
                    "name" => "Zacatecas"
                ],
                [
                    "id" => 3463,
                    "country_id" => 142,
                    "name" => "Tamaulipas"
                ],
                [
                    "id" => 3464,
                    "country_id" => 142,
                    "name" => "Veracruz de Ignacio de la Llave"
                ],
                [
                    "id" => 3465,
                    "country_id" => 142,
                    "name" => "Morelos"
                ],
                [
                    "id" => 3466,
                    "country_id" => 142,
                    "name" => "Yucatán"
                ],
                [
                    "id" => 3467,
                    "country_id" => 142,
                    "name" => "Quintana Roo"
                ],
                [
                    "id" => 3468,
                    "country_id" => 142,
                    "name" => "Sonora"
                ],
                [
                    "id" => 3469,
                    "country_id" => 142,
                    "name" => "Guanajuato"
                ],
                [
                    "id" => 3470,
                    "country_id" => 142,
                    "name" => "Hidalgo"
                ],
                [
                    "id" => 3471,
                    "country_id" => 142,
                    "name" => "Coahuila de Zaragoza"
                ],
                [
                    "id" => 3472,
                    "country_id" => 142,
                    "name" => "Colima"
                ],
                [
                    "id" => 3473,
                    "country_id" => 142,
                    "name" => "Ciudad de México"
                ],
                [
                    "id" => 3474,
                    "country_id" => 142,
                    "name" => "Michoacán de Ocampo"
                ],
                [
                    "id" => 3475,
                    "country_id" => 142,
                    "name" => "Campeche"
                ],
                [
                    "id" => 3476,
                    "country_id" => 142,
                    "name" => "Puebla"
                ],
                [
                    "id" => 3477,
                    "country_id" => 142,
                    "name" => "Nayarit"
                ],
                [
                    "id" => 3478,
                    "country_id" => 219,
                    "name" => "Krabi"
                ],
                [
                    "id" => 3479,
                    "country_id" => 219,
                    "name" => "Ranong"
                ],
                [
                    "id" => 3480,
                    "country_id" => 219,
                    "name" => "Nong Bua Lam Phu"
                ],
                [
                    "id" => 3481,
                    "country_id" => 219,
                    "name" => "Samut Prakan"
                ],
                [
                    "id" => 3482,
                    "country_id" => 219,
                    "name" => "Surat Thani"
                ],
                [
                    "id" => 3483,
                    "country_id" => 219,
                    "name" => "Lamphun"
                ],
                [
                    "id" => 3484,
                    "country_id" => 219,
                    "name" => "Nong Khai"
                ],
                [
                    "id" => 3485,
                    "country_id" => 219,
                    "name" => "Khon Kaen"
                ],
                [
                    "id" => 3486,
                    "country_id" => 219,
                    "name" => "Chanthaburi"
                ],
                [
                    "id" => 3487,
                    "country_id" => 219,
                    "name" => "Saraburi"
                ],
                [
                    "id" => 3488,
                    "country_id" => 219,
                    "name" => "Phatthalung"
                ],
                [
                    "id" => 3489,
                    "country_id" => 219,
                    "name" => "Uttaradit"
                ],
                [
                    "id" => 3490,
                    "country_id" => 219,
                    "name" => "Sing Buri"
                ],
                [
                    "id" => 3491,
                    "country_id" => 219,
                    "name" => "Chiang Mai"
                ],
                [
                    "id" => 3492,
                    "country_id" => 219,
                    "name" => "Nakhon Sawan"
                ],
                [
                    "id" => 3493,
                    "country_id" => 219,
                    "name" => "Yala"
                ],
                [
                    "id" => 3494,
                    "country_id" => 219,
                    "name" => "Phra Nakhon Si Ayutthaya"
                ],
                [
                    "id" => 3495,
                    "country_id" => 219,
                    "name" => "Nonthaburi"
                ],
                [
                    "id" => 3496,
                    "country_id" => 219,
                    "name" => "Trat"
                ],
                [
                    "id" => 3497,
                    "country_id" => 219,
                    "name" => "Nakhon Ratchasima"
                ],
                [
                    "id" => 3498,
                    "country_id" => 219,
                    "name" => "Chiang Rai"
                ],
                [
                    "id" => 3499,
                    "country_id" => 219,
                    "name" => "Ratchaburi"
                ],
                [
                    "id" => 3500,
                    "country_id" => 219,
                    "name" => "Pathum Thani"
                ],
                [
                    "id" => 3501,
                    "country_id" => 219,
                    "name" => "Sakon Nakhon"
                ],
                [
                    "id" => 3502,
                    "country_id" => 219,
                    "name" => "Samut Songkhram"
                ],
                [
                    "id" => 3503,
                    "country_id" => 219,
                    "name" => "Nakhon Pathom"
                ],
                [
                    "id" => 3504,
                    "country_id" => 219,
                    "name" => "Samut Sakhon"
                ],
                [
                    "id" => 3505,
                    "country_id" => 219,
                    "name" => "Mae Hong Son"
                ],
                [
                    "id" => 3506,
                    "country_id" => 219,
                    "name" => "Phitsanulok"
                ],
                [
                    "id" => 3507,
                    "country_id" => 219,
                    "name" => "Pattaya"
                ],
                [
                    "id" => 3508,
                    "country_id" => 219,
                    "name" => "Prachuap Khiri Khan"
                ],
                [
                    "id" => 3509,
                    "country_id" => 219,
                    "name" => "Loei"
                ],
                [
                    "id" => 3510,
                    "country_id" => 219,
                    "name" => "Roi Et"
                ],
                [
                    "id" => 3511,
                    "country_id" => 219,
                    "name" => "Kanchanaburi"
                ],
                [
                    "id" => 3512,
                    "country_id" => 219,
                    "name" => "Ubon Ratchathani"
                ],
                [
                    "id" => 3513,
                    "country_id" => 219,
                    "name" => "Chon Buri"
                ],
                [
                    "id" => 3514,
                    "country_id" => 219,
                    "name" => "Phichit"
                ],
                [
                    "id" => 3515,
                    "country_id" => 219,
                    "name" => "Phetchabun"
                ],
                [
                    "id" => 3516,
                    "country_id" => 219,
                    "name" => "Kamphaeng Phet"
                ],
                [
                    "id" => 3517,
                    "country_id" => 219,
                    "name" => "Maha Sarakham"
                ],
                [
                    "id" => 3518,
                    "country_id" => 219,
                    "name" => "Rayong"
                ],
                [
                    "id" => 3519,
                    "country_id" => 219,
                    "name" => "Ang Thong"
                ],
                [
                    "id" => 3520,
                    "country_id" => 219,
                    "name" => "Nakhon Si Thammarat"
                ],
                [
                    "id" => 3521,
                    "country_id" => 219,
                    "name" => "Yasothon"
                ],
                [
                    "id" => 3522,
                    "country_id" => 219,
                    "name" => "Chai Nat"
                ],
                [
                    "id" => 3523,
                    "country_id" => 219,
                    "name" => "Amnat Charoen"
                ],
                [
                    "id" => 3524,
                    "country_id" => 219,
                    "name" => "Suphan Buri"
                ],
                [
                    "id" => 3525,
                    "country_id" => 219,
                    "name" => "Tak"
                ],
                [
                    "id" => 3526,
                    "country_id" => 219,
                    "name" => "Chumphon"
                ],
                [
                    "id" => 3527,
                    "country_id" => 219,
                    "name" => "Udon Thani"
                ],
                [
                    "id" => 3528,
                    "country_id" => 219,
                    "name" => "Phrae"
                ],
                [
                    "id" => 3529,
                    "country_id" => 219,
                    "name" => "Sa Kaeo"
                ],
                [
                    "id" => 3530,
                    "country_id" => 219,
                    "name" => "Nan"
                ],
                [
                    "id" => 3531,
                    "country_id" => 219,
                    "name" => "Surin"
                ],
                [
                    "id" => 3532,
                    "country_id" => 219,
                    "name" => "Phetchaburi"
                ],
                [
                    "id" => 3533,
                    "country_id" => 219,
                    "name" => "Bueng Kan"
                ],
                [
                    "id" => 3534,
                    "country_id" => 219,
                    "name" => "Buri Ram"
                ],
                [
                    "id" => 3535,
                    "country_id" => 219,
                    "name" => "Nakhon Nayok"
                ],
                [
                    "id" => 3536,
                    "country_id" => 219,
                    "name" => "Phuket"
                ],
                [
                    "id" => 3537,
                    "country_id" => 219,
                    "name" => "Satun"
                ],
                [
                    "id" => 3538,
                    "country_id" => 219,
                    "name" => "Phayao"
                ],
                [
                    "id" => 3539,
                    "country_id" => 219,
                    "name" => "Songkhla"
                ],
                [
                    "id" => 3540,
                    "country_id" => 219,
                    "name" => "Pattani"
                ],
                [
                    "id" => 3541,
                    "country_id" => 219,
                    "name" => "Trang"
                ],
                [
                    "id" => 3542,
                    "country_id" => 219,
                    "name" => "Prachin Buri"
                ],
                [
                    "id" => 3543,
                    "country_id" => 219,
                    "name" => "Lop Buri"
                ],
                [
                    "id" => 3544,
                    "country_id" => 219,
                    "name" => "Lampang"
                ],
                [
                    "id" => 3545,
                    "country_id" => 219,
                    "name" => "Sukhothai"
                ],
                [
                    "id" => 3546,
                    "country_id" => 219,
                    "name" => "Mukdahan"
                ],
                [
                    "id" => 3547,
                    "country_id" => 219,
                    "name" => "Si Sa Ket"
                ],
                [
                    "id" => 3548,
                    "country_id" => 219,
                    "name" => "Nakhon Phanom"
                ],
                [
                    "id" => 3549,
                    "country_id" => 219,
                    "name" => "Phangnga"
                ],
                [
                    "id" => 3550,
                    "country_id" => 219,
                    "name" => "Kalasin"
                ],
                [
                    "id" => 3551,
                    "country_id" => 219,
                    "name" => "Uthai Thani"
                ],
                [
                    "id" => 3552,
                    "country_id" => 219,
                    "name" => "Chachoengsao"
                ],
                [
                    "id" => 3553,
                    "country_id" => 219,
                    "name" => "Narathiwat"
                ],
                [
                    "id" => 3554,
                    "country_id" => 219,
                    "name" => "Bangkok"
                ],
                [
                    "id" => 3555,
                    "country_id" => 69,
                    "name" => "Hiiu County"
                ],
                [
                    "id" => 3556,
                    "country_id" => 69,
                    "name" => "Viljandi County"
                ],
                [
                    "id" => 3557,
                    "country_id" => 69,
                    "name" => "Tartu County"
                ],
                [
                    "id" => 3558,
                    "country_id" => 69,
                    "name" => "Valga County"
                ],
                [
                    "id" => 3559,
                    "country_id" => 69,
                    "name" => "Rapla County"
                ],
                [
                    "id" => 3560,
                    "country_id" => 69,
                    "name" => "Võru County"
                ],
                [
                    "id" => 3561,
                    "country_id" => 69,
                    "name" => "Saare County"
                ],
                [
                    "id" => 3562,
                    "country_id" => 69,
                    "name" => "Pärnu County"
                ],
                [
                    "id" => 3563,
                    "country_id" => 69,
                    "name" => "Põlva County"
                ],
                [
                    "id" => 3564,
                    "country_id" => 69,
                    "name" => "Lääne-Viru County"
                ],
                [
                    "id" => 3565,
                    "country_id" => 69,
                    "name" => "Jõgeva County"
                ],
                [
                    "id" => 3566,
                    "country_id" => 69,
                    "name" => "Järva County"
                ],
                [
                    "id" => 3567,
                    "country_id" => 69,
                    "name" => "Harju County"
                ],
                [
                    "id" => 3568,
                    "country_id" => 69,
                    "name" => "Lääne County"
                ],
                [
                    "id" => 3569,
                    "country_id" => 69,
                    "name" => "Ida-Viru County"
                ],
                [
                    "id" => 3570,
                    "country_id" => 43,
                    "name" => "Moyen-Chari"
                ],
                [
                    "id" => 3571,
                    "country_id" => 43,
                    "name" => "Mayo-Kebbi Ouest"
                ],
                [
                    "id" => 3572,
                    "country_id" => 43,
                    "name" => "Sila"
                ],
                [
                    "id" => 3573,
                    "country_id" => 43,
                    "name" => "Hadjer-Lamis"
                ],
                [
                    "id" => 3574,
                    "country_id" => 43,
                    "name" => "Borkou"
                ],
                [
                    "id" => 3575,
                    "country_id" => 43,
                    "name" => "Ennedi-Est"
                ],
                [
                    "id" => 3576,
                    "country_id" => 43,
                    "name" => "Guéra"
                ],
                [
                    "id" => 3577,
                    "country_id" => 43,
                    "name" => "Lac"
                ],
                [
                    "id" => 3579,
                    "country_id" => 43,
                    "name" => "Tandjilé"
                ],
                [
                    "id" => 3580,
                    "country_id" => 43,
                    "name" => "Mayo-Kebbi Est"
                ],
                [
                    "id" => 3581,
                    "country_id" => 43,
                    "name" => "Wadi Fira"
                ],
                [
                    "id" => 3582,
                    "country_id" => 43,
                    "name" => "Ouaddaï"
                ],
                [
                    "id" => 3583,
                    "country_id" => 43,
                    "name" => "Bahr el Gazel"
                ],
                [
                    "id" => 3584,
                    "country_id" => 43,
                    "name" => "Ennedi-Ouest"
                ],
                [
                    "id" => 3585,
                    "country_id" => 43,
                    "name" => "Logone Occidental"
                ],
                [
                    "id" => 3586,
                    "country_id" => 43,
                    "name" => "N'Djamena"
                ],
                [
                    "id" => 3587,
                    "country_id" => 43,
                    "name" => "Tibesti"
                ],
                [
                    "id" => 3588,
                    "country_id" => 43,
                    "name" => "Kanem"
                ],
                [
                    "id" => 3589,
                    "country_id" => 43,
                    "name" => "Mandoul"
                ],
                [
                    "id" => 3590,
                    "country_id" => 43,
                    "name" => "Batha"
                ],
                [
                    "id" => 3591,
                    "country_id" => 43,
                    "name" => "Logone Oriental"
                ],
                [
                    "id" => 3592,
                    "country_id" => 43,
                    "name" => "Salamat"
                ],
                [
                    "id" => 3593,
                    "country_id" => 17,
                    "name" => "Berry Islands"
                ],
                [
                    "id" => 3594,
                    "country_id" => 17,
                    "name" => "Nichollstown and Berry Islands"
                ],
                [
                    "id" => 3595,
                    "country_id" => 17,
                    "name" => "Green Turtle Cay"
                ],
                [
                    "id" => 3596,
                    "country_id" => 17,
                    "name" => "Central Eleuthera"
                ],
                [
                    "id" => 3597,
                    "country_id" => 17,
                    "name" => "Governor's Harbour"
                ],
                [
                    "id" => 3598,
                    "country_id" => 17,
                    "name" => "High Rock"
                ],
                [
                    "id" => 3599,
                    "country_id" => 17,
                    "name" => "West Grand Bahama"
                ],
                [
                    "id" => 3600,
                    "country_id" => 17,
                    "name" => "Rum Cay District"
                ],
                [
                    "id" => 3601,
                    "country_id" => 17,
                    "name" => "Acklins"
                ],
                [
                    "id" => 3602,
                    "country_id" => 17,
                    "name" => "North Eleuthera"
                ],
                [
                    "id" => 3603,
                    "country_id" => 17,
                    "name" => "Central Abaco"
                ],
                [
                    "id" => 3604,
                    "country_id" => 17,
                    "name" => "Marsh Harbour"
                ],
                [
                    "id" => 3605,
                    "country_id" => 17,
                    "name" => "Black Point"
                ],
                [
                    "id" => 3606,
                    "country_id" => 17,
                    "name" => "Sandy Point"
                ],
                [
                    "id" => 3607,
                    "country_id" => 17,
                    "name" => "South Eleuthera"
                ],
                [
                    "id" => 3608,
                    "country_id" => 17,
                    "name" => "South Abaco"
                ],
                [
                    "id" => 3609,
                    "country_id" => 17,
                    "name" => "Inagua"
                ],
                [
                    "id" => 3610,
                    "country_id" => 17,
                    "name" => "Long Island"
                ],
                [
                    "id" => 3611,
                    "country_id" => 17,
                    "name" => "Cat Island"
                ],
                [
                    "id" => 3612,
                    "country_id" => 17,
                    "name" => "Exuma"
                ],
                [
                    "id" => 3613,
                    "country_id" => 17,
                    "name" => "Harbour Island"
                ],
                [
                    "id" => 3614,
                    "country_id" => 17,
                    "name" => "East Grand Bahama"
                ],
                [
                    "id" => 3615,
                    "country_id" => 17,
                    "name" => "Ragged Island"
                ],
                [
                    "id" => 3616,
                    "country_id" => 17,
                    "name" => "North Abaco"
                ],
                [
                    "id" => 3617,
                    "country_id" => 17,
                    "name" => "North Andros"
                ],
                [
                    "id" => 3618,
                    "country_id" => 17,
                    "name" => "Kemps Bay"
                ],
                [
                    "id" => 3619,
                    "country_id" => 17,
                    "name" => "Fresh Creek"
                ],
                [
                    "id" => 3620,
                    "country_id" => 17,
                    "name" => "San Salvador and Rum Cay"
                ],
                [
                    "id" => 3621,
                    "country_id" => 17,
                    "name" => "Crooked Island"
                ],
                [
                    "id" => 3622,
                    "country_id" => 17,
                    "name" => "South Andros"
                ],
                [
                    "id" => 3623,
                    "country_id" => 17,
                    "name" => "Rock Sound"
                ],
                [
                    "id" => 3624,
                    "country_id" => 17,
                    "name" => "Hope Town"
                ],
                [
                    "id" => 3625,
                    "country_id" => 17,
                    "name" => "Mangrove Cay"
                ],
                [
                    "id" => 3626,
                    "country_id" => 17,
                    "name" => "Freeport"
                ],
                [
                    "id" => 3627,
                    "country_id" => 17,
                    "name" => "San Salvador Island"
                ],
                [
                    "id" => 3628,
                    "country_id" => 17,
                    "name" => "Acklins and Crooked Islands"
                ],
                [
                    "id" => 3629,
                    "country_id" => 17,
                    "name" => "Bimini"
                ],
                [
                    "id" => 3630,
                    "country_id" => 17,
                    "name" => "Spanish Wells"
                ],
                [
                    "id" => 3631,
                    "country_id" => 17,
                    "name" => "Central Andros"
                ],
                [
                    "id" => 3632,
                    "country_id" => 17,
                    "name" => "Grand Cay"
                ],
                [
                    "id" => 3633,
                    "country_id" => 17,
                    "name" => "Mayaguana District"
                ],
                [
                    "id" => 3634,
                    "country_id" => 11,
                    "name" => "San Juan"
                ],
                [
                    "id" => 3635,
                    "country_id" => 11,
                    "name" => "Santiago del Estero"
                ],
                [
                    "id" => 3636,
                    "country_id" => 11,
                    "name" => "San Luis"
                ],
                [
                    "id" => 3637,
                    "country_id" => 11,
                    "name" => "Tucumán"
                ],
                [
                    "id" => 3638,
                    "country_id" => 11,
                    "name" => "Corrientes"
                ],
                [
                    "id" => 3639,
                    "country_id" => 11,
                    "name" => "Río Negro"
                ],
                [
                    "id" => 3640,
                    "country_id" => 11,
                    "name" => "Chaco"
                ],
                [
                    "id" => 3641,
                    "country_id" => 11,
                    "name" => "Santa Fe"
                ],
                [
                    "id" => 3642,
                    "country_id" => 11,
                    "name" => "Córdoba"
                ],
                [
                    "id" => 3643,
                    "country_id" => 11,
                    "name" => "Salta"
                ],
                [
                    "id" => 3644,
                    "country_id" => 11,
                    "name" => "Misiones"
                ],
                [
                    "id" => 3645,
                    "country_id" => 11,
                    "name" => "Jujuy"
                ],
                [
                    "id" => 3646,
                    "country_id" => 11,
                    "name" => "Mendoza"
                ],
                [
                    "id" => 3647,
                    "country_id" => 11,
                    "name" => "Catamarca"
                ],
                [
                    "id" => 3648,
                    "country_id" => 11,
                    "name" => "Neuquén"
                ],
                [
                    "id" => 3649,
                    "country_id" => 11,
                    "name" => "Santa Cruz"
                ],
                [
                    "id" => 3650,
                    "country_id" => 11,
                    "name" => "Tierra del Fuego"
                ],
                [
                    "id" => 3651,
                    "country_id" => 11,
                    "name" => "Chubut"
                ],
                [
                    "id" => 3652,
                    "country_id" => 11,
                    "name" => "Formosa"
                ],
                [
                    "id" => 3653,
                    "country_id" => 11,
                    "name" => "La Rioja"
                ],
                [
                    "id" => 3654,
                    "country_id" => 11,
                    "name" => "Entre Ríos"
                ],
                [
                    "id" => 3655,
                    "country_id" => 11,
                    "name" => "La Pampa"
                ],
                [
                    "id" => 3656,
                    "country_id" => 11,
                    "name" => "Buenos Aires"
                ],
                [
                    "id" => 3657,
                    "country_id" => 90,
                    "name" => "Quiché Department"
                ],
                [
                    "id" => 3658,
                    "country_id" => 90,
                    "name" => "Jalapa Department"
                ],
                [
                    "id" => 3659,
                    "country_id" => 90,
                    "name" => "Izabal Department"
                ],
                [
                    "id" => 3660,
                    "country_id" => 90,
                    "name" => "Suchitepéquez Department"
                ],
                [
                    "id" => 3661,
                    "country_id" => 90,
                    "name" => "Sololá Department"
                ],
                [
                    "id" => 3662,
                    "country_id" => 90,
                    "name" => "El Progreso Department"
                ],
                [
                    "id" => 3663,
                    "country_id" => 90,
                    "name" => "Totonicapán Department"
                ],
                [
                    "id" => 3664,
                    "country_id" => 90,
                    "name" => "Retalhuleu Department"
                ],
                [
                    "id" => 3665,
                    "country_id" => 90,
                    "name" => "Santa Rosa Department"
                ],
                [
                    "id" => 3666,
                    "country_id" => 90,
                    "name" => "Chiquimula Department"
                ],
                [
                    "id" => 3667,
                    "country_id" => 90,
                    "name" => "San Marcos Department"
                ],
                [
                    "id" => 3668,
                    "country_id" => 90,
                    "name" => "Quetzaltenango Department"
                ],
                [
                    "id" => 3669,
                    "country_id" => 90,
                    "name" => "Petén Department"
                ],
                [
                    "id" => 3670,
                    "country_id" => 90,
                    "name" => "Huehuetenango Department"
                ],
                [
                    "id" => 3671,
                    "country_id" => 90,
                    "name" => "Alta Verapaz Department"
                ],
                [
                    "id" => 3672,
                    "country_id" => 90,
                    "name" => "Guatemala Department"
                ],
                [
                    "id" => 3673,
                    "country_id" => 90,
                    "name" => "Jutiapa Department"
                ],
                [
                    "id" => 3674,
                    "country_id" => 90,
                    "name" => "Baja Verapaz Department"
                ],
                [
                    "id" => 3675,
                    "country_id" => 90,
                    "name" => "Chimaltenango Department"
                ],
                [
                    "id" => 3676,
                    "country_id" => 90,
                    "name" => "Sacatepéquez Department"
                ],
                [
                    "id" => 3677,
                    "country_id" => 90,
                    "name" => "Escuintla Department"
                ],
                [
                    "id" => 3678,
                    "country_id" => 173,
                    "name" => "Madre de Dios"
                ],
                [
                    "id" => 3679,
                    "country_id" => 173,
                    "name" => "Huancavelica"
                ],
                [
                    "id" => 3680,
                    "country_id" => 173,
                    "name" => "Áncash"
                ],
                [
                    "id" => 3681,
                    "country_id" => 173,
                    "name" => "Arequipa"
                ],
                [
                    "id" => 3682,
                    "country_id" => 173,
                    "name" => "Puno"
                ],
                [
                    "id" => 3683,
                    "country_id" => 173,
                    "name" => "La Libertad"
                ],
                [
                    "id" => 3684,
                    "country_id" => 173,
                    "name" => "Ucayali"
                ],
                [
                    "id" => 3685,
                    "country_id" => 173,
                    "name" => "Amazonas"
                ],
                [
                    "id" => 3686,
                    "country_id" => 173,
                    "name" => "Pasco"
                ],
                [
                    "id" => 3687,
                    "country_id" => 173,
                    "name" => "Huanuco"
                ],
                [
                    "id" => 3688,
                    "country_id" => 173,
                    "name" => "Cajamarca"
                ],
                [
                    "id" => 3689,
                    "country_id" => 173,
                    "name" => "Tumbes"
                ],
                [
                    "id" => 3691,
                    "country_id" => 173,
                    "name" => "Cusco"
                ],
                [
                    "id" => 3692,
                    "country_id" => 173,
                    "name" => "Ayacucho"
                ],
                [
                    "id" => 3693,
                    "country_id" => 173,
                    "name" => "Junín"
                ],
                [
                    "id" => 3694,
                    "country_id" => 173,
                    "name" => "San Martín"
                ],
                [
                    "id" => 3695,
                    "country_id" => 173,
                    "name" => "Lima"
                ],
                [
                    "id" => 3696,
                    "country_id" => 173,
                    "name" => "Tacna"
                ],
                [
                    "id" => 3697,
                    "country_id" => 173,
                    "name" => "Piura"
                ],
                [
                    "id" => 3698,
                    "country_id" => 173,
                    "name" => "Moquegua"
                ],
                [
                    "id" => 3699,
                    "country_id" => 173,
                    "name" => "Apurímac"
                ],
                [
                    "id" => 3700,
                    "country_id" => 173,
                    "name" => "Ica"
                ],
                [
                    "id" => 3701,
                    "country_id" => 173,
                    "name" => "Callao"
                ],
                [
                    "id" => 3702,
                    "country_id" => 173,
                    "name" => "Lambayeque"
                ],
                [
                    "id" => 3703,
                    "country_id" => 10,
                    "name" => "Redonda"
                ],
                [
                    "id" => 3704,
                    "country_id" => 10,
                    "name" => "Saint Peter Parish"
                ],
                [
                    "id" => 3705,
                    "country_id" => 10,
                    "name" => "Saint Paul Parish"
                ],
                [
                    "id" => 3706,
                    "country_id" => 10,
                    "name" => "Saint John Parish"
                ],
                [
                    "id" => 3707,
                    "country_id" => 10,
                    "name" => "Saint Mary Parish"
                ],
                [
                    "id" => 3708,
                    "country_id" => 10,
                    "name" => "Barbuda"
                ],
                [
                    "id" => 3709,
                    "country_id" => 10,
                    "name" => "Saint George Parish"
                ],
                [
                    "id" => 3710,
                    "country_id" => 10,
                    "name" => "Saint Philip Parish"
                ],
                [
                    "id" => 3711,
                    "country_id" => 196,
                    "name" => "South Bačka District"
                ],
                [
                    "id" => 3712,
                    "country_id" => 196,
                    "name" => "Pirot District"
                ],
                [
                    "id" => 3713,
                    "country_id" => 196,
                    "name" => "South Banat District"
                ],
                [
                    "id" => 3714,
                    "country_id" => 196,
                    "name" => "North Bačka District"
                ],
                [
                    "id" => 3715,
                    "country_id" => 196,
                    "name" => "Jablanica District"
                ],
                [
                    "id" => 3716,
                    "country_id" => 196,
                    "name" => "Central Banat District"
                ],
                [
                    "id" => 3717,
                    "country_id" => 196,
                    "name" => "Bor District"
                ],
                [
                    "id" => 3718,
                    "country_id" => 196,
                    "name" => "Toplica District"
                ],
                [
                    "id" => 3719,
                    "country_id" => 196,
                    "name" => "Mačva District"
                ],
                [
                    "id" => 3720,
                    "country_id" => 196,
                    "name" => "Rasina District"
                ],
                [
                    "id" => 3721,
                    "country_id" => 196,
                    "name" => "Pčinja District"
                ],
                [
                    "id" => 3722,
                    "country_id" => 196,
                    "name" => "Nišava District"
                ],
                [
                    "id" => 3723,
                    "country_id" => 248,
                    "name" => "Prizren District"
                ],
                [
                    "id" => 3724,
                    "country_id" => 196,
                    "name" => "Kolubara District"
                ],
                [
                    "id" => 3725,
                    "country_id" => 196,
                    "name" => "Raška District"
                ],
                [
                    "id" => 3726,
                    "country_id" => 196,
                    "name" => "West Bačka District"
                ],
                [
                    "id" => 3727,
                    "country_id" => 196,
                    "name" => "Moravica District"
                ],
                [
                    "id" => 3728,
                    "country_id" => 196,
                    "name" => "Belgrade"
                ],
                [
                    "id" => 3729,
                    "country_id" => 196,
                    "name" => "Zlatibor District"
                ],
                [
                    "id" => 3731,
                    "country_id" => 196,
                    "name" => "Zaječar District"
                ],
                [
                    "id" => 3732,
                    "country_id" => 196,
                    "name" => "Braničevo District"
                ],
                [
                    "id" => 3733,
                    "country_id" => 196,
                    "name" => "Vojvodina"
                ],
                [
                    "id" => 3734,
                    "country_id" => 196,
                    "name" => "Šumadija District"
                ],
                [
                    "id" => 3736,
                    "country_id" => 196,
                    "name" => "North Banat District"
                ],
                [
                    "id" => 3737,
                    "country_id" => 196,
                    "name" => "Pomoravlje District"
                ],
                [
                    "id" => 3738,
                    "country_id" => 248,
                    "name" => "Peć District"
                ],
                [
                    "id" => 3740,
                    "country_id" => 196,
                    "name" => "Srem District"
                ],
                [
                    "id" => 3741,
                    "country_id" => 196,
                    "name" => "Podunavlje District"
                ],
                [
                    "id" => 3742,
                    "country_id" => 108,
                    "name" => "Westmoreland Parish"
                ],
                [
                    "id" => 3743,
                    "country_id" => 108,
                    "name" => "Saint Elizabeth Parish"
                ],
                [
                    "id" => 3744,
                    "country_id" => 108,
                    "name" => "Saint Ann Parish"
                ],
                [
                    "id" => 3745,
                    "country_id" => 108,
                    "name" => "Saint James Parish"
                ],
                [
                    "id" => 3746,
                    "country_id" => 108,
                    "name" => "Saint Catherine Parish"
                ],
                [
                    "id" => 3747,
                    "country_id" => 108,
                    "name" => "Saint Mary Parish"
                ],
                [
                    "id" => 3748,
                    "country_id" => 108,
                    "name" => "Kingston Parish"
                ],
                [
                    "id" => 3749,
                    "country_id" => 108,
                    "name" => "Hanover Parish"
                ],
                [
                    "id" => 3750,
                    "country_id" => 108,
                    "name" => "Saint Thomas Parish"
                ],
                [
                    "id" => 3751,
                    "country_id" => 108,
                    "name" => "Saint Andrew"
                ],
                [
                    "id" => 3752,
                    "country_id" => 108,
                    "name" => "Portland Parish"
                ],
                [
                    "id" => 3753,
                    "country_id" => 108,
                    "name" => "Clarendon Parish"
                ],
                [
                    "id" => 3754,
                    "country_id" => 108,
                    "name" => "Manchester Parish"
                ],
                [
                    "id" => 3755,
                    "country_id" => 108,
                    "name" => "Trelawny Parish"
                ],
                [
                    "id" => 3756,
                    "country_id" => 186,
                    "name" => "Dennery Quarter"
                ],
                [
                    "id" => 3757,
                    "country_id" => 186,
                    "name" => "Anse la Raye Quarter"
                ],
                [
                    "id" => 3758,
                    "country_id" => 186,
                    "name" => "Castries Quarter"
                ],
                [
                    "id" => 3759,
                    "country_id" => 186,
                    "name" => "Laborie Quarter"
                ],
                [
                    "id" => 3760,
                    "country_id" => 186,
                    "name" => "Choiseul Quarter"
                ],
                [
                    "id" => 3761,
                    "country_id" => 186,
                    "name" => "Canaries"
                ],
                [
                    "id" => 3762,
                    "country_id" => 186,
                    "name" => "Micoud Quarter"
                ],
                [
                    "id" => 3763,
                    "country_id" => 186,
                    "name" => "Vieux Fort Quarter"
                ],
                [
                    "id" => 3764,
                    "country_id" => 186,
                    "name" => "Soufrière Quarter"
                ],
                [
                    "id" => 3765,
                    "country_id" => 186,
                    "name" => "Praslin Quarter"
                ],
                [
                    "id" => 3766,
                    "country_id" => 186,
                    "name" => "Gros Islet Quarter"
                ],
                [
                    "id" => 3767,
                    "country_id" => 186,
                    "name" => "Dauphin Quarter"
                ],
                [
                    "id" => 3768,
                    "country_id" => 240,
                    "name" => "Hưng Yên"
                ],
                [
                    "id" => 3769,
                    "country_id" => 240,
                    "name" => "Đồng Tháp"
                ],
                [
                    "id" => 3770,
                    "country_id" => 240,
                    "name" => "Bà Rịa-Vũng Tàu"
                ],
                [
                    "id" => 3771,
                    "country_id" => 240,
                    "name" => "Thanh Hóa"
                ],
                [
                    "id" => 3772,
                    "country_id" => 240,
                    "name" => "Kon Tum"
                ],
                [
                    "id" => 3773,
                    "country_id" => 240,
                    "name" => "Điện Biên"
                ],
                [
                    "id" => 3774,
                    "country_id" => 240,
                    "name" => "Vĩnh Phúc"
                ],
                [
                    "id" => 3775,
                    "country_id" => 240,
                    "name" => "Thái Bình"
                ],
                [
                    "id" => 3776,
                    "country_id" => 240,
                    "name" => "Quảng Nam"
                ],
                [
                    "id" => 3777,
                    "country_id" => 240,
                    "name" => "Hậu Giang"
                ],
                [
                    "id" => 3778,
                    "country_id" => 240,
                    "name" => "Cà Mau"
                ],
                [
                    "id" => 3779,
                    "country_id" => 240,
                    "name" => "Hà Giang"
                ],
                [
                    "id" => 3780,
                    "country_id" => 240,
                    "name" => "Nghệ An"
                ],
                [
                    "id" => 3781,
                    "country_id" => 240,
                    "name" => "Tiền Giang"
                ],
                [
                    "id" => 3782,
                    "country_id" => 240,
                    "name" => "Cao Bằng"
                ],
                [
                    "id" => 3783,
                    "country_id" => 240,
                    "name" => "Hải Phòng"
                ],
                [
                    "id" => 3784,
                    "country_id" => 240,
                    "name" => "Yên Bái"
                ],
                [
                    "id" => 3785,
                    "country_id" => 240,
                    "name" => "Bình Dương"
                ],
                [
                    "id" => 3786,
                    "country_id" => 240,
                    "name" => "Ninh Bình"
                ],
                [
                    "id" => 3787,
                    "country_id" => 240,
                    "name" => "Bình Thuận"
                ],
                [
                    "id" => 3788,
                    "country_id" => 240,
                    "name" => "Ninh Thuận"
                ],
                [
                    "id" => 3789,
                    "country_id" => 240,
                    "name" => "Nam Định"
                ],
                [
                    "id" => 3790,
                    "country_id" => 240,
                    "name" => "Vĩnh Long"
                ],
                [
                    "id" => 3791,
                    "country_id" => 240,
                    "name" => "Bắc Ninh"
                ],
                [
                    "id" => 3792,
                    "country_id" => 240,
                    "name" => "Lạng Sơn"
                ],
                [
                    "id" => 3793,
                    "country_id" => 240,
                    "name" => "Khánh Hòa"
                ],
                [
                    "id" => 3794,
                    "country_id" => 240,
                    "name" => "An Giang"
                ],
                [
                    "id" => 3795,
                    "country_id" => 240,
                    "name" => "Tuyên Quang"
                ],
                [
                    "id" => 3796,
                    "country_id" => 240,
                    "name" => "Bến Tre"
                ],
                [
                    "id" => 3797,
                    "country_id" => 240,
                    "name" => "Bình Phước"
                ],
                [
                    "id" => 3798,
                    "country_id" => 240,
                    "name" => "Thừa Thiên-Huế"
                ],
                [
                    "id" => 3799,
                    "country_id" => 240,
                    "name" => "Hòa Bình"
                ],
                [
                    "id" => 3800,
                    "country_id" => 240,
                    "name" => "Kiên Giang"
                ],
                [
                    "id" => 3801,
                    "country_id" => 240,
                    "name" => "Phú Thọ"
                ],
                [
                    "id" => 3802,
                    "country_id" => 240,
                    "name" => "Hà Nam"
                ],
                [
                    "id" => 3803,
                    "country_id" => 240,
                    "name" => "Quảng Trị"
                ],
                [
                    "id" => 3804,
                    "country_id" => 240,
                    "name" => "Bạc Liêu"
                ],
                [
                    "id" => 3805,
                    "country_id" => 240,
                    "name" => "Trà Vinh"
                ],
                [
                    "id" => 3806,
                    "country_id" => 240,
                    "name" => "Đà Nẵng"
                ],
                [
                    "id" => 3807,
                    "country_id" => 240,
                    "name" => "Thái Nguyên"
                ],
                [
                    "id" => 3808,
                    "country_id" => 240,
                    "name" => "Long An"
                ],
                [
                    "id" => 3809,
                    "country_id" => 240,
                    "name" => "Quảng Bình"
                ],
                [
                    "id" => 3810,
                    "country_id" => 240,
                    "name" => "Hà Nội"
                ],
                [
                    "id" => 3811,
                    "country_id" => 240,
                    "name" => "Hồ Chí Minh"
                ],
                [
                    "id" => 3812,
                    "country_id" => 240,
                    "name" => "Sơn La"
                ],
                [
                    "id" => 3813,
                    "country_id" => 240,
                    "name" => "Gia Lai"
                ],
                [
                    "id" => 3814,
                    "country_id" => 240,
                    "name" => "Quảng Ninh"
                ],
                [
                    "id" => 3815,
                    "country_id" => 240,
                    "name" => "Bắc Giang"
                ],
                [
                    "id" => 3816,
                    "country_id" => 240,
                    "name" => "Hà Tĩnh"
                ],
                [
                    "id" => 3817,
                    "country_id" => 240,
                    "name" => "Lào Cai"
                ],
                [
                    "id" => 3818,
                    "country_id" => 240,
                    "name" => "Lâm Đồng"
                ],
                [
                    "id" => 3819,
                    "country_id" => 240,
                    "name" => "Sóc Trăng"
                ],
                [
                    "id" => 3821,
                    "country_id" => 240,
                    "name" => "Đồng Nai"
                ],
                [
                    "id" => 3822,
                    "country_id" => 240,
                    "name" => "Bắc Kạn"
                ],
                [
                    "id" => 3823,
                    "country_id" => 240,
                    "name" => "Đắk Nông"
                ],
                [
                    "id" => 3824,
                    "country_id" => 240,
                    "name" => "Phú Yên"
                ],
                [
                    "id" => 3825,
                    "country_id" => 240,
                    "name" => "Lai Châu"
                ],
                [
                    "id" => 3826,
                    "country_id" => 240,
                    "name" => "Tây Ninh"
                ],
                [
                    "id" => 3827,
                    "country_id" => 240,
                    "name" => "Hải Dương"
                ],
                [
                    "id" => 3828,
                    "country_id" => 240,
                    "name" => "Quảng Ngãi"
                ],
                [
                    "id" => 3829,
                    "country_id" => 240,
                    "name" => "Đắk Lắk"
                ],
                [
                    "id" => 3830,
                    "country_id" => 240,
                    "name" => "Bình Định"
                ],
                [
                    "id" => 3831,
                    "country_id" => 185,
                    "name" => "Saint Peter Basseterre Parish"
                ],
                [
                    "id" => 3832,
                    "country_id" => 185,
                    "name" => "Nevis"
                ],
                [
                    "id" => 3833,
                    "country_id" => 185,
                    "name" => "Christ Church Nichola Town Parish"
                ],
                [
                    "id" => 3834,
                    "country_id" => 185,
                    "name" => "Saint Paul Capisterre Parish"
                ],
                [
                    "id" => 3835,
                    "country_id" => 185,
                    "name" => "Saint James Windward Parish"
                ],
                [
                    "id" => 3836,
                    "country_id" => 185,
                    "name" => "Saint Anne Sandy Point Parish"
                ],
                [
                    "id" => 3837,
                    "country_id" => 185,
                    "name" => "Saint George Gingerland Parish"
                ],
                [
                    "id" => 3838,
                    "country_id" => 185,
                    "name" => "Saint Paul Charlestown Parish"
                ],
                [
                    "id" => 3839,
                    "country_id" => 185,
                    "name" => "Saint Thomas Lowland Parish"
                ],
                [
                    "id" => 3840,
                    "country_id" => 185,
                    "name" => "Saint John Figtree Parish"
                ],
                [
                    "id" => 3841,
                    "country_id" => 185,
                    "name" => "Saint Kitts"
                ],
                [
                    "id" => 3842,
                    "country_id" => 185,
                    "name" => "Saint Thomas Middle Island Parish"
                ],
                [
                    "id" => 3843,
                    "country_id" => 185,
                    "name" => "Trinity Palmetto Point Parish"
                ],
                [
                    "id" => 3844,
                    "country_id" => 185,
                    "name" => "Saint Mary Cayon Parish"
                ],
                [
                    "id" => 3845,
                    "country_id" => 185,
                    "name" => "Saint John Capisterre Parish"
                ],
                [
                    "id" => 3846,
                    "country_id" => 116,
                    "name" => "Daegu"
                ],
                [
                    "id" => 3847,
                    "country_id" => 116,
                    "name" => "Gyeonggi Province"
                ],
                [
                    "id" => 3848,
                    "country_id" => 116,
                    "name" => "Incheon"
                ],
                [
                    "id" => 3849,
                    "country_id" => 116,
                    "name" => "Seoul"
                ],
                [
                    "id" => 3850,
                    "country_id" => 116,
                    "name" => "Daejeon"
                ],
                [
                    "id" => 3851,
                    "country_id" => 116,
                    "name" => "North Jeolla Province"
                ],
                [
                    "id" => 3852,
                    "country_id" => 116,
                    "name" => "Ulsan"
                ],
                [
                    "id" => 3853,
                    "country_id" => 116,
                    "name" => "Jeju"
                ],
                [
                    "id" => 3854,
                    "country_id" => 116,
                    "name" => "North Chungcheong Province"
                ],
                [
                    "id" => 3855,
                    "country_id" => 116,
                    "name" => "North Gyeongsang Province"
                ],
                [
                    "id" => 3856,
                    "country_id" => 116,
                    "name" => "South Jeolla Province"
                ],
                [
                    "id" => 3857,
                    "country_id" => 116,
                    "name" => "South Gyeongsang Province"
                ],
                [
                    "id" => 3858,
                    "country_id" => 116,
                    "name" => "Gwangju"
                ],
                [
                    "id" => 3859,
                    "country_id" => 116,
                    "name" => "South Chungcheong Province"
                ],
                [
                    "id" => 3860,
                    "country_id" => 116,
                    "name" => "Busan"
                ],
                [
                    "id" => 3861,
                    "country_id" => 116,
                    "name" => "Sejong City"
                ],
                [
                    "id" => 3862,
                    "country_id" => 116,
                    "name" => "Gangwon Province"
                ],
                [
                    "id" => 3863,
                    "country_id" => 87,
                    "name" => "Saint Patrick Parish"
                ],
                [
                    "id" => 3864,
                    "country_id" => 87,
                    "name" => "Saint George Parish"
                ],
                [
                    "id" => 3865,
                    "country_id" => 87,
                    "name" => "Saint Andrew Parish"
                ],
                [
                    "id" => 3866,
                    "country_id" => 87,
                    "name" => "Saint Mark Parish"
                ],
                [
                    "id" => 3867,
                    "country_id" => 87,
                    "name" => "Carriacou and Petite Martinique"
                ],
                [
                    "id" => 3868,
                    "country_id" => 87,
                    "name" => "Saint John Parish"
                ],
                [
                    "id" => 3869,
                    "country_id" => 87,
                    "name" => "Saint David Parish"
                ],
                [
                    "id" => 3870,
                    "country_id" => 1,
                    "name" => "Ghazni"
                ],
                [
                    "id" => 3871,
                    "country_id" => 1,
                    "name" => "Badghis"
                ],
                [
                    "id" => 3872,
                    "country_id" => 1,
                    "name" => "Bamyan"
                ],
                [
                    "id" => 3873,
                    "country_id" => 1,
                    "name" => "Helmand"
                ],
                [
                    "id" => 3874,
                    "country_id" => 1,
                    "name" => "Zabul"
                ],
                [
                    "id" => 3875,
                    "country_id" => 1,
                    "name" => "Baghlan"
                ],
                [
                    "id" => 3876,
                    "country_id" => 1,
                    "name" => "Kunar"
                ],
                [
                    "id" => 3877,
                    "country_id" => 1,
                    "name" => "Paktika"
                ],
                [
                    "id" => 3878,
                    "country_id" => 1,
                    "name" => "Khost"
                ],
                [
                    "id" => 3879,
                    "country_id" => 1,
                    "name" => "Kapisa"
                ],
                [
                    "id" => 3880,
                    "country_id" => 1,
                    "name" => "Nuristan"
                ],
                [
                    "id" => 3881,
                    "country_id" => 1,
                    "name" => "Panjshir"
                ],
                [
                    "id" => 3882,
                    "country_id" => 1,
                    "name" => "Nangarhar"
                ],
                [
                    "id" => 3883,
                    "country_id" => 1,
                    "name" => "Samangan"
                ],
                [
                    "id" => 3884,
                    "country_id" => 1,
                    "name" => "Balkh"
                ],
                [
                    "id" => 3885,
                    "country_id" => 1,
                    "name" => "Sar-e Pol"
                ],
                [
                    "id" => 3886,
                    "country_id" => 1,
                    "name" => "Jowzjan"
                ],
                [
                    "id" => 3887,
                    "country_id" => 1,
                    "name" => "Herat"
                ],
                [
                    "id" => 3888,
                    "country_id" => 1,
                    "name" => "Ghōr"
                ],
                [
                    "id" => 3889,
                    "country_id" => 1,
                    "name" => "Faryab"
                ],
                [
                    "id" => 3890,
                    "country_id" => 1,
                    "name" => "Kandahar"
                ],
                [
                    "id" => 3891,
                    "country_id" => 1,
                    "name" => "Laghman"
                ],
                [
                    "id" => 3892,
                    "country_id" => 1,
                    "name" => "Daykundi"
                ],
                [
                    "id" => 3893,
                    "country_id" => 1,
                    "name" => "Takhar"
                ],
                [
                    "id" => 3894,
                    "country_id" => 1,
                    "name" => "Paktia"
                ],
                [
                    "id" => 3895,
                    "country_id" => 1,
                    "name" => "Parwan"
                ],
                [
                    "id" => 3896,
                    "country_id" => 1,
                    "name" => "Nimruz"
                ],
                [
                    "id" => 3897,
                    "country_id" => 1,
                    "name" => "Logar"
                ],
                [
                    "id" => 3898,
                    "country_id" => 1,
                    "name" => "Urozgan"
                ],
                [
                    "id" => 3899,
                    "country_id" => 1,
                    "name" => "Farah"
                ],
                [
                    "id" => 3900,
                    "country_id" => 1,
                    "name" => "Kunduz Province"
                ],
                [
                    "id" => 3901,
                    "country_id" => 1,
                    "name" => "Badakhshan"
                ],
                [
                    "id" => 3902,
                    "country_id" => 1,
                    "name" => "Kabul"
                ],
                [
                    "id" => 3903,
                    "country_id" => 14,
                    "name" => "Victoria"
                ],
                [
                    "id" => 3904,
                    "country_id" => 14,
                    "name" => "South Australia"
                ],
                [
                    "id" => 3905,
                    "country_id" => 14,
                    "name" => "Queensland"
                ],
                [
                    "id" => 3906,
                    "country_id" => 14,
                    "name" => "Western Australia"
                ],
                [
                    "id" => 3907,
                    "country_id" => 14,
                    "name" => "Australian Capital Territory"
                ],
                [
                    "id" => 3908,
                    "country_id" => 14,
                    "name" => "Tasmania"
                ],
                [
                    "id" => 3909,
                    "country_id" => 14,
                    "name" => "New South Wales"
                ],
                [
                    "id" => 3910,
                    "country_id" => 14,
                    "name" => "Northern Territory"
                ],
                [
                    "id" => 3911,
                    "country_id" => 222,
                    "name" => "Vavaʻu"
                ],
                [
                    "id" => 3912,
                    "country_id" => 222,
                    "name" => "Tongatapu"
                ],
                [
                    "id" => 3913,
                    "country_id" => 222,
                    "name" => "Haʻapai"
                ],
                [
                    "id" => 3914,
                    "country_id" => 222,
                    "name" => "Niuas"
                ],
                [
                    "id" => 3915,
                    "country_id" => 222,
                    "name" => "ʻEua"
                ],
                [
                    "id" => 3916,
                    "country_id" => 103,
                    "name" => "Markazi"
                ],
                [
                    "id" => 3917,
                    "country_id" => 103,
                    "name" => "Khuzestan"
                ],
                [
                    "id" => 3918,
                    "country_id" => 103,
                    "name" => "Ilam"
                ],
                [
                    "id" => 3919,
                    "country_id" => 103,
                    "name" => "Kermanshah"
                ],
                [
                    "id" => 3920,
                    "country_id" => 103,
                    "name" => "Gilan"
                ],
                [
                    "id" => 3921,
                    "country_id" => 103,
                    "name" => "Chaharmahal and Bakhtiari"
                ],
                [
                    "id" => 3922,
                    "country_id" => 103,
                    "name" => "Qom"
                ],
                [
                    "id" => 3923,
                    "country_id" => 103,
                    "name" => "Isfahan"
                ],
                [
                    "id" => 3924,
                    "country_id" => 103,
                    "name" => "West Azarbaijan"
                ],
                [
                    "id" => 3925,
                    "country_id" => 103,
                    "name" => "Zanjan"
                ],
                [
                    "id" => 3926,
                    "country_id" => 103,
                    "name" => "Kohgiluyeh and Boyer-Ahmad"
                ],
                [
                    "id" => 3927,
                    "country_id" => 103,
                    "name" => "Razavi Khorasan"
                ],
                [
                    "id" => 3928,
                    "country_id" => 103,
                    "name" => "Lorestan"
                ],
                [
                    "id" => 3929,
                    "country_id" => 103,
                    "name" => "Alborz"
                ],
                [
                    "id" => 3930,
                    "country_id" => 103,
                    "name" => "South Khorasan"
                ],
                [
                    "id" => 3931,
                    "country_id" => 103,
                    "name" => "Sistan and Baluchestan"
                ],
                [
                    "id" => 3932,
                    "country_id" => 103,
                    "name" => "Bushehr"
                ],
                [
                    "id" => 3933,
                    "country_id" => 103,
                    "name" => "Golestan"
                ],
                [
                    "id" => 3934,
                    "country_id" => 103,
                    "name" => "Ardabil"
                ],
                [
                    "id" => 3935,
                    "country_id" => 103,
                    "name" => "Kurdistan"
                ],
                [
                    "id" => 3936,
                    "country_id" => 103,
                    "name" => "Yazd"
                ],
                [
                    "id" => 3937,
                    "country_id" => 103,
                    "name" => "Hormozgan"
                ],
                [
                    "id" => 3938,
                    "country_id" => 103,
                    "name" => "Mazandaran"
                ],
                [
                    "id" => 3939,
                    "country_id" => 103,
                    "name" => "Fars"
                ],
                [
                    "id" => 3940,
                    "country_id" => 103,
                    "name" => "Semnan"
                ],
                [
                    "id" => 3941,
                    "country_id" => 103,
                    "name" => "Qazvin"
                ],
                [
                    "id" => 3942,
                    "country_id" => 103,
                    "name" => "North Khorasan"
                ],
                [
                    "id" => 3943,
                    "country_id" => 103,
                    "name" => "Kerman"
                ],
                [
                    "id" => 3944,
                    "country_id" => 103,
                    "name" => "East Azerbaijan"
                ],
                [
                    "id" => 3945,
                    "country_id" => 103,
                    "name" => "Tehran"
                ],
                [
                    "id" => 3946,
                    "country_id" => 228,
                    "name" => "Niutao Island Council"
                ],
                [
                    "id" => 3947,
                    "country_id" => 228,
                    "name" => "Nanumanga"
                ],
                [
                    "id" => 3948,
                    "country_id" => 228,
                    "name" => "Nui"
                ],
                [
                    "id" => 3949,
                    "country_id" => 228,
                    "name" => "Nanumea"
                ],
                [
                    "id" => 3950,
                    "country_id" => 228,
                    "name" => "Vaitupu"
                ],
                [
                    "id" => 3951,
                    "country_id" => 228,
                    "name" => "Funafuti"
                ],
                [
                    "id" => 3952,
                    "country_id" => 228,
                    "name" => "Nukufetau"
                ],
                [
                    "id" => 3953,
                    "country_id" => 228,
                    "name" => "Nukulaelae"
                ],
                [
                    "id" => 3954,
                    "country_id" => 104,
                    "name" => "Dhi Qar"
                ],
                [
                    "id" => 3955,
                    "country_id" => 104,
                    "name" => "Babylon"
                ],
                [
                    "id" => 3956,
                    "country_id" => 104,
                    "name" => "Al-Qādisiyyah"
                ],
                [
                    "id" => 3957,
                    "country_id" => 104,
                    "name" => "Karbala"
                ],
                [
                    "id" => 3958,
                    "country_id" => 104,
                    "name" => "Al Muthanna"
                ],
                [
                    "id" => 3959,
                    "country_id" => 104,
                    "name" => "Baghdad"
                ],
                [
                    "id" => 3960,
                    "country_id" => 104,
                    "name" => "Basra"
                ],
                [
                    "id" => 3961,
                    "country_id" => 104,
                    "name" => "Saladin"
                ],
                [
                    "id" => 3962,
                    "country_id" => 104,
                    "name" => "Najaf"
                ],
                [
                    "id" => 3963,
                    "country_id" => 104,
                    "name" => "Nineveh"
                ],
                [
                    "id" => 3964,
                    "country_id" => 104,
                    "name" => "Al Anbar"
                ],
                [
                    "id" => 3965,
                    "country_id" => 104,
                    "name" => "Diyala"
                ],
                [
                    "id" => 3966,
                    "country_id" => 104,
                    "name" => "Maysan"
                ],
                [
                    "id" => 3967,
                    "country_id" => 104,
                    "name" => "Dohuk"
                ],
                [
                    "id" => 3968,
                    "country_id" => 104,
                    "name" => "Erbil"
                ],
                [
                    "id" => 3969,
                    "country_id" => 104,
                    "name" => "Sulaymaniyah"
                ],
                [
                    "id" => 3970,
                    "country_id" => 104,
                    "name" => "Wasit"
                ],
                [
                    "id" => 3971,
                    "country_id" => 104,
                    "name" => "Kirkuk"
                ],
                [
                    "id" => 3972,
                    "country_id" => 37,
                    "name" => "Svay Rieng"
                ],
                [
                    "id" => 3973,
                    "country_id" => 37,
                    "name" => "Preah Vihear"
                ],
                [
                    "id" => 3974,
                    "country_id" => 37,
                    "name" => "Prey Veng"
                ],
                [
                    "id" => 3975,
                    "country_id" => 37,
                    "name" => "Takeo"
                ],
                [
                    "id" => 3976,
                    "country_id" => 37,
                    "name" => "Battambang"
                ],
                [
                    "id" => 3977,
                    "country_id" => 37,
                    "name" => "Pursat"
                ],
                [
                    "id" => 3978,
                    "country_id" => 37,
                    "name" => "Kep"
                ],
                [
                    "id" => 3979,
                    "country_id" => 37,
                    "name" => "Kampong Chhnang"
                ],
                [
                    "id" => 3980,
                    "country_id" => 37,
                    "name" => "Pailin"
                ],
                [
                    "id" => 3981,
                    "country_id" => 37,
                    "name" => "Kampot"
                ],
                [
                    "id" => 3982,
                    "country_id" => 37,
                    "name" => "Koh Kong"
                ],
                [
                    "id" => 3983,
                    "country_id" => 37,
                    "name" => "Kandal"
                ],
                [
                    "id" => 3984,
                    "country_id" => 37,
                    "name" => "Banteay Meanchey"
                ],
                [
                    "id" => 3985,
                    "country_id" => 37,
                    "name" => "Mondulkiri"
                ],
                [
                    "id" => 3986,
                    "country_id" => 37,
                    "name" => "Kratie"
                ],
                [
                    "id" => 3987,
                    "country_id" => 37,
                    "name" => "Oddar Meanchey"
                ],
                [
                    "id" => 3988,
                    "country_id" => 37,
                    "name" => "Kampong Speu"
                ],
                [
                    "id" => 3989,
                    "country_id" => 37,
                    "name" => "Sihanoukville"
                ],
                [
                    "id" => 3990,
                    "country_id" => 37,
                    "name" => "Ratanakiri"
                ],
                [
                    "id" => 3991,
                    "country_id" => 37,
                    "name" => "Kampong Cham"
                ],
                [
                    "id" => 3992,
                    "country_id" => 37,
                    "name" => "Siem Reap"
                ],
                [
                    "id" => 3993,
                    "country_id" => 37,
                    "name" => "Stung Treng"
                ],
                [
                    "id" => 3994,
                    "country_id" => 37,
                    "name" => "Phnom Penh"
                ],
                [
                    "id" => 3995,
                    "country_id" => 115,
                    "name" => "North Hamgyong Province"
                ],
                [
                    "id" => 3996,
                    "country_id" => 115,
                    "name" => "Ryanggang Province"
                ],
                [
                    "id" => 3997,
                    "country_id" => 115,
                    "name" => "South Pyongan Province"
                ],
                [
                    "id" => 3998,
                    "country_id" => 115,
                    "name" => "Chagang Province"
                ],
                [
                    "id" => 3999,
                    "country_id" => 115,
                    "name" => "Kangwon Province"
                ],
                [
                    "id" => 4000,
                    "country_id" => 115,
                    "name" => "South Hamgyong Province"
                ],
                [
                    "id" => 4001,
                    "country_id" => 115,
                    "name" => "Rason"
                ],
                [
                    "id" => 4002,
                    "country_id" => 115,
                    "name" => "North Pyongan Province"
                ],
                [
                    "id" => 4003,
                    "country_id" => 115,
                    "name" => "South Hwanghae Province"
                ],
                [
                    "id" => 4004,
                    "country_id" => 115,
                    "name" => "North Hwanghae Province"
                ],
                [
                    "id" => 4005,
                    "country_id" => 115,
                    "name" => "Pyongyang"
                ],
                [
                    "id" => 4006,
                    "country_id" => 101,
                    "name" => "Meghalaya"
                ],
                [
                    "id" => 4007,
                    "country_id" => 101,
                    "name" => "Haryana"
                ],
                [
                    "id" => 4008,
                    "country_id" => 101,
                    "name" => "Maharashtra"
                ],
                [
                    "id" => 4009,
                    "country_id" => 101,
                    "name" => "Goa"
                ],
                [
                    "id" => 4010,
                    "country_id" => 101,
                    "name" => "Manipur"
                ],
                [
                    "id" => 4011,
                    "country_id" => 101,
                    "name" => "Puducherry"
                ],
                [
                    "id" => 4012,
                    "country_id" => 101,
                    "name" => "Telangana"
                ],
                [
                    "id" => 4013,
                    "country_id" => 101,
                    "name" => "Odisha"
                ],
                [
                    "id" => 4014,
                    "country_id" => 101,
                    "name" => "Rajasthan"
                ],
                [
                    "id" => 4015,
                    "country_id" => 101,
                    "name" => "Punjab"
                ],
                [
                    "id" => 4016,
                    "country_id" => 101,
                    "name" => "Uttarakhand"
                ],
                [
                    "id" => 4017,
                    "country_id" => 101,
                    "name" => "Andhra Pradesh"
                ],
                [
                    "id" => 4018,
                    "country_id" => 101,
                    "name" => "Nagaland"
                ],
                [
                    "id" => 4019,
                    "country_id" => 101,
                    "name" => "Lakshadweep"
                ],
                [
                    "id" => 4020,
                    "country_id" => 101,
                    "name" => "Himachal Pradesh"
                ],
                [
                    "id" => 4021,
                    "country_id" => 101,
                    "name" => "Delhi"
                ],
                [
                    "id" => 4022,
                    "country_id" => 101,
                    "name" => "Uttar Pradesh"
                ],
                [
                    "id" => 4023,
                    "country_id" => 101,
                    "name" => "Andaman and Nicobar Islands"
                ],
                [
                    "id" => 4024,
                    "country_id" => 101,
                    "name" => "Arunachal Pradesh"
                ],
                [
                    "id" => 4025,
                    "country_id" => 101,
                    "name" => "Jharkhand"
                ],
                [
                    "id" => 4026,
                    "country_id" => 101,
                    "name" => "Karnataka"
                ],
                [
                    "id" => 4027,
                    "country_id" => 101,
                    "name" => "Assam"
                ],
                [
                    "id" => 4028,
                    "country_id" => 101,
                    "name" => "Kerala"
                ],
                [
                    "id" => 4029,
                    "country_id" => 101,
                    "name" => "Jammu and Kashmir"
                ],
                [
                    "id" => 4030,
                    "country_id" => 101,
                    "name" => "Gujarat"
                ],
                [
                    "id" => 4031,
                    "country_id" => 101,
                    "name" => "Chandigarh"
                ],
                [
                    "id" => 4033,
                    "country_id" => 101,
                    "name" => "Dadra and Nagar Haveli and Daman and Diu"
                ],
                [
                    "id" => 4034,
                    "country_id" => 101,
                    "name" => "Sikkim"
                ],
                [
                    "id" => 4035,
                    "country_id" => 101,
                    "name" => "Tamil Nadu"
                ],
                [
                    "id" => 4036,
                    "country_id" => 101,
                    "name" => "Mizoram"
                ],
                [
                    "id" => 4037,
                    "country_id" => 101,
                    "name" => "Bihar"
                ],
                [
                    "id" => 4038,
                    "country_id" => 101,
                    "name" => "Tripura"
                ],
                [
                    "id" => 4039,
                    "country_id" => 101,
                    "name" => "Madhya Pradesh"
                ],
                [
                    "id" => 4040,
                    "country_id" => 101,
                    "name" => "Chhattisgarh"
                ],
                [
                    "id" => 4041,
                    "country_id" => 97,
                    "name" => "Choluteca Department"
                ],
                [
                    "id" => 4042,
                    "country_id" => 97,
                    "name" => "Comayagua Department"
                ],
                [
                    "id" => 4043,
                    "country_id" => 97,
                    "name" => "El Paraíso Department"
                ],
                [
                    "id" => 4044,
                    "country_id" => 97,
                    "name" => "Intibucá Department"
                ],
                [
                    "id" => 4045,
                    "country_id" => 97,
                    "name" => "Bay Islands Department"
                ],
                [
                    "id" => 4046,
                    "country_id" => 97,
                    "name" => "Cortés Department"
                ],
                [
                    "id" => 4047,
                    "country_id" => 97,
                    "name" => "Atlántida Department"
                ],
                [
                    "id" => 4048,
                    "country_id" => 97,
                    "name" => "Gracias a Dios Department"
                ],
                [
                    "id" => 4049,
                    "country_id" => 97,
                    "name" => "Copán Department"
                ],
                [
                    "id" => 4050,
                    "country_id" => 97,
                    "name" => "Olancho Department"
                ],
                [
                    "id" => 4051,
                    "country_id" => 97,
                    "name" => "Colón Department"
                ],
                [
                    "id" => 4052,
                    "country_id" => 97,
                    "name" => "Francisco Morazán Department"
                ],
                [
                    "id" => 4053,
                    "country_id" => 97,
                    "name" => "Santa Bárbara Department"
                ],
                [
                    "id" => 4054,
                    "country_id" => 97,
                    "name" => "Lempira Department"
                ],
                [
                    "id" => 4055,
                    "country_id" => 97,
                    "name" => "Valle Department"
                ],
                [
                    "id" => 4056,
                    "country_id" => 97,
                    "name" => "Ocotepeque Department"
                ],
                [
                    "id" => 4057,
                    "country_id" => 97,
                    "name" => "Yoro Department"
                ],
                [
                    "id" => 4058,
                    "country_id" => 97,
                    "name" => "La Paz Department"
                ],
                [
                    "id" => 4059,
                    "country_id" => 158,
                    "name" => "Northland Region"
                ],
                [
                    "id" => 4060,
                    "country_id" => 158,
                    "name" => "Manawatu-Wanganui Region"
                ],
                [
                    "id" => 4061,
                    "country_id" => 158,
                    "name" => "Waikato Region"
                ],
                [
                    "id" => 4062,
                    "country_id" => 158,
                    "name" => "Otago Region"
                ],
                [
                    "id" => 4063,
                    "country_id" => 158,
                    "name" => "Marlborough Region"
                ],
                [
                    "id" => 4064,
                    "country_id" => 158,
                    "name" => "West Coast Region"
                ],
                [
                    "id" => 4065,
                    "country_id" => 158,
                    "name" => "Wellington Region"
                ],
                [
                    "id" => 4066,
                    "country_id" => 158,
                    "name" => "Canterbury Region"
                ],
                [
                    "id" => 4067,
                    "country_id" => 158,
                    "name" => "Chatham Islands"
                ],
                [
                    "id" => 4068,
                    "country_id" => 158,
                    "name" => "Gisborne District"
                ],
                [
                    "id" => 4069,
                    "country_id" => 158,
                    "name" => "Taranaki Region"
                ],
                [
                    "id" => 4070,
                    "country_id" => 158,
                    "name" => "Nelson Region"
                ],
                [
                    "id" => 4071,
                    "country_id" => 158,
                    "name" => "Southland Region"
                ],
                [
                    "id" => 4072,
                    "country_id" => 158,
                    "name" => "Auckland Region"
                ],
                [
                    "id" => 4073,
                    "country_id" => 158,
                    "name" => "Tasman District"
                ],
                [
                    "id" => 4074,
                    "country_id" => 158,
                    "name" => "Bay of Plenty Region"
                ],
                [
                    "id" => 4075,
                    "country_id" => 158,
                    "name" => "Hawke's Bay Region"
                ],
                [
                    "id" => 4076,
                    "country_id" => 61,
                    "name" => "Saint John Parish"
                ],
                [
                    "id" => 4077,
                    "country_id" => 61,
                    "name" => "Saint Mark Parish"
                ],
                [
                    "id" => 4078,
                    "country_id" => 61,
                    "name" => "Saint David Parish"
                ],
                [
                    "id" => 4079,
                    "country_id" => 61,
                    "name" => "Saint George Parish"
                ],
                [
                    "id" => 4080,
                    "country_id" => 61,
                    "name" => "Saint Patrick Parish"
                ],
                [
                    "id" => 4081,
                    "country_id" => 61,
                    "name" => "Saint Peter Parish"
                ],
                [
                    "id" => 4082,
                    "country_id" => 61,
                    "name" => "Saint Andrew Parish"
                ],
                [
                    "id" => 4083,
                    "country_id" => 61,
                    "name" => "Saint Luke Parish"
                ],
                [
                    "id" => 4084,
                    "country_id" => 61,
                    "name" => "Saint Paul Parish"
                ],
                [
                    "id" => 4085,
                    "country_id" => 61,
                    "name" => "Saint Joseph Parish"
                ],
                [
                    "id" => 4086,
                    "country_id" => 62,
                    "name" => "El Seibo Province"
                ],
                [
                    "id" => 4087,
                    "country_id" => 62,
                    "name" => "La Romana Province"
                ],
                [
                    "id" => 4088,
                    "country_id" => 62,
                    "name" => "Sánchez Ramírez Province"
                ],
                [
                    "id" => 4089,
                    "country_id" => 62,
                    "name" => "Hermanas Mirabal Province"
                ],
                [
                    "id" => 4090,
                    "country_id" => 62,
                    "name" => "Barahona Province"
                ],
                [
                    "id" => 4091,
                    "country_id" => 62,
                    "name" => "San Cristóbal Province"
                ],
                [
                    "id" => 4092,
                    "country_id" => 62,
                    "name" => "Puerto Plata Province"
                ],
                [
                    "id" => 4093,
                    "country_id" => 62,
                    "name" => "Santo Domingo Province"
                ],
                [
                    "id" => 4094,
                    "country_id" => 62,
                    "name" => "María Trinidad Sánchez Province"
                ],
                [
                    "id" => 4095,
                    "country_id" => 62,
                    "name" => "Distrito Nacional"
                ],
                [
                    "id" => 4096,
                    "country_id" => 62,
                    "name" => "Peravia Province"
                ],
                [
                    "id" => 4097,
                    "country_id" => 62,
                    "name" => "Independencia"
                ],
                [
                    "id" => 4098,
                    "country_id" => 62,
                    "name" => "San Juan Province"
                ],
                [
                    "id" => 4099,
                    "country_id" => 62,
                    "name" => "Monseñor Nouel Province"
                ],
                [
                    "id" => 4100,
                    "country_id" => 62,
                    "name" => "Santiago Rodríguez Province"
                ],
                [
                    "id" => 4101,
                    "country_id" => 62,
                    "name" => "Pedernales Province"
                ],
                [
                    "id" => 4102,
                    "country_id" => 62,
                    "name" => "Espaillat Province"
                ],
                [
                    "id" => 4103,
                    "country_id" => 62,
                    "name" => "Samaná Province"
                ],
                [
                    "id" => 4104,
                    "country_id" => 62,
                    "name" => "Valverde Province"
                ],
                [
                    "id" => 4105,
                    "country_id" => 62,
                    "name" => "Baoruco Province"
                ],
                [
                    "id" => 4106,
                    "country_id" => 62,
                    "name" => "Hato Mayor Province"
                ],
                [
                    "id" => 4107,
                    "country_id" => 62,
                    "name" => "Dajabón Province"
                ],
                [
                    "id" => 4108,
                    "country_id" => 62,
                    "name" => "Santiago Province"
                ],
                [
                    "id" => 4109,
                    "country_id" => 62,
                    "name" => "La Altagracia Province"
                ],
                [
                    "id" => 4110,
                    "country_id" => 62,
                    "name" => "San Pedro de Macorís"
                ],
                [
                    "id" => 4111,
                    "country_id" => 62,
                    "name" => "Monte Plata Province"
                ],
                [
                    "id" => 4112,
                    "country_id" => 62,
                    "name" => "San José de Ocoa Province"
                ],
                [
                    "id" => 4113,
                    "country_id" => 62,
                    "name" => "Duarte Province"
                ],
                [
                    "id" => 4114,
                    "country_id" => 62,
                    "name" => "Azua Province"
                ],
                [
                    "id" => 4115,
                    "country_id" => 62,
                    "name" => "Monte Cristi Province"
                ],
                [
                    "id" => 4116,
                    "country_id" => 62,
                    "name" => "La Vega Province"
                ],
                [
                    "id" => 4117,
                    "country_id" => 95,
                    "name" => "Nord"
                ],
                [
                    "id" => 4118,
                    "country_id" => 95,
                    "name" => "Nippes"
                ],
                [
                    "id" => 4119,
                    "country_id" => 95,
                    "name" => "Grand'Anse"
                ],
                [
                    "id" => 4120,
                    "country_id" => 95,
                    "name" => "Ouest"
                ],
                [
                    "id" => 4121,
                    "country_id" => 95,
                    "name" => "Nord-Est"
                ],
                [
                    "id" => 4122,
                    "country_id" => 95,
                    "name" => "Sud"
                ],
                [
                    "id" => 4123,
                    "country_id" => 95,
                    "name" => "Artibonite"
                ],
                [
                    "id" => 4124,
                    "country_id" => 95,
                    "name" => "Sud-Est"
                ],
                [
                    "id" => 4125,
                    "country_id" => 95,
                    "name" => "Centre"
                ],
                [
                    "id" => 4126,
                    "country_id" => 95,
                    "name" => "Nord-Ouest"
                ],
                [
                    "id" => 4127,
                    "country_id" => 66,
                    "name" => "San Vicente Department"
                ],
                [
                    "id" => 4128,
                    "country_id" => 66,
                    "name" => "Santa Ana Department"
                ],
                [
                    "id" => 4129,
                    "country_id" => 66,
                    "name" => "Usulután Department"
                ],
                [
                    "id" => 4130,
                    "country_id" => 66,
                    "name" => "Morazán Department"
                ],
                [
                    "id" => 4131,
                    "country_id" => 66,
                    "name" => "Chalatenango Department"
                ],
                [
                    "id" => 4132,
                    "country_id" => 66,
                    "name" => "Cabañas Department"
                ],
                [
                    "id" => 4133,
                    "country_id" => 66,
                    "name" => "San Salvador Department"
                ],
                [
                    "id" => 4134,
                    "country_id" => 66,
                    "name" => "La Libertad Department"
                ],
                [
                    "id" => 4135,
                    "country_id" => 66,
                    "name" => "San Miguel Department"
                ],
                [
                    "id" => 4136,
                    "country_id" => 66,
                    "name" => "La Paz Department"
                ],
                [
                    "id" => 4137,
                    "country_id" => 66,
                    "name" => "Cuscatlán Department"
                ],
                [
                    "id" => 4138,
                    "country_id" => 66,
                    "name" => "La Unión Department"
                ],
                [
                    "id" => 4139,
                    "country_id" => 66,
                    "name" => "Ahuachapán Department"
                ],
                [
                    "id" => 4140,
                    "country_id" => 66,
                    "name" => "Sonsonate Department"
                ],
                [
                    "id" => 4141,
                    "country_id" => 201,
                    "name" => "Braslovče Municipality"
                ],
                [
                    "id" => 4142,
                    "country_id" => 201,
                    "name" => "Lenart Municipality"
                ],
                [
                    "id" => 4143,
                    "country_id" => 201,
                    "name" => "Oplotnica"
                ],
                [
                    "id" => 4144,
                    "country_id" => 201,
                    "name" => "Velike Lašče Municipality"
                ],
                [
                    "id" => 4145,
                    "country_id" => 201,
                    "name" => "Hajdina Municipality"
                ],
                [
                    "id" => 4146,
                    "country_id" => 201,
                    "name" => "Podčetrtek Municipality"
                ],
                [
                    "id" => 4147,
                    "country_id" => 201,
                    "name" => "Cankova Municipality"
                ],
                [
                    "id" => 4148,
                    "country_id" => 201,
                    "name" => "Vitanje Municipality"
                ],
                [
                    "id" => 4149,
                    "country_id" => 201,
                    "name" => "Sežana Municipality"
                ],
                [
                    "id" => 4150,
                    "country_id" => 201,
                    "name" => "Kidričevo Municipality"
                ],
                [
                    "id" => 4151,
                    "country_id" => 201,
                    "name" => "Črenšovci Municipality"
                ],
                [
                    "id" => 4152,
                    "country_id" => 201,
                    "name" => "Idrija Municipality"
                ],
                [
                    "id" => 4153,
                    "country_id" => 201,
                    "name" => "Trnovska Vas Municipality"
                ],
                [
                    "id" => 4154,
                    "country_id" => 201,
                    "name" => "Vodice Municipality"
                ],
                [
                    "id" => 4155,
                    "country_id" => 201,
                    "name" => "Ravne na Koroškem Municipality"
                ],
                [
                    "id" => 4156,
                    "country_id" => 201,
                    "name" => "Lovrenc na Pohorju Municipality"
                ],
                [
                    "id" => 4157,
                    "country_id" => 201,
                    "name" => "Majšperk Municipality"
                ],
                [
                    "id" => 4158,
                    "country_id" => 201,
                    "name" => "Loški Potok Municipality"
                ],
                [
                    "id" => 4159,
                    "country_id" => 201,
                    "name" => "Domžale Municipality"
                ],
                [
                    "id" => 4160,
                    "country_id" => 201,
                    "name" => "Rečica ob Savinji Municipality"
                ],
                [
                    "id" => 4161,
                    "country_id" => 201,
                    "name" => "Podlehnik Municipality"
                ],
                [
                    "id" => 4162,
                    "country_id" => 201,
                    "name" => "Cerknica Municipality"
                ],
                [
                    "id" => 4163,
                    "country_id" => 201,
                    "name" => "Vransko Municipality"
                ],
                [
                    "id" => 4164,
                    "country_id" => 201,
                    "name" => "Sveta Ana Municipality"
                ],
                [
                    "id" => 4165,
                    "country_id" => 201,
                    "name" => "Brezovica Municipality"
                ],
                [
                    "id" => 4166,
                    "country_id" => 201,
                    "name" => "Benedikt Municipality"
                ],
                [
                    "id" => 4167,
                    "country_id" => 201,
                    "name" => "Divača Municipality"
                ],
                [
                    "id" => 4168,
                    "country_id" => 201,
                    "name" => "Moravče Municipality"
                ],
                [
                    "id" => 4169,
                    "country_id" => 201,
                    "name" => "Slovenj Gradec City Municipality"
                ],
                [
                    "id" => 4170,
                    "country_id" => 201,
                    "name" => "Škocjan Municipality"
                ],
                [
                    "id" => 4171,
                    "country_id" => 201,
                    "name" => "Šentjur Municipality"
                ],
                [
                    "id" => 4172,
                    "country_id" => 201,
                    "name" => "Pesnica Municipality"
                ],
                [
                    "id" => 4173,
                    "country_id" => 201,
                    "name" => "Dol pri Ljubljani Municipality"
                ],
                [
                    "id" => 4174,
                    "country_id" => 201,
                    "name" => "Loška Dolina Municipality"
                ],
                [
                    "id" => 4175,
                    "country_id" => 201,
                    "name" => "Hoče–Slivnica Municipality"
                ],
                [
                    "id" => 4176,
                    "country_id" => 201,
                    "name" => "Cerkvenjak Municipality"
                ],
                [
                    "id" => 4177,
                    "country_id" => 201,
                    "name" => "Naklo Municipality"
                ],
                [
                    "id" => 4178,
                    "country_id" => 201,
                    "name" => "Cerkno Municipality"
                ],
                [
                    "id" => 4179,
                    "country_id" => 201,
                    "name" => "Bistrica ob Sotli Municipality"
                ],
                [
                    "id" => 4180,
                    "country_id" => 201,
                    "name" => "Kamnik Municipality"
                ],
                [
                    "id" => 4181,
                    "country_id" => 201,
                    "name" => "Bovec Municipality"
                ],
                [
                    "id" => 4182,
                    "country_id" => 201,
                    "name" => "Zavrč Municipality"
                ],
                [
                    "id" => 4183,
                    "country_id" => 201,
                    "name" => "Ajdovščina Municipality"
                ],
                [
                    "id" => 4184,
                    "country_id" => 201,
                    "name" => "Pivka Municipality"
                ],
                [
                    "id" => 4185,
                    "country_id" => 201,
                    "name" => "Štore Municipality"
                ],
                [
                    "id" => 4186,
                    "country_id" => 201,
                    "name" => "Kozje Municipality"
                ],
                [
                    "id" => 4187,
                    "country_id" => 201,
                    "name" => "Municipality of Škofljica"
                ],
                [
                    "id" => 4188,
                    "country_id" => 201,
                    "name" => "Prebold Municipality"
                ],
                [
                    "id" => 4189,
                    "country_id" => 201,
                    "name" => "Dobrovnik Municipality"
                ],
                [
                    "id" => 4190,
                    "country_id" => 201,
                    "name" => "Mozirje Municipality"
                ],
                [
                    "id" => 4191,
                    "country_id" => 201,
                    "name" => "City Municipality of Celje"
                ],
                [
                    "id" => 4192,
                    "country_id" => 201,
                    "name" => "Žiri Municipality"
                ],
                [
                    "id" => 4193,
                    "country_id" => 201,
                    "name" => "Horjul Municipality"
                ],
                [
                    "id" => 4194,
                    "country_id" => 201,
                    "name" => "Tabor Municipality"
                ],
                [
                    "id" => 4195,
                    "country_id" => 201,
                    "name" => "Radeče Municipality"
                ],
                [
                    "id" => 4196,
                    "country_id" => 201,
                    "name" => "Vipava Municipality"
                ],
                [
                    "id" => 4197,
                    "country_id" => 201,
                    "name" => "Kungota"
                ],
                [
                    "id" => 4198,
                    "country_id" => 201,
                    "name" => "Slovenske Konjice Municipality"
                ],
                [
                    "id" => 4199,
                    "country_id" => 201,
                    "name" => "Osilnica Municipality"
                ],
                [
                    "id" => 4200,
                    "country_id" => 201,
                    "name" => "Borovnica Municipality"
                ],
                [
                    "id" => 4201,
                    "country_id" => 201,
                    "name" => "Piran Municipality"
                ],
                [
                    "id" => 4202,
                    "country_id" => 201,
                    "name" => "Bled Municipality"
                ],
                [
                    "id" => 4203,
                    "country_id" => 201,
                    "name" => "Jezersko Municipality"
                ],
                [
                    "id" => 4204,
                    "country_id" => 201,
                    "name" => "Rače–Fram Municipality"
                ],
                [
                    "id" => 4205,
                    "country_id" => 201,
                    "name" => "Nova Gorica City Municipality"
                ],
                [
                    "id" => 4206,
                    "country_id" => 201,
                    "name" => "Razkrižje Municipality"
                ],
                [
                    "id" => 4207,
                    "country_id" => 201,
                    "name" => "Ribnica na Pohorju Municipality"
                ],
                [
                    "id" => 4208,
                    "country_id" => 201,
                    "name" => "Muta Municipality"
                ],
                [
                    "id" => 4209,
                    "country_id" => 201,
                    "name" => "Rogatec Municipality"
                ],
                [
                    "id" => 4210,
                    "country_id" => 201,
                    "name" => "Gorišnica Municipality"
                ],
                [
                    "id" => 4211,
                    "country_id" => 201,
                    "name" => "Kuzma Municipality"
                ],
                [
                    "id" => 4212,
                    "country_id" => 201,
                    "name" => "Mislinja Municipality"
                ],
                [
                    "id" => 4213,
                    "country_id" => 201,
                    "name" => "Duplek Municipality"
                ],
                [
                    "id" => 4214,
                    "country_id" => 201,
                    "name" => "Trebnje Municipality"
                ],
                [
                    "id" => 4215,
                    "country_id" => 201,
                    "name" => "Brežice Municipality"
                ],
                [
                    "id" => 4216,
                    "country_id" => 201,
                    "name" => "Dobrepolje Municipality"
                ],
                [
                    "id" => 4217,
                    "country_id" => 201,
                    "name" => "Grad Municipality"
                ],
                [
                    "id" => 4218,
                    "country_id" => 201,
                    "name" => "Moravske Toplice Municipality"
                ],
                [
                    "id" => 4219,
                    "country_id" => 201,
                    "name" => "Luče Municipality"
                ],
                [
                    "id" => 4220,
                    "country_id" => 201,
                    "name" => "Miren–Kostanjevica Municipality"
                ],
                [
                    "id" => 4221,
                    "country_id" => 201,
                    "name" => "Ormož Municipality"
                ],
                [
                    "id" => 4222,
                    "country_id" => 201,
                    "name" => "Šalovci Municipality"
                ],
                [
                    "id" => 4223,
                    "country_id" => 201,
                    "name" => "Miklavž na Dravskem Polju Municipality"
                ],
                [
                    "id" => 4224,
                    "country_id" => 201,
                    "name" => "Makole Municipality"
                ],
                [
                    "id" => 4225,
                    "country_id" => 201,
                    "name" => "Lendava Municipality"
                ],
                [
                    "id" => 4226,
                    "country_id" => 201,
                    "name" => "Vuzenica Municipality"
                ],
                [
                    "id" => 4227,
                    "country_id" => 201,
                    "name" => "Kanal ob Soči Municipality"
                ],
                [
                    "id" => 4228,
                    "country_id" => 201,
                    "name" => "Ptuj City Municipality"
                ],
                [
                    "id" => 4229,
                    "country_id" => 201,
                    "name" => "Sveti Andraž v Slovenskih Goricah Municipality"
                ],
                [
                    "id" => 4230,
                    "country_id" => 201,
                    "name" => "Selnica ob Dravi Municipality"
                ],
                [
                    "id" => 4231,
                    "country_id" => 201,
                    "name" => "Radovljica Municipality"
                ],
                [
                    "id" => 4232,
                    "country_id" => 201,
                    "name" => "Črna na Koroškem Municipality"
                ],
                [
                    "id" => 4233,
                    "country_id" => 201,
                    "name" => "Rogaška Slatina Municipality"
                ],
                [
                    "id" => 4234,
                    "country_id" => 201,
                    "name" => "Podvelka Municipality"
                ],
                [
                    "id" => 4235,
                    "country_id" => 201,
                    "name" => "Ribnica Municipality"
                ],
                [
                    "id" => 4236,
                    "country_id" => 201,
                    "name" => "City Municipality of Novo Mesto"
                ],
                [
                    "id" => 4237,
                    "country_id" => 201,
                    "name" => "Mirna Peč Municipality"
                ],
                [
                    "id" => 4238,
                    "country_id" => 201,
                    "name" => "Križevci Municipality"
                ],
                [
                    "id" => 4239,
                    "country_id" => 201,
                    "name" => "Poljčane Municipality"
                ],
                [
                    "id" => 4240,
                    "country_id" => 201,
                    "name" => "Brda Municipality"
                ],
                [
                    "id" => 4241,
                    "country_id" => 201,
                    "name" => "Šentjernej Municipality"
                ],
                [
                    "id" => 4242,
                    "country_id" => 201,
                    "name" => "Maribor City Municipality"
                ],
                [
                    "id" => 4243,
                    "country_id" => 201,
                    "name" => "Kobarid Municipality"
                ],
                [
                    "id" => 4244,
                    "country_id" => 201,
                    "name" => "Markovci Municipality"
                ],
                [
                    "id" => 4245,
                    "country_id" => 201,
                    "name" => "Vojnik Municipality"
                ],
                [
                    "id" => 4246,
                    "country_id" => 201,
                    "name" => "Trbovlje Municipality"
                ],
                [
                    "id" => 4247,
                    "country_id" => 201,
                    "name" => "Tolmin Municipality"
                ],
                [
                    "id" => 4248,
                    "country_id" => 201,
                    "name" => "Šoštanj Municipality"
                ],
                [
                    "id" => 4249,
                    "country_id" => 201,
                    "name" => "Žetale Municipality"
                ],
                [
                    "id" => 4250,
                    "country_id" => 201,
                    "name" => "Tržič Municipality"
                ],
                [
                    "id" => 4251,
                    "country_id" => 201,
                    "name" => "Turnišče Municipality"
                ],
                [
                    "id" => 4252,
                    "country_id" => 201,
                    "name" => "Dobrna Municipality"
                ],
                [
                    "id" => 4253,
                    "country_id" => 201,
                    "name" => "Renče–Vogrsko Municipality"
                ],
                [
                    "id" => 4254,
                    "country_id" => 201,
                    "name" => "Kostanjevica na Krki Municipality"
                ],
                [
                    "id" => 4255,
                    "country_id" => 201,
                    "name" => "Sveti Jurij ob Ščavnici Municipality"
                ],
                [
                    "id" => 4256,
                    "country_id" => 201,
                    "name" => "Železniki Municipality"
                ],
                [
                    "id" => 4257,
                    "country_id" => 201,
                    "name" => "Veržej Municipality"
                ],
                [
                    "id" => 4258,
                    "country_id" => 201,
                    "name" => "Žalec Municipality"
                ],
                [
                    "id" => 4259,
                    "country_id" => 201,
                    "name" => "Starše Municipality"
                ],
                [
                    "id" => 4260,
                    "country_id" => 201,
                    "name" => "Sveta Trojica v Slovenskih Goricah Municipality"
                ],
                [
                    "id" => 4261,
                    "country_id" => 201,
                    "name" => "Solčava Municipality"
                ],
                [
                    "id" => 4262,
                    "country_id" => 201,
                    "name" => "Vrhnika Municipality"
                ],
                [
                    "id" => 4263,
                    "country_id" => 201,
                    "name" => "Središče ob Dravi"
                ],
                [
                    "id" => 4264,
                    "country_id" => 201,
                    "name" => "Rogašovci Municipality"
                ],
                [
                    "id" => 4265,
                    "country_id" => 201,
                    "name" => "Mežica Municipality"
                ],
                [
                    "id" => 4266,
                    "country_id" => 201,
                    "name" => "Juršinci Municipality"
                ],
                [
                    "id" => 4267,
                    "country_id" => 201,
                    "name" => "Velika Polana Municipality"
                ],
                [
                    "id" => 4268,
                    "country_id" => 201,
                    "name" => "Sevnica Municipality"
                ],
                [
                    "id" => 4269,
                    "country_id" => 201,
                    "name" => "Zagorje ob Savi Municipality"
                ],
                [
                    "id" => 4270,
                    "country_id" => 201,
                    "name" => "Ljubljana City Municipality"
                ],
                [
                    "id" => 4271,
                    "country_id" => 201,
                    "name" => "Gornji Petrovci Municipality"
                ],
                [
                    "id" => 4272,
                    "country_id" => 201,
                    "name" => "Polzela Municipality"
                ],
                [
                    "id" => 4273,
                    "country_id" => 201,
                    "name" => "Sveti Tomaž Municipality"
                ],
                [
                    "id" => 4274,
                    "country_id" => 201,
                    "name" => "Prevalje Municipality"
                ],
                [
                    "id" => 4275,
                    "country_id" => 201,
                    "name" => "Radlje ob Dravi Municipality"
                ],
                [
                    "id" => 4276,
                    "country_id" => 201,
                    "name" => "Žirovnica Municipality"
                ],
                [
                    "id" => 4277,
                    "country_id" => 201,
                    "name" => "Sodražica Municipality"
                ],
                [
                    "id" => 4278,
                    "country_id" => 201,
                    "name" => "Bloke Municipality"
                ],
                [
                    "id" => 4279,
                    "country_id" => 201,
                    "name" => "Šmartno pri Litiji Municipality"
                ],
                [
                    "id" => 4280,
                    "country_id" => 201,
                    "name" => "Ruše Municipality"
                ],
                [
                    "id" => 4281,
                    "country_id" => 201,
                    "name" => "Dolenjske Toplice Municipality"
                ],
                [
                    "id" => 4282,
                    "country_id" => 201,
                    "name" => "Bohinj Municipality"
                ],
                [
                    "id" => 4283,
                    "country_id" => 201,
                    "name" => "Komenda Municipality"
                ],
                [
                    "id" => 4284,
                    "country_id" => 201,
                    "name" => "Gorje Municipality"
                ],
                [
                    "id" => 4285,
                    "country_id" => 201,
                    "name" => "Šmarje pri Jelšah Municipality"
                ],
                [
                    "id" => 4286,
                    "country_id" => 201,
                    "name" => "Ig Municipality"
                ],
                [
                    "id" => 4287,
                    "country_id" => 201,
                    "name" => "Kranj City Municipality"
                ],
                [
                    "id" => 4288,
                    "country_id" => 201,
                    "name" => "Puconci Municipality"
                ],
                [
                    "id" => 4289,
                    "country_id" => 201,
                    "name" => "Šmarješke Toplice Municipality"
                ],
                [
                    "id" => 4290,
                    "country_id" => 201,
                    "name" => "Dornava Municipality"
                ],
                [
                    "id" => 4291,
                    "country_id" => 201,
                    "name" => "Črnomelj Municipality"
                ],
                [
                    "id" => 4292,
                    "country_id" => 201,
                    "name" => "Radenci Municipality"
                ],
                [
                    "id" => 4293,
                    "country_id" => 201,
                    "name" => "Gorenja Vas–Poljane Municipality"
                ],
                [
                    "id" => 4294,
                    "country_id" => 201,
                    "name" => "Ljubno Municipality"
                ],
                [
                    "id" => 4295,
                    "country_id" => 201,
                    "name" => "Dobje Municipality"
                ],
                [
                    "id" => 4296,
                    "country_id" => 201,
                    "name" => "Šmartno ob Paki Municipality"
                ],
                [
                    "id" => 4297,
                    "country_id" => 201,
                    "name" => "Mokronog–Trebelno Municipality"
                ],
                [
                    "id" => 4298,
                    "country_id" => 201,
                    "name" => "Mirna Municipality"
                ],
                [
                    "id" => 4299,
                    "country_id" => 201,
                    "name" => "Šenčur Municipality"
                ],
                [
                    "id" => 4300,
                    "country_id" => 201,
                    "name" => "Videm Municipality"
                ],
                [
                    "id" => 4301,
                    "country_id" => 201,
                    "name" => "Beltinci Municipality"
                ],
                [
                    "id" => 4302,
                    "country_id" => 201,
                    "name" => "Lukovica Municipality"
                ],
                [
                    "id" => 4303,
                    "country_id" => 201,
                    "name" => "Preddvor Municipality"
                ],
                [
                    "id" => 4304,
                    "country_id" => 201,
                    "name" => "Destrnik Municipality"
                ],
                [
                    "id" => 4305,
                    "country_id" => 201,
                    "name" => "Ivančna Gorica Municipality"
                ],
                [
                    "id" => 4306,
                    "country_id" => 201,
                    "name" => "Log–Dragomer Municipality"
                ],
                [
                    "id" => 4307,
                    "country_id" => 201,
                    "name" => "Žužemberk Municipality"
                ],
                [
                    "id" => 4308,
                    "country_id" => 201,
                    "name" => "Dobrova–Polhov Gradec Municipality"
                ],
                [
                    "id" => 4309,
                    "country_id" => 201,
                    "name" => "Municipality of Cirkulane"
                ],
                [
                    "id" => 4310,
                    "country_id" => 201,
                    "name" => "Cerklje na Gorenjskem Municipality"
                ],
                [
                    "id" => 4311,
                    "country_id" => 201,
                    "name" => "Šentrupert Municipality"
                ],
                [
                    "id" => 4312,
                    "country_id" => 201,
                    "name" => "Tišina Municipality"
                ],
                [
                    "id" => 4313,
                    "country_id" => 201,
                    "name" => "Murska Sobota City Municipality"
                ],
                [
                    "id" => 4314,
                    "country_id" => 201,
                    "name" => "Municipality of Krško"
                ],
                [
                    "id" => 4315,
                    "country_id" => 201,
                    "name" => "Komen Municipality"
                ],
                [
                    "id" => 4316,
                    "country_id" => 201,
                    "name" => "Škofja Loka Municipality"
                ],
                [
                    "id" => 4317,
                    "country_id" => 201,
                    "name" => "Šempeter–Vrtojba Municipality"
                ],
                [
                    "id" => 4318,
                    "country_id" => 201,
                    "name" => "Municipality of Apače"
                ],
                [
                    "id" => 4319,
                    "country_id" => 201,
                    "name" => "Koper City Municipality"
                ],
                [
                    "id" => 4320,
                    "country_id" => 201,
                    "name" => "Odranci Municipality"
                ],
                [
                    "id" => 4321,
                    "country_id" => 201,
                    "name" => "Hrpelje–Kozina Municipality"
                ],
                [
                    "id" => 4322,
                    "country_id" => 201,
                    "name" => "Izola Municipality"
                ],
                [
                    "id" => 4323,
                    "country_id" => 201,
                    "name" => "Metlika Municipality"
                ],
                [
                    "id" => 4324,
                    "country_id" => 201,
                    "name" => "Šentilj Municipality"
                ],
                [
                    "id" => 4325,
                    "country_id" => 201,
                    "name" => "Kobilje Municipality"
                ],
                [
                    "id" => 4326,
                    "country_id" => 201,
                    "name" => "Ankaran Municipality"
                ],
                [
                    "id" => 4327,
                    "country_id" => 201,
                    "name" => "Hodoš Municipality"
                ],
                [
                    "id" => 4328,
                    "country_id" => 201,
                    "name" => "Sveti Jurij v Slovenskih Goricah Municipality"
                ],
                [
                    "id" => 4329,
                    "country_id" => 201,
                    "name" => "Nazarje Municipality"
                ],
                [
                    "id" => 4330,
                    "country_id" => 201,
                    "name" => "Postojna Municipality"
                ],
                [
                    "id" => 4331,
                    "country_id" => 201,
                    "name" => "Kostel Municipality"
                ],
                [
                    "id" => 4332,
                    "country_id" => 201,
                    "name" => "Slovenska Bistrica Municipality"
                ],
                [
                    "id" => 4333,
                    "country_id" => 201,
                    "name" => "Straža Municipality"
                ],
                [
                    "id" => 4334,
                    "country_id" => 201,
                    "name" => "Trzin Municipality"
                ],
                [
                    "id" => 4335,
                    "country_id" => 201,
                    "name" => "Kočevje Municipality"
                ],
                [
                    "id" => 4336,
                    "country_id" => 201,
                    "name" => "Grosuplje Municipality"
                ],
                [
                    "id" => 4337,
                    "country_id" => 201,
                    "name" => "Jesenice Municipality"
                ],
                [
                    "id" => 4338,
                    "country_id" => 201,
                    "name" => "Laško Municipality"
                ],
                [
                    "id" => 4339,
                    "country_id" => 201,
                    "name" => "Gornji Grad Municipality"
                ],
                [
                    "id" => 4340,
                    "country_id" => 201,
                    "name" => "Kranjska Gora Municipality"
                ],
                [
                    "id" => 4341,
                    "country_id" => 201,
                    "name" => "Hrastnik Municipality"
                ],
                [
                    "id" => 4342,
                    "country_id" => 201,
                    "name" => "Zreče Municipality"
                ],
                [
                    "id" => 4343,
                    "country_id" => 201,
                    "name" => "Gornja Radgona Municipality"
                ],
                [
                    "id" => 4344,
                    "country_id" => 201,
                    "name" => "Municipality of Ilirska Bistrica"
                ],
                [
                    "id" => 4345,
                    "country_id" => 201,
                    "name" => "Dravograd Municipality"
                ],
                [
                    "id" => 4346,
                    "country_id" => 201,
                    "name" => "Semič Municipality"
                ],
                [
                    "id" => 4347,
                    "country_id" => 201,
                    "name" => "Litija Municipality"
                ],
                [
                    "id" => 4348,
                    "country_id" => 201,
                    "name" => "Mengeš Municipality"
                ],
                [
                    "id" => 4349,
                    "country_id" => 201,
                    "name" => "Medvode Municipality"
                ],
                [
                    "id" => 4350,
                    "country_id" => 201,
                    "name" => "Logatec Municipality"
                ],
                [
                    "id" => 4351,
                    "country_id" => 201,
                    "name" => "Ljutomer Municipality"
                ],
                [
                    "id" => 4352,
                    "country_id" => 200,
                    "name" => "Banská Bystrica Region"
                ],
                [
                    "id" => 4353,
                    "country_id" => 200,
                    "name" => "Košice Region"
                ],
                [
                    "id" => 4354,
                    "country_id" => 200,
                    "name" => "Prešov Region"
                ],
                [
                    "id" => 4355,
                    "country_id" => 200,
                    "name" => "Trnava Region"
                ],
                [
                    "id" => 4356,
                    "country_id" => 200,
                    "name" => "Bratislava Region"
                ],
                [
                    "id" => 4357,
                    "country_id" => 200,
                    "name" => "Nitra Region"
                ],
                [
                    "id" => 4358,
                    "country_id" => 200,
                    "name" => "Trenčín Region"
                ],
                [
                    "id" => 4359,
                    "country_id" => 200,
                    "name" => "Žilina Region"
                ],
                [
                    "id" => 4360,
                    "country_id" => 144,
                    "name" => "Cimișlia District"
                ],
                [
                    "id" => 4361,
                    "country_id" => 144,
                    "name" => "Orhei District"
                ],
                [
                    "id" => 4362,
                    "country_id" => 144,
                    "name" => "Bender Municipality"
                ],
                [
                    "id" => 4363,
                    "country_id" => 144,
                    "name" => "Nisporeni District"
                ],
                [
                    "id" => 4364,
                    "country_id" => 144,
                    "name" => "Sîngerei District"
                ],
                [
                    "id" => 4365,
                    "country_id" => 144,
                    "name" => "Căușeni District"
                ],
                [
                    "id" => 4366,
                    "country_id" => 144,
                    "name" => "Călărași District"
                ],
                [
                    "id" => 4367,
                    "country_id" => 144,
                    "name" => "Glodeni District"
                ],
                [
                    "id" => 4368,
                    "country_id" => 144,
                    "name" => "Anenii Noi District"
                ],
                [
                    "id" => 4369,
                    "country_id" => 144,
                    "name" => "Ialoveni District"
                ],
                [
                    "id" => 4370,
                    "country_id" => 144,
                    "name" => "Florești District"
                ],
                [
                    "id" => 4371,
                    "country_id" => 144,
                    "name" => "Telenești District"
                ],
                [
                    "id" => 4372,
                    "country_id" => 144,
                    "name" => "Taraclia District"
                ],
                [
                    "id" => 4373,
                    "country_id" => 144,
                    "name" => "Chișinău Municipality"
                ],
                [
                    "id" => 4374,
                    "country_id" => 144,
                    "name" => "Soroca District"
                ],
                [
                    "id" => 4375,
                    "country_id" => 144,
                    "name" => "Briceni District"
                ],
                [
                    "id" => 4376,
                    "country_id" => 144,
                    "name" => "Rîșcani District"
                ],
                [
                    "id" => 4377,
                    "country_id" => 144,
                    "name" => "Strășeni District"
                ],
                [
                    "id" => 4378,
                    "country_id" => 144,
                    "name" => "Ștefan Vodă District"
                ],
                [
                    "id" => 4379,
                    "country_id" => 144,
                    "name" => "Basarabeasca District"
                ],
                [
                    "id" => 4380,
                    "country_id" => 144,
                    "name" => "Cantemir District"
                ],
                [
                    "id" => 4381,
                    "country_id" => 144,
                    "name" => "Fălești District"
                ],
                [
                    "id" => 4382,
                    "country_id" => 144,
                    "name" => "Hîncești District"
                ],
                [
                    "id" => 4383,
                    "country_id" => 144,
                    "name" => "Dubăsari District"
                ],
                [
                    "id" => 4384,
                    "country_id" => 144,
                    "name" => "Dondușeni District"
                ],
                [
                    "id" => 4385,
                    "country_id" => 144,
                    "name" => "Gagauzia"
                ],
                [
                    "id" => 4386,
                    "country_id" => 144,
                    "name" => "Ungheni District"
                ],
                [
                    "id" => 4387,
                    "country_id" => 144,
                    "name" => "Edineț District"
                ],
                [
                    "id" => 4388,
                    "country_id" => 144,
                    "name" => "Șoldănești District"
                ],
                [
                    "id" => 4389,
                    "country_id" => 144,
                    "name" => "Ocnița District"
                ],
                [
                    "id" => 4390,
                    "country_id" => 144,
                    "name" => "Criuleni District"
                ],
                [
                    "id" => 4391,
                    "country_id" => 144,
                    "name" => "Cahul District"
                ],
                [
                    "id" => 4392,
                    "country_id" => 144,
                    "name" => "Drochia District"
                ],
                [
                    "id" => 4393,
                    "country_id" => 144,
                    "name" => "Bălți Municipality"
                ],
                [
                    "id" => 4394,
                    "country_id" => 144,
                    "name" => "Rezina District"
                ],
                [
                    "id" => 4395,
                    "country_id" => 144,
                    "name" => "Transnistria autonomous territorial unit"
                ],
                [
                    "id" => 4396,
                    "country_id" => 120,
                    "name" => "Salacgrīva Municipality"
                ],
                [
                    "id" => 4397,
                    "country_id" => 120,
                    "name" => "Vecumnieki Municipality"
                ],
                [
                    "id" => 4398,
                    "country_id" => 120,
                    "name" => "Naukšēni Municipality"
                ],
                [
                    "id" => 4399,
                    "country_id" => 120,
                    "name" => "Ilūkste Municipality"
                ],
                [
                    "id" => 4400,
                    "country_id" => 120,
                    "name" => "Gulbene Municipality"
                ],
                [
                    "id" => 4401,
                    "country_id" => 120,
                    "name" => "Līvāni Municipality"
                ],
                [
                    "id" => 4402,
                    "country_id" => 120,
                    "name" => "Salaspils Municipality"
                ],
                [
                    "id" => 4403,
                    "country_id" => 120,
                    "name" => "Ventspils Municipality"
                ],
                [
                    "id" => 4404,
                    "country_id" => 120,
                    "name" => "Rundāle Municipality"
                ],
                [
                    "id" => 4405,
                    "country_id" => 120,
                    "name" => "Pļaviņas Municipality"
                ],
                [
                    "id" => 4406,
                    "country_id" => 120,
                    "name" => "Vārkava Municipality"
                ],
                [
                    "id" => 4407,
                    "country_id" => 120,
                    "name" => "Jaunpiebalga Municipality"
                ],
                [
                    "id" => 4408,
                    "country_id" => 120,
                    "name" => "Sēja Municipality"
                ],
                [
                    "id" => 4409,
                    "country_id" => 120,
                    "name" => "Tukums Municipality"
                ],
                [
                    "id" => 4410,
                    "country_id" => 120,
                    "name" => "Cibla Municipality"
                ],
                [
                    "id" => 4411,
                    "country_id" => 120,
                    "name" => "Burtnieki Municipality"
                ],
                [
                    "id" => 4412,
                    "country_id" => 120,
                    "name" => "Ķegums Municipality"
                ],
                [
                    "id" => 4413,
                    "country_id" => 120,
                    "name" => "Krustpils Municipality"
                ],
                [
                    "id" => 4414,
                    "country_id" => 120,
                    "name" => "Cesvaine Municipality"
                ],
                [
                    "id" => 4415,
                    "country_id" => 120,
                    "name" => "Skrīveri Municipality"
                ],
                [
                    "id" => 4416,
                    "country_id" => 120,
                    "name" => "Ogre Municipality"
                ],
                [
                    "id" => 4417,
                    "country_id" => 120,
                    "name" => "Olaine Municipality"
                ],
                [
                    "id" => 4418,
                    "country_id" => 120,
                    "name" => "Limbaži Municipality"
                ],
                [
                    "id" => 4419,
                    "country_id" => 120,
                    "name" => "Lubāna Municipality"
                ],
                [
                    "id" => 4420,
                    "country_id" => 120,
                    "name" => "Kandava Municipality"
                ],
                [
                    "id" => 4421,
                    "country_id" => 120,
                    "name" => "Ventspils"
                ],
                [
                    "id" => 4422,
                    "country_id" => 120,
                    "name" => "Krimulda Municipality"
                ],
                [
                    "id" => 4423,
                    "country_id" => 120,
                    "name" => "Rugāji Municipality"
                ],
                [
                    "id" => 4424,
                    "country_id" => 120,
                    "name" => "Jelgava Municipality"
                ],
                [
                    "id" => 4425,
                    "country_id" => 120,
                    "name" => "Valka Municipality"
                ],
                [
                    "id" => 4426,
                    "country_id" => 120,
                    "name" => "Rūjiena Municipality"
                ],
                [
                    "id" => 4427,
                    "country_id" => 120,
                    "name" => "Babīte Municipality"
                ],
                [
                    "id" => 4428,
                    "country_id" => 120,
                    "name" => "Dundaga Municipality"
                ],
                [
                    "id" => 4429,
                    "country_id" => 120,
                    "name" => "Priekule Municipality"
                ],
                [
                    "id" => 4430,
                    "country_id" => 120,
                    "name" => "Zilupe Municipality"
                ],
                [
                    "id" => 4431,
                    "country_id" => 120,
                    "name" => "Varakļāni Municipality"
                ],
                [
                    "id" => 4432,
                    "country_id" => 120,
                    "name" => "Nereta Municipality"
                ],
                [
                    "id" => 4433,
                    "country_id" => 120,
                    "name" => "Madona Municipality"
                ],
                [
                    "id" => 4434,
                    "country_id" => 120,
                    "name" => "Sala Municipality"
                ],
                [
                    "id" => 4435,
                    "country_id" => 120,
                    "name" => "Ķekava Municipality"
                ],
                [
                    "id" => 4436,
                    "country_id" => 120,
                    "name" => "Nīca Municipality"
                ],
                [
                    "id" => 4437,
                    "country_id" => 120,
                    "name" => "Dobele Municipality"
                ],
                [
                    "id" => 4438,
                    "country_id" => 120,
                    "name" => "Jēkabpils Municipality"
                ],
                [
                    "id" => 4439,
                    "country_id" => 120,
                    "name" => "Saldus Municipality"
                ],
                [
                    "id" => 4440,
                    "country_id" => 120,
                    "name" => "Roja Municipality"
                ],
                [
                    "id" => 4441,
                    "country_id" => 120,
                    "name" => "Iecava Municipality"
                ],
                [
                    "id" => 4442,
                    "country_id" => 120,
                    "name" => "Ozolnieki Municipality"
                ],
                [
                    "id" => 4443,
                    "country_id" => 120,
                    "name" => "Saulkrasti Municipality"
                ],
                [
                    "id" => 4444,
                    "country_id" => 120,
                    "name" => "Ērgļi Municipality"
                ],
                [
                    "id" => 4445,
                    "country_id" => 120,
                    "name" => "Aglona Municipality"
                ],
                [
                    "id" => 4446,
                    "country_id" => 120,
                    "name" => "Jūrmala"
                ],
                [
                    "id" => 4447,
                    "country_id" => 120,
                    "name" => "Skrunda Municipality"
                ],
                [
                    "id" => 4448,
                    "country_id" => 120,
                    "name" => "Engure Municipality"
                ],
                [
                    "id" => 4449,
                    "country_id" => 120,
                    "name" => "Inčukalns Municipality"
                ],
                [
                    "id" => 4450,
                    "country_id" => 120,
                    "name" => "Mārupe Municipality"
                ],
                [
                    "id" => 4451,
                    "country_id" => 120,
                    "name" => "Mērsrags Municipality"
                ],
                [
                    "id" => 4452,
                    "country_id" => 120,
                    "name" => "Koknese Municipality"
                ],
                [
                    "id" => 4453,
                    "country_id" => 120,
                    "name" => "Kārsava Municipality"
                ],
                [
                    "id" => 4454,
                    "country_id" => 120,
                    "name" => "Carnikava Municipality"
                ],
                [
                    "id" => 4455,
                    "country_id" => 120,
                    "name" => "Rēzekne Municipality"
                ],
                [
                    "id" => 4456,
                    "country_id" => 120,
                    "name" => "Viesīte Municipality"
                ],
                [
                    "id" => 4457,
                    "country_id" => 120,
                    "name" => "Ape Municipality"
                ],
                [
                    "id" => 4458,
                    "country_id" => 120,
                    "name" => "Durbe Municipality"
                ],
                [
                    "id" => 4459,
                    "country_id" => 120,
                    "name" => "Talsi Municipality"
                ],
                [
                    "id" => 4460,
                    "country_id" => 120,
                    "name" => "Liepāja"
                ],
                [
                    "id" => 4461,
                    "country_id" => 120,
                    "name" => "Mālpils Municipality"
                ],
                [
                    "id" => 4462,
                    "country_id" => 120,
                    "name" => "Smiltene Municipality"
                ],
                [
                    "id" => 4463,
                    "country_id" => 120,
                    "name" => "Daugavpils"
                ],
                [
                    "id" => 4464,
                    "country_id" => 120,
                    "name" => "Jēkabpils"
                ],
                [
                    "id" => 4465,
                    "country_id" => 120,
                    "name" => "Bauska Municipality"
                ],
                [
                    "id" => 4466,
                    "country_id" => 120,
                    "name" => "Vecpiebalga Municipality"
                ],
                [
                    "id" => 4467,
                    "country_id" => 120,
                    "name" => "Pāvilosta Municipality"
                ],
                [
                    "id" => 4468,
                    "country_id" => 120,
                    "name" => "Brocēni Municipality"
                ],
                [
                    "id" => 4469,
                    "country_id" => 120,
                    "name" => "Cēsis Municipality"
                ],
                [
                    "id" => 4470,
                    "country_id" => 120,
                    "name" => "Grobiņa Municipality"
                ],
                [
                    "id" => 4471,
                    "country_id" => 120,
                    "name" => "Beverīna Municipality"
                ],
                [
                    "id" => 4472,
                    "country_id" => 120,
                    "name" => "Aizkraukle Municipality"
                ],
                [
                    "id" => 4473,
                    "country_id" => 120,
                    "name" => "Valmiera"
                ],
                [
                    "id" => 4474,
                    "country_id" => 120,
                    "name" => "Krāslava Municipality"
                ],
                [
                    "id" => 4475,
                    "country_id" => 120,
                    "name" => "Jaunjelgava Municipality"
                ],
                [
                    "id" => 4476,
                    "country_id" => 120,
                    "name" => "Sigulda Municipality"
                ],
                [
                    "id" => 4477,
                    "country_id" => 120,
                    "name" => "Viļaka Municipality"
                ],
                [
                    "id" => 4478,
                    "country_id" => 120,
                    "name" => "Stopiņi Municipality"
                ],
                [
                    "id" => 4479,
                    "country_id" => 120,
                    "name" => "Rauna Municipality"
                ],
                [
                    "id" => 4480,
                    "country_id" => 120,
                    "name" => "Tērvete Municipality"
                ],
                [
                    "id" => 4481,
                    "country_id" => 120,
                    "name" => "Auce Municipality"
                ],
                [
                    "id" => 4482,
                    "country_id" => 120,
                    "name" => "Baldone Municipality"
                ],
                [
                    "id" => 4483,
                    "country_id" => 120,
                    "name" => "Preiļi Municipality"
                ],
                [
                    "id" => 4484,
                    "country_id" => 120,
                    "name" => "Aloja Municipality"
                ],
                [
                    "id" => 4485,
                    "country_id" => 120,
                    "name" => "Alsunga Municipality"
                ],
                [
                    "id" => 4486,
                    "country_id" => 120,
                    "name" => "Viļāni Municipality"
                ],
                [
                    "id" => 4487,
                    "country_id" => 120,
                    "name" => "Alūksne Municipality"
                ],
                [
                    "id" => 4488,
                    "country_id" => 120,
                    "name" => "Līgatne Municipality"
                ],
                [
                    "id" => 4489,
                    "country_id" => 120,
                    "name" => "Jaunpils Municipality"
                ],
                [
                    "id" => 4490,
                    "country_id" => 120,
                    "name" => "Kuldīga Municipality"
                ],
                [
                    "id" => 4491,
                    "country_id" => 120,
                    "name" => "Riga"
                ],
                [
                    "id" => 4492,
                    "country_id" => 120,
                    "name" => "Daugavpils Municipality"
                ],
                [
                    "id" => 4493,
                    "country_id" => 120,
                    "name" => "Ropaži Municipality"
                ],
                [
                    "id" => 4494,
                    "country_id" => 120,
                    "name" => "Strenči Municipality"
                ],
                [
                    "id" => 4495,
                    "country_id" => 120,
                    "name" => "Kocēni Municipality"
                ],
                [
                    "id" => 4496,
                    "country_id" => 120,
                    "name" => "Aizpute Municipality"
                ],
                [
                    "id" => 4497,
                    "country_id" => 120,
                    "name" => "Amata Municipality"
                ],
                [
                    "id" => 4498,
                    "country_id" => 120,
                    "name" => "Baltinava Municipality"
                ],
                [
                    "id" => 4499,
                    "country_id" => 120,
                    "name" => "Aknīste Municipality"
                ],
                [
                    "id" => 4500,
                    "country_id" => 120,
                    "name" => "Jelgava"
                ],
                [
                    "id" => 4501,
                    "country_id" => 120,
                    "name" => "Ludza Municipality"
                ],
                [
                    "id" => 4502,
                    "country_id" => 120,
                    "name" => "Riebiņi Municipality"
                ],
                [
                    "id" => 4503,
                    "country_id" => 120,
                    "name" => "Rucava Municipality"
                ],
                [
                    "id" => 4504,
                    "country_id" => 120,
                    "name" => "Dagda Municipality"
                ],
                [
                    "id" => 4505,
                    "country_id" => 120,
                    "name" => "Balvi Municipality"
                ],
                [
                    "id" => 4506,
                    "country_id" => 120,
                    "name" => "Priekuļi Municipality"
                ],
                [
                    "id" => 4507,
                    "country_id" => 120,
                    "name" => "Pārgauja Municipality"
                ],
                [
                    "id" => 4508,
                    "country_id" => 120,
                    "name" => "Vaiņode Municipality"
                ],
                [
                    "id" => 4509,
                    "country_id" => 120,
                    "name" => "Rēzekne"
                ],
                [
                    "id" => 4510,
                    "country_id" => 120,
                    "name" => "Garkalne Municipality"
                ],
                [
                    "id" => 4511,
                    "country_id" => 120,
                    "name" => "Ikšķile Municipality"
                ],
                [
                    "id" => 4512,
                    "country_id" => 120,
                    "name" => "Lielvārde Municipality"
                ],
                [
                    "id" => 4513,
                    "country_id" => 120,
                    "name" => "Mazsalaca Municipality"
                ],
                [
                    "id" => 4514,
                    "country_id" => 63,
                    "name" => "Viqueque Municipality"
                ],
                [
                    "id" => 4515,
                    "country_id" => 63,
                    "name" => "Liquiçá Municipality"
                ],
                [
                    "id" => 4516,
                    "country_id" => 63,
                    "name" => "Ermera District"
                ],
                [
                    "id" => 4517,
                    "country_id" => 63,
                    "name" => "Manatuto District"
                ],
                [
                    "id" => 4518,
                    "country_id" => 63,
                    "name" => "Ainaro Municipality"
                ],
                [
                    "id" => 4519,
                    "country_id" => 63,
                    "name" => "Manufahi Municipality"
                ],
                [
                    "id" => 4520,
                    "country_id" => 63,
                    "name" => "Aileu municipality"
                ],
                [
                    "id" => 4521,
                    "country_id" => 63,
                    "name" => "Baucau Municipality"
                ],
                [
                    "id" => 4522,
                    "country_id" => 63,
                    "name" => "Cova Lima Municipality"
                ],
                [
                    "id" => 4523,
                    "country_id" => 63,
                    "name" => "Lautém Municipality"
                ],
                [
                    "id" => 4524,
                    "country_id" => 63,
                    "name" => "Dili municipality"
                ],
                [
                    "id" => 4525,
                    "country_id" => 63,
                    "name" => "Bobonaro Municipality"
                ],
                [
                    "id" => 4526,
                    "country_id" => 168,
                    "name" => "Peleliu"
                ],
                [
                    "id" => 4527,
                    "country_id" => 168,
                    "name" => "Ngardmau"
                ],
                [
                    "id" => 4528,
                    "country_id" => 168,
                    "name" => "Airai"
                ],
                [
                    "id" => 4529,
                    "country_id" => 168,
                    "name" => "Hatohobei"
                ],
                [
                    "id" => 4530,
                    "country_id" => 168,
                    "name" => "Melekeok"
                ],
                [
                    "id" => 4531,
                    "country_id" => 168,
                    "name" => "Ngatpang"
                ],
                [
                    "id" => 4532,
                    "country_id" => 168,
                    "name" => "Koror"
                ],
                [
                    "id" => 4533,
                    "country_id" => 168,
                    "name" => "Ngarchelong"
                ],
                [
                    "id" => 4534,
                    "country_id" => 168,
                    "name" => "Ngiwal"
                ],
                [
                    "id" => 4535,
                    "country_id" => 168,
                    "name" => "Sonsorol"
                ],
                [
                    "id" => 4536,
                    "country_id" => 168,
                    "name" => "Ngchesar"
                ],
                [
                    "id" => 4537,
                    "country_id" => 168,
                    "name" => "Ngaraard"
                ],
                [
                    "id" => 4538,
                    "country_id" => 168,
                    "name" => "Angaur"
                ],
                [
                    "id" => 4539,
                    "country_id" => 168,
                    "name" => "Kayangel"
                ],
                [
                    "id" => 4540,
                    "country_id" => 168,
                    "name" => "Aimeliik"
                ],
                [
                    "id" => 4541,
                    "country_id" => 168,
                    "name" => "Ngeremlengui"
                ],
                [
                    "id" => 4542,
                    "country_id" => 58,
                    "name" => "Břeclav"
                ],
                [
                    "id" => 4543,
                    "country_id" => 58,
                    "name" => "Český Krumlov"
                ],
                [
                    "id" => 4544,
                    "country_id" => 58,
                    "name" => "Plzeň-město"
                ],
                [
                    "id" => 4545,
                    "country_id" => 58,
                    "name" => "Brno-venkov"
                ],
                [
                    "id" => 4546,
                    "country_id" => 58,
                    "name" => "Příbram"
                ],
                [
                    "id" => 4547,
                    "country_id" => 58,
                    "name" => "Pardubice"
                ],
                [
                    "id" => 4548,
                    "country_id" => 58,
                    "name" => "Nový Jičín"
                ],
                [
                    "id" => 4550,
                    "country_id" => 58,
                    "name" => "Náchod"
                ],
                [
                    "id" => 4551,
                    "country_id" => 58,
                    "name" => "Prostějov"
                ],
                [
                    "id" => 4552,
                    "country_id" => 58,
                    "name" => "Zlínský kraj"
                ],
                [
                    "id" => 4553,
                    "country_id" => 58,
                    "name" => "Chomutov"
                ],
                [
                    "id" => 4554,
                    "country_id" => 58,
                    "name" => "Středočeský kraj"
                ],
                [
                    "id" => 4556,
                    "country_id" => 58,
                    "name" => "České Budějovice"
                ],
                [
                    "id" => 4558,
                    "country_id" => 58,
                    "name" => "Rakovník"
                ],
                [
                    "id" => 4559,
                    "country_id" => 58,
                    "name" => "Frýdek-Místek"
                ],
                [
                    "id" => 4560,
                    "country_id" => 58,
                    "name" => "Písek"
                ],
                [
                    "id" => 4561,
                    "country_id" => 58,
                    "name" => "Hodonín"
                ],
                [
                    "id" => 4563,
                    "country_id" => 58,
                    "name" => "Zlín"
                ],
                [
                    "id" => 4564,
                    "country_id" => 58,
                    "name" => "Plzeň-sever"
                ],
                [
                    "id" => 4565,
                    "country_id" => 58,
                    "name" => "Tábor"
                ],
                [
                    "id" => 4568,
                    "country_id" => 58,
                    "name" => "Brno-město"
                ],
                [
                    "id" => 4571,
                    "country_id" => 58,
                    "name" => "Svitavy"
                ],
                [
                    "id" => 4572,
                    "country_id" => 58,
                    "name" => "Vsetín"
                ],
                [
                    "id" => 4573,
                    "country_id" => 58,
                    "name" => "Cheb"
                ],
                [
                    "id" => 4574,
                    "country_id" => 58,
                    "name" => "Olomouc"
                ],
                [
                    "id" => 4575,
                    "country_id" => 58,
                    "name" => "Kraj Vysočina"
                ],
                [
                    "id" => 4576,
                    "country_id" => 58,
                    "name" => "Ústecký kraj"
                ],
                [
                    "id" => 4578,
                    "country_id" => 58,
                    "name" => "Prachatice"
                ],
                [
                    "id" => 4579,
                    "country_id" => 58,
                    "name" => "Trutnov"
                ],
                [
                    "id" => 4580,
                    "country_id" => 58,
                    "name" => "Hradec Králové"
                ],
                [
                    "id" => 4581,
                    "country_id" => 58,
                    "name" => "Karlovarský kraj"
                ],
                [
                    "id" => 4582,
                    "country_id" => 58,
                    "name" => "Nymburk"
                ],
                [
                    "id" => 4583,
                    "country_id" => 58,
                    "name" => "Rokycany"
                ],
                [
                    "id" => 4584,
                    "country_id" => 58,
                    "name" => "Ostrava-město"
                ],
                [
                    "id" => 4586,
                    "country_id" => 58,
                    "name" => "Karviná"
                ],
                [
                    "id" => 4588,
                    "country_id" => 58,
                    "name" => "Pardubický kraj"
                ],
                [
                    "id" => 4589,
                    "country_id" => 58,
                    "name" => "Olomoucký kraj"
                ],
                [
                    "id" => 4590,
                    "country_id" => 58,
                    "name" => "Liberec"
                ],
                [
                    "id" => 4591,
                    "country_id" => 58,
                    "name" => "Klatovy"
                ],
                [
                    "id" => 4592,
                    "country_id" => 58,
                    "name" => "Uherské Hradiště"
                ],
                [
                    "id" => 4593,
                    "country_id" => 58,
                    "name" => "Kroměříž"
                ],
                [
                    "id" => 4595,
                    "country_id" => 58,
                    "name" => "Sokolov"
                ],
                [
                    "id" => 4596,
                    "country_id" => 58,
                    "name" => "Semily"
                ],
                [
                    "id" => 4597,
                    "country_id" => 58,
                    "name" => "Třebíč"
                ],
                [
                    "id" => 4598,
                    "country_id" => 58,
                    "name" => "Praha, Hlavní město"
                ],
                [
                    "id" => 4599,
                    "country_id" => 58,
                    "name" => "Ústí nad Labem"
                ],
                [
                    "id" => 4600,
                    "country_id" => 58,
                    "name" => "Moravskoslezský kraj"
                ],
                [
                    "id" => 4601,
                    "country_id" => 58,
                    "name" => "Liberecký kraj"
                ],
                [
                    "id" => 4602,
                    "country_id" => 58,
                    "name" => "Jihomoravský kraj"
                ],
                [
                    "id" => 4604,
                    "country_id" => 58,
                    "name" => "Karlovy Vary"
                ],
                [
                    "id" => 4605,
                    "country_id" => 58,
                    "name" => "Litoměřice"
                ],
                [
                    "id" => 4606,
                    "country_id" => 58,
                    "name" => "Praha-východ"
                ],
                [
                    "id" => 4607,
                    "country_id" => 58,
                    "name" => "Plzeňský kraj"
                ],
                [
                    "id" => 4608,
                    "country_id" => 58,
                    "name" => "Plzeň-jih"
                ],
                [
                    "id" => 4609,
                    "country_id" => 58,
                    "name" => "Děčín"
                ],
                [
                    "id" => 4611,
                    "country_id" => 58,
                    "name" => "Havlíčkův Brod"
                ],
                [
                    "id" => 4612,
                    "country_id" => 58,
                    "name" => "Jablonec nad Nisou"
                ],
                [
                    "id" => 4613,
                    "country_id" => 58,
                    "name" => "Jihlava"
                ],
                [
                    "id" => 4614,
                    "country_id" => 58,
                    "name" => "Královéhradecký kraj"
                ],
                [
                    "id" => 4615,
                    "country_id" => 58,
                    "name" => "Blansko"
                ],
                [
                    "id" => 4617,
                    "country_id" => 58,
                    "name" => "Louny"
                ],
                [
                    "id" => 4618,
                    "country_id" => 58,
                    "name" => "Kolín"
                ],
                [
                    "id" => 4619,
                    "country_id" => 58,
                    "name" => "Praha-západ"
                ],
                [
                    "id" => 4620,
                    "country_id" => 58,
                    "name" => "Beroun"
                ],
                [
                    "id" => 4621,
                    "country_id" => 58,
                    "name" => "Teplice"
                ],
                [
                    "id" => 4622,
                    "country_id" => 58,
                    "name" => "Vyškov"
                ],
                [
                    "id" => 4623,
                    "country_id" => 58,
                    "name" => "Opava"
                ],
                [
                    "id" => 4624,
                    "country_id" => 58,
                    "name" => "Jindřichův Hradec"
                ],
                [
                    "id" => 4625,
                    "country_id" => 58,
                    "name" => "Jeseník"
                ],
                [
                    "id" => 4626,
                    "country_id" => 58,
                    "name" => "Přerov"
                ],
                [
                    "id" => 4627,
                    "country_id" => 58,
                    "name" => "Benešov"
                ],
                [
                    "id" => 4628,
                    "country_id" => 58,
                    "name" => "Strakonice"
                ],
                [
                    "id" => 4629,
                    "country_id" => 58,
                    "name" => "Most"
                ],
                [
                    "id" => 4630,
                    "country_id" => 58,
                    "name" => "Znojmo"
                ],
                [
                    "id" => 4631,
                    "country_id" => 58,
                    "name" => "Kladno"
                ],
                [
                    "id" => 4633,
                    "country_id" => 58,
                    "name" => "Česká Lípa"
                ],
                [
                    "id" => 4634,
                    "country_id" => 58,
                    "name" => "Chrudim"
                ],
                [
                    "id" => 4636,
                    "country_id" => 58,
                    "name" => "Rychnov nad Kněžnou"
                ],
                [
                    "id" => 4638,
                    "country_id" => 58,
                    "name" => "Mělník"
                ],
                [
                    "id" => 4639,
                    "country_id" => 58,
                    "name" => "Jihočeský kraj"
                ],
                [
                    "id" => 4640,
                    "country_id" => 58,
                    "name" => "Jičín"
                ],
                [
                    "id" => 4641,
                    "country_id" => 58,
                    "name" => "Domažlice"
                ],
                [
                    "id" => 4642,
                    "country_id" => 58,
                    "name" => "Šumperk"
                ],
                [
                    "id" => 4643,
                    "country_id" => 58,
                    "name" => "Mladá Boleslav"
                ],
                [
                    "id" => 4644,
                    "country_id" => 58,
                    "name" => "Bruntál"
                ],
                [
                    "id" => 4645,
                    "country_id" => 58,
                    "name" => "Pelhřimov"
                ],
                [
                    "id" => 4646,
                    "country_id" => 58,
                    "name" => "Tachov"
                ],
                [
                    "id" => 4647,
                    "country_id" => 58,
                    "name" => "Ústí nad Orlicí"
                ],
                [
                    "id" => 4648,
                    "country_id" => 58,
                    "name" => "Žďár nad Sázavou"
                ],
                [
                    "id" => 4649,
                    "country_id" => 199,
                    "name" => "North East"
                ],
                [
                    "id" => 4650,
                    "country_id" => 199,
                    "name" => "South East"
                ],
                [
                    "id" => 4651,
                    "country_id" => 199,
                    "name" => "Central Singapore"
                ],
                [
                    "id" => 4652,
                    "country_id" => 199,
                    "name" => "South West"
                ],
                [
                    "id" => 4653,
                    "country_id" => 199,
                    "name" => "North West"
                ],
                [
                    "id" => 4654,
                    "country_id" => 153,
                    "name" => "Ewa District"
                ],
                [
                    "id" => 4655,
                    "country_id" => 153,
                    "name" => "Uaboe District"
                ],
                [
                    "id" => 4656,
                    "country_id" => 153,
                    "name" => "Aiwo District"
                ],
                [
                    "id" => 4657,
                    "country_id" => 153,
                    "name" => "Meneng District"
                ],
                [
                    "id" => 4658,
                    "country_id" => 153,
                    "name" => "Anabar District"
                ],
                [
                    "id" => 4659,
                    "country_id" => 153,
                    "name" => "Nibok District"
                ],
                [
                    "id" => 4660,
                    "country_id" => 153,
                    "name" => "Baiti District"
                ],
                [
                    "id" => 4661,
                    "country_id" => 153,
                    "name" => "Ijuw District"
                ],
                [
                    "id" => 4662,
                    "country_id" => 153,
                    "name" => "Buada District"
                ],
                [
                    "id" => 4663,
                    "country_id" => 153,
                    "name" => "Anibare District"
                ],
                [
                    "id" => 4664,
                    "country_id" => 153,
                    "name" => "Yaren District"
                ],
                [
                    "id" => 4665,
                    "country_id" => 153,
                    "name" => "Boe District"
                ],
                [
                    "id" => 4666,
                    "country_id" => 153,
                    "name" => "Denigomodu District"
                ],
                [
                    "id" => 4667,
                    "country_id" => 153,
                    "name" => "Anetan District"
                ],
                [
                    "id" => 4668,
                    "country_id" => 230,
                    "name" => "Zhytomyrska oblast"
                ],
                [
                    "id" => 4669,
                    "country_id" => 230,
                    "name" => "Vinnytska oblast"
                ],
                [
                    "id" => 4670,
                    "country_id" => 230,
                    "name" => "Zakarpatska Oblast"
                ],
                [
                    "id" => 4671,
                    "country_id" => 230,
                    "name" => "Kyivska oblast"
                ],
                [
                    "id" => 4672,
                    "country_id" => 230,
                    "name" => "Lvivska oblast"
                ],
                [
                    "id" => 4673,
                    "country_id" => 230,
                    "name" => "Luhanska oblast"
                ],
                [
                    "id" => 4674,
                    "country_id" => 230,
                    "name" => "Ternopilska oblast"
                ],
                [
                    "id" => 4675,
                    "country_id" => 230,
                    "name" => "Dnipropetrovska oblast"
                ],
                [
                    "id" => 4676,
                    "country_id" => 230,
                    "name" => "Kyiv"
                ],
                [
                    "id" => 4677,
                    "country_id" => 230,
                    "name" => "Kirovohradska oblast"
                ],
                [
                    "id" => 4678,
                    "country_id" => 230,
                    "name" => "Chernivetska oblast"
                ],
                [
                    "id" => 4679,
                    "country_id" => 230,
                    "name" => "Mykolaivska oblast"
                ],
                [
                    "id" => 4680,
                    "country_id" => 230,
                    "name" => "Cherkaska oblast"
                ],
                [
                    "id" => 4681,
                    "country_id" => 230,
                    "name" => "Khmelnytska oblast"
                ],
                [
                    "id" => 4682,
                    "country_id" => 230,
                    "name" => "Ivano-Frankivska oblast"
                ],
                [
                    "id" => 4683,
                    "country_id" => 230,
                    "name" => "Rivnenska oblast"
                ],
                [
                    "id" => 4684,
                    "country_id" => 230,
                    "name" => "Khersonska oblast"
                ],
                [
                    "id" => 4685,
                    "country_id" => 230,
                    "name" => "Sumska oblast"
                ],
                [
                    "id" => 4686,
                    "country_id" => 230,
                    "name" => "Kharkivska oblast"
                ],
                [
                    "id" => 4687,
                    "country_id" => 230,
                    "name" => "Zaporizka oblast"
                ],
                [
                    "id" => 4688,
                    "country_id" => 230,
                    "name" => "Odeska oblast"
                ],
                [
                    "id" => 4689,
                    "country_id" => 230,
                    "name" => "Autonomous Republic of Crimea"
                ],
                [
                    "id" => 4690,
                    "country_id" => 230,
                    "name" => "Volynska oblast"
                ],
                [
                    "id" => 4691,
                    "country_id" => 230,
                    "name" => "Donetska oblast"
                ],
                [
                    "id" => 4692,
                    "country_id" => 230,
                    "name" => "Chernihivska oblast"
                ],
                [
                    "id" => 4693,
                    "country_id" => 34,
                    "name" => "Gabrovo Province"
                ],
                [
                    "id" => 4694,
                    "country_id" => 34,
                    "name" => "Smolyan Province"
                ],
                [
                    "id" => 4695,
                    "country_id" => 34,
                    "name" => "Pernik Province"
                ],
                [
                    "id" => 4696,
                    "country_id" => 34,
                    "name" => "Montana Province"
                ],
                [
                    "id" => 4697,
                    "country_id" => 34,
                    "name" => "Vidin Province"
                ],
                [
                    "id" => 4698,
                    "country_id" => 34,
                    "name" => "Razgrad Province"
                ],
                [
                    "id" => 4699,
                    "country_id" => 34,
                    "name" => "Blagoevgrad Province"
                ],
                [
                    "id" => 4700,
                    "country_id" => 34,
                    "name" => "Sliven Province"
                ],
                [
                    "id" => 4701,
                    "country_id" => 34,
                    "name" => "Plovdiv Province"
                ],
                [
                    "id" => 4702,
                    "country_id" => 34,
                    "name" => "Kardzhali Province"
                ],
                [
                    "id" => 4703,
                    "country_id" => 34,
                    "name" => "Kyustendil Province"
                ],
                [
                    "id" => 4704,
                    "country_id" => 34,
                    "name" => "Haskovo Province"
                ],
                [
                    "id" => 4705,
                    "country_id" => 34,
                    "name" => "Sofia City Province"
                ],
                [
                    "id" => 4706,
                    "country_id" => 34,
                    "name" => "Pleven Province"
                ],
                [
                    "id" => 4707,
                    "country_id" => 34,
                    "name" => "Stara Zagora Province"
                ],
                [
                    "id" => 4708,
                    "country_id" => 34,
                    "name" => "Silistra Province"
                ],
                [
                    "id" => 4709,
                    "country_id" => 34,
                    "name" => "Veliko Tarnovo Province"
                ],
                [
                    "id" => 4710,
                    "country_id" => 34,
                    "name" => "Lovech Province"
                ],
                [
                    "id" => 4711,
                    "country_id" => 34,
                    "name" => "Vratsa Province"
                ],
                [
                    "id" => 4712,
                    "country_id" => 34,
                    "name" => "Pazardzhik Province"
                ],
                [
                    "id" => 4713,
                    "country_id" => 34,
                    "name" => "Ruse Province"
                ],
                [
                    "id" => 4714,
                    "country_id" => 34,
                    "name" => "Targovishte Province"
                ],
                [
                    "id" => 4715,
                    "country_id" => 34,
                    "name" => "Burgas Province"
                ],
                [
                    "id" => 4716,
                    "country_id" => 34,
                    "name" => "Yambol Province"
                ],
                [
                    "id" => 4717,
                    "country_id" => 34,
                    "name" => "Varna Province"
                ],
                [
                    "id" => 4718,
                    "country_id" => 34,
                    "name" => "Dobrich Province"
                ],
                [
                    "id" => 4719,
                    "country_id" => 34,
                    "name" => "Sofia Province"
                ],
                [
                    "id" => 4720,
                    "country_id" => 181,
                    "name" => "Suceava County"
                ],
                [
                    "id" => 4721,
                    "country_id" => 181,
                    "name" => "Hunedoara County"
                ],
                [
                    "id" => 4722,
                    "country_id" => 181,
                    "name" => "Arges"
                ],
                [
                    "id" => 4723,
                    "country_id" => 181,
                    "name" => "Bihor County"
                ],
                [
                    "id" => 4724,
                    "country_id" => 181,
                    "name" => "Alba"
                ],
                [
                    "id" => 4725,
                    "country_id" => 181,
                    "name" => "Ilfov County"
                ],
                [
                    "id" => 4726,
                    "country_id" => 181,
                    "name" => "Giurgiu County"
                ],
                [
                    "id" => 4727,
                    "country_id" => 181,
                    "name" => "Tulcea County"
                ],
                [
                    "id" => 4728,
                    "country_id" => 181,
                    "name" => "Teleorman County"
                ],
                [
                    "id" => 4729,
                    "country_id" => 181,
                    "name" => "Prahova County"
                ],
                [
                    "id" => 4730,
                    "country_id" => 181,
                    "name" => "Bucharest"
                ],
                [
                    "id" => 4731,
                    "country_id" => 181,
                    "name" => "Neamț County"
                ],
                [
                    "id" => 4732,
                    "country_id" => 181,
                    "name" => "Călărași County"
                ],
                [
                    "id" => 4733,
                    "country_id" => 181,
                    "name" => "Bistrița-Năsăud County"
                ],
                [
                    "id" => 4734,
                    "country_id" => 181,
                    "name" => "Cluj County"
                ],
                [
                    "id" => 4735,
                    "country_id" => 181,
                    "name" => "Iași County"
                ],
                [
                    "id" => 4736,
                    "country_id" => 181,
                    "name" => "Braila"
                ],
                [
                    "id" => 4737,
                    "country_id" => 181,
                    "name" => "Constanța County"
                ],
                [
                    "id" => 4738,
                    "country_id" => 181,
                    "name" => "Olt County"
                ],
                [
                    "id" => 4739,
                    "country_id" => 181,
                    "name" => "Arad County"
                ],
                [
                    "id" => 4740,
                    "country_id" => 181,
                    "name" => "Botoșani County"
                ],
                [
                    "id" => 4741,
                    "country_id" => 181,
                    "name" => "Sălaj County"
                ],
                [
                    "id" => 4742,
                    "country_id" => 181,
                    "name" => "Dolj County"
                ],
                [
                    "id" => 4743,
                    "country_id" => 181,
                    "name" => "Ialomița County"
                ],
                [
                    "id" => 4744,
                    "country_id" => 181,
                    "name" => "Bacău County"
                ],
                [
                    "id" => 4745,
                    "country_id" => 181,
                    "name" => "Dâmbovița County"
                ],
                [
                    "id" => 4746,
                    "country_id" => 181,
                    "name" => "Satu Mare County"
                ],
                [
                    "id" => 4747,
                    "country_id" => 181,
                    "name" => "Galați County"
                ],
                [
                    "id" => 4748,
                    "country_id" => 181,
                    "name" => "Timiș County"
                ],
                [
                    "id" => 4749,
                    "country_id" => 181,
                    "name" => "Harghita County"
                ],
                [
                    "id" => 4750,
                    "country_id" => 181,
                    "name" => "Gorj County"
                ],
                [
                    "id" => 4751,
                    "country_id" => 181,
                    "name" => "Mehedinți County"
                ],
                [
                    "id" => 4752,
                    "country_id" => 181,
                    "name" => "Vaslui County"
                ],
                [
                    "id" => 4753,
                    "country_id" => 181,
                    "name" => "Caraș-Severin County"
                ],
                [
                    "id" => 4754,
                    "country_id" => 181,
                    "name" => "Covasna County"
                ],
                [
                    "id" => 4755,
                    "country_id" => 181,
                    "name" => "Sibiu County"
                ],
                [
                    "id" => 4756,
                    "country_id" => 181,
                    "name" => "Buzău County"
                ],
                [
                    "id" => 4757,
                    "country_id" => 181,
                    "name" => "Vâlcea County"
                ],
                [
                    "id" => 4758,
                    "country_id" => 181,
                    "name" => "Vrancea County"
                ],
                [
                    "id" => 4759,
                    "country_id" => 181,
                    "name" => "Brașov County"
                ],
                [
                    "id" => 4760,
                    "country_id" => 181,
                    "name" => "Maramureș County"
                ],
                [
                    "id" => 4761,
                    "country_id" => 191,
                    "name" => "Aiga-i-le-Tai"
                ],
                [
                    "id" => 4762,
                    "country_id" => 191,
                    "name" => "Satupa'itea"
                ],
                [
                    "id" => 4763,
                    "country_id" => 191,
                    "name" => "A'ana"
                ],
                [
                    "id" => 4764,
                    "country_id" => 191,
                    "name" => "Fa'asaleleaga"
                ],
                [
                    "id" => 4765,
                    "country_id" => 191,
                    "name" => "Atua"
                ],
                [
                    "id" => 4766,
                    "country_id" => 191,
                    "name" => "Vaisigano"
                ],
                [
                    "id" => 4767,
                    "country_id" => 191,
                    "name" => "Palauli"
                ],
                [
                    "id" => 4768,
                    "country_id" => 191,
                    "name" => "Va'a-o-Fonoti"
                ],
                [
                    "id" => 4769,
                    "country_id" => 191,
                    "name" => "Gaga'emauga"
                ],
                [
                    "id" => 4770,
                    "country_id" => 191,
                    "name" => "Tuamasaga"
                ],
                [
                    "id" => 4771,
                    "country_id" => 191,
                    "name" => "Gaga'ifomauga"
                ],
                [
                    "id" => 4772,
                    "country_id" => 237,
                    "name" => "Torba"
                ],
                [
                    "id" => 4773,
                    "country_id" => 237,
                    "name" => "Penama"
                ],
                [
                    "id" => 4774,
                    "country_id" => 237,
                    "name" => "Shefa"
                ],
                [
                    "id" => 4775,
                    "country_id" => 237,
                    "name" => "Malampa"
                ],
                [
                    "id" => 4776,
                    "country_id" => 237,
                    "name" => "Sanma"
                ],
                [
                    "id" => 4777,
                    "country_id" => 237,
                    "name" => "Tafea"
                ],
                [
                    "id" => 4778,
                    "country_id" => 202,
                    "name" => "Honiara"
                ],
                [
                    "id" => 4779,
                    "country_id" => 202,
                    "name" => "Temotu Province"
                ],
                [
                    "id" => 4780,
                    "country_id" => 202,
                    "name" => "Isabel Province"
                ],
                [
                    "id" => 4781,
                    "country_id" => 202,
                    "name" => "Choiseul Province"
                ],
                [
                    "id" => 4782,
                    "country_id" => 202,
                    "name" => "Makira-Ulawa Province"
                ],
                [
                    "id" => 4783,
                    "country_id" => 202,
                    "name" => "Malaita Province"
                ],
                [
                    "id" => 4784,
                    "country_id" => 202,
                    "name" => "Central Province"
                ],
                [
                    "id" => 4785,
                    "country_id" => 202,
                    "name" => "Guadalcanal Province"
                ],
                [
                    "id" => 4786,
                    "country_id" => 202,
                    "name" => "Western Province"
                ],
                [
                    "id" => 4787,
                    "country_id" => 202,
                    "name" => "Rennell and Bellona Province"
                ],
                [
                    "id" => 4794,
                    "country_id" => 75,
                    "name" => "Saint-Barthélemy"
                ],
                [
                    "id" => 4795,
                    "country_id" => 75,
                    "name" => "Nouvelle-Aquitaine"
                ],
                [
                    "id" => 4796,
                    "country_id" => 75,
                    "name" => "Île-de-France"
                ],
                [
                    "id" => 4797,
                    "country_id" => 75,
                    "name" => "Mayotte"
                ],
                [
                    "id" => 4798,
                    "country_id" => 75,
                    "name" => "Auvergne-Rhône-Alpes"
                ],
                [
                    "id" => 4799,
                    "country_id" => 75,
                    "name" => "Occitanie"
                ],
                [
                    "id" => 4802,
                    "country_id" => 75,
                    "name" => "Pays-de-la-Loire"
                ],
                [
                    "id" => 4804,
                    "country_id" => 75,
                    "name" => "Normandie"
                ],
                [
                    "id" => 4806,
                    "country_id" => 75,
                    "name" => "Corse"
                ],
                [
                    "id" => 4807,
                    "country_id" => 75,
                    "name" => "Bretagne"
                ],
                [
                    "id" => 4809,
                    "country_id" => 75,
                    "name" => "Saint-Martin"
                ],
                [
                    "id" => 4810,
                    "country_id" => 75,
                    "name" => "Wallis and Futuna"
                ],
                [
                    "id" => 4811,
                    "country_id" => 75,
                    "name" => "Alsace"
                ],
                [
                    "id" => 4812,
                    "country_id" => 75,
                    "name" => "Provence-Alpes-Côte-d’Azur"
                ],
                [
                    "id" => 4816,
                    "country_id" => 75,
                    "name" => "Paris"
                ],
                [
                    "id" => 4818,
                    "country_id" => 75,
                    "name" => "Centre-Val de Loire"
                ],
                [
                    "id" => 4820,
                    "country_id" => 75,
                    "name" => "Grand-Est"
                ],
                [
                    "id" => 4821,
                    "country_id" => 75,
                    "name" => "Saint Pierre and Miquelon"
                ],
                [
                    "id" => 4822,
                    "country_id" => 75,
                    "name" => "French Guiana"
                ],
                [
                    "id" => 4823,
                    "country_id" => 75,
                    "name" => "La Réunion"
                ],
                [
                    "id" => 4824,
                    "country_id" => 75,
                    "name" => "French Polynesia"
                ],
                [
                    "id" => 4825,
                    "country_id" => 75,
                    "name" => "Bourgogne-Franche-Comté"
                ],
                [
                    "id" => 4827,
                    "country_id" => 75,
                    "name" => "Martinique"
                ],
                [
                    "id" => 4828,
                    "country_id" => 75,
                    "name" => "Hauts-de-France"
                ],
                [
                    "id" => 4829,
                    "country_id" => 75,
                    "name" => "Guadeloupe"
                ],
                [
                    "id" => 4830,
                    "country_id" => 171,
                    "name" => "West New Britain Province"
                ],
                [
                    "id" => 4831,
                    "country_id" => 171,
                    "name" => "Bougainville"
                ],
                [
                    "id" => 4832,
                    "country_id" => 171,
                    "name" => "Jiwaka Province"
                ],
                [
                    "id" => 4833,
                    "country_id" => 171,
                    "name" => "Hela"
                ],
                [
                    "id" => 4834,
                    "country_id" => 171,
                    "name" => "East New Britain"
                ],
                [
                    "id" => 4835,
                    "country_id" => 171,
                    "name" => "Morobe Province"
                ],
                [
                    "id" => 4836,
                    "country_id" => 171,
                    "name" => "Sandaun Province"
                ],
                [
                    "id" => 4837,
                    "country_id" => 171,
                    "name" => "Port Moresby"
                ],
                [
                    "id" => 4838,
                    "country_id" => 171,
                    "name" => "Oro Province"
                ],
                [
                    "id" => 4839,
                    "country_id" => 171,
                    "name" => "Gulf"
                ],
                [
                    "id" => 4840,
                    "country_id" => 171,
                    "name" => "Western Highlands Province"
                ],
                [
                    "id" => 4841,
                    "country_id" => 171,
                    "name" => "New Ireland Province"
                ],
                [
                    "id" => 4842,
                    "country_id" => 171,
                    "name" => "Manus Province"
                ],
                [
                    "id" => 4843,
                    "country_id" => 171,
                    "name" => "Madang Province"
                ],
                [
                    "id" => 4844,
                    "country_id" => 171,
                    "name" => "Southern Highlands Province"
                ],
                [
                    "id" => 4845,
                    "country_id" => 171,
                    "name" => "Eastern Highlands Province"
                ],
                [
                    "id" => 4846,
                    "country_id" => 171,
                    "name" => "Chimbu Province"
                ],
                [
                    "id" => 4847,
                    "country_id" => 171,
                    "name" => "Central Province"
                ],
                [
                    "id" => 4848,
                    "country_id" => 171,
                    "name" => "Enga Province"
                ],
                [
                    "id" => 4849,
                    "country_id" => 171,
                    "name" => "Milne Bay Province"
                ],
                [
                    "id" => 4850,
                    "country_id" => 171,
                    "name" => "Western Province"
                ],
                [
                    "id" => 4851,
                    "country_id" => 233,
                    "name" => "Ohio"
                ],
                [
                    "id" => 4852,
                    "country_id" => 101,
                    "name" => "Ladakh"
                ],
                [
                    "id" => 4853,
                    "country_id" => 101,
                    "name" => "West Bengal"
                ],
                [
                    "id" => 4854,
                    "country_id" => 225,
                    "name" => "Sinop"
                ],
                [
                    "id" => 4855,
                    "country_id" => 239,
                    "name" => "Distrito Capital"
                ],
                [
                    "id" => 4856,
                    "country_id" => 239,
                    "name" => "Apure"
                ],
                [
                    "id" => 4857,
                    "country_id" => 142,
                    "name" => "Jalisco"
                ],
                [
                    "id" => 4858,
                    "country_id" => 31,
                    "name" => "Roraima"
                ],
                [
                    "id" => 4859,
                    "country_id" => 177,
                    "name" => "Guarda"
                ],
                [
                    "id" => 4860,
                    "country_id" => 25,
                    "name" => "Devonshire"
                ],
                [
                    "id" => 4861,
                    "country_id" => 25,
                    "name" => "Hamilton"
                ],
                [
                    "id" => 4863,
                    "country_id" => 25,
                    "name" => "Paget"
                ],
                [
                    "id" => 4864,
                    "country_id" => 25,
                    "name" => "Pembroke"
                ],
                [
                    "id" => 4866,
                    "country_id" => 25,
                    "name" => "Saint George's"
                ],
                [
                    "id" => 4867,
                    "country_id" => 25,
                    "name" => "Sandys"
                ],
                [
                    "id" => 4868,
                    "country_id" => 25,
                    "name" => "Smith's"
                ],
                [
                    "id" => 4869,
                    "country_id" => 25,
                    "name" => "Southampton"
                ],
                [
                    "id" => 4870,
                    "country_id" => 25,
                    "name" => "Warwick"
                ],
                [
                    "id" => 4871,
                    "country_id" => 48,
                    "name" => "Huila"
                ],
                [
                    "id" => 4874,
                    "country_id" => 248,
                    "name" => "Uroševac District (Ferizaj)"
                ],
                [
                    "id" => 4876,
                    "country_id" => 248,
                    "name" => "Đakovica District (Gjakove)"
                ],
                [
                    "id" => 4877,
                    "country_id" => 248,
                    "name" => "Gjilan District"
                ],
                [
                    "id" => 4878,
                    "country_id" => 248,
                    "name" => "Kosovska Mitrovica District"
                ],
                [
                    "id" => 4879,
                    "country_id" => 248,
                    "name" => "Pristina (Priştine)"
                ],
                [
                    "id" => 4880,
                    "country_id" => 11,
                    "name" => "Ciudad Autónoma de Buenos Aires"
                ],
                [
                    "id" => 4881,
                    "country_id" => 17,
                    "name" => "New Providence"
                ],
                [
                    "id" => 4882,
                    "country_id" => 34,
                    "name" => "Shumen"
                ],
                [
                    "id" => 4883,
                    "country_id" => 98,
                    "name" => "Yuen Long"
                ],
                [
                    "id" => 4884,
                    "country_id" => 98,
                    "name" => "Tsuen Wan"
                ],
                [
                    "id" => 4885,
                    "country_id" => 98,
                    "name" => "Tai Po"
                ],
                [
                    "id" => 4887,
                    "country_id" => 98,
                    "name" => "Sai Kung"
                ],
                [
                    "id" => 4888,
                    "country_id" => 98,
                    "name" => "Islands"
                ],
                [
                    "id" => 4889,
                    "country_id" => 98,
                    "name" => "Central and Western"
                ],
                [
                    "id" => 4890,
                    "country_id" => 98,
                    "name" => "Wan Chai"
                ],
                [
                    "id" => 4891,
                    "country_id" => 98,
                    "name" => "Eastern"
                ],
                [
                    "id" => 4892,
                    "country_id" => 98,
                    "name" => "Southern"
                ],
                [
                    "id" => 4893,
                    "country_id" => 98,
                    "name" => "Yau Tsim Mong"
                ],
                [
                    "id" => 4894,
                    "country_id" => 98,
                    "name" => "Sham Shui Po"
                ],
                [
                    "id" => 4895,
                    "country_id" => 98,
                    "name" => "Kowloon City"
                ],
                [
                    "id" => 4896,
                    "country_id" => 98,
                    "name" => "Wong Tai Sin"
                ],
                [
                    "id" => 4897,
                    "country_id" => 98,
                    "name" => "Kwun Tong"
                ],
                [
                    "id" => 4898,
                    "country_id" => 98,
                    "name" => "Kwai Tsing"
                ],
                [
                    "id" => 4899,
                    "country_id" => 98,
                    "name" => "Tuen Mun"
                ],
                [
                    "id" => 4900,
                    "country_id" => 98,
                    "name" => "North"
                ],
                [
                    "id" => 4901,
                    "country_id" => 98,
                    "name" => "Sha Tin"
                ],
                [
                    "id" => 4902,
                    "country_id" => 4,
                    "name" => "Sidi Bel Abbès"
                ],
                [
                    "id" => 4905,
                    "country_id" => 4,
                    "name" => "El M'ghair"
                ],
                [
                    "id" => 4906,
                    "country_id" => 4,
                    "name" => "El Menia"
                ],
                [
                    "id" => 4907,
                    "country_id" => 4,
                    "name" => "Ouled Djellal"
                ],
                [
                    "id" => 4908,
                    "country_id" => 4,
                    "name" => "Bordj Baji Mokhtar"
                ],
                [
                    "id" => 4909,
                    "country_id" => 4,
                    "name" => "Béni Abbès"
                ],
                [
                    "id" => 4910,
                    "country_id" => 4,
                    "name" => "Timimoun"
                ],
                [
                    "id" => 4911,
                    "country_id" => 4,
                    "name" => "Touggourt"
                ],
                [
                    "id" => 4912,
                    "country_id" => 4,
                    "name" => "Djanet"
                ],
                [
                    "id" => 4913,
                    "country_id" => 4,
                    "name" => "In Salah"
                ],
                [
                    "id" => 4914,
                    "country_id" => 4,
                    "name" => "In Guezzam"
                ],
                [
                    "id" => 4915,
                    "country_id" => 181,
                    "name" => "Mureș County"
                ],
                [
                    "id" => 4916,
                    "country_id" => 182,
                    "name" => "Volgograd Oblast"
                ],
                [
                    "id" => 4917,
                    "country_id" => 145,
                    "name" => "La Colle"
                ],
                [
                    "id" => 4918,
                    "country_id" => 145,
                    "name" => "La Condamine"
                ],
                [
                    "id" => 4919,
                    "country_id" => 145,
                    "name" => "Moneghetti"
                ],
                [
                    "id" => 4920,
                    "country_id" => 103,
                    "name" => "Hamadan"
                ],
                [
                    "id" => 4921,
                    "country_id" => 48,
                    "name" => "Bogotá D.C."
                ],
                [
                    "id" => 4922,
                    "country_id" => 173,
                    "name" => "Loreto"
                ],
                [
                    "id" => 4923,
                    "country_id" => 58,
                    "name" => "Kutná Hora"
                ],
                [
                    "id" => 4924,
                    "country_id" => 109,
                    "name" => "Kōchi Prefecture"
                ],
                [
                    "id" => 4925,
                    "country_id" => 240,
                    "name" => "Cần Thơ"
                ],
                [
                    "id" => 4926,
                    "country_id" => 161,
                    "name" => "Rivers"
                ],
                [
                    "id" => 4927,
                    "country_id" => 149,
                    "name" => "Rabat-Salé-Kénitra"
                ],
                [
                    "id" => 4928,
                    "country_id" => 149,
                    "name" => "Agadir-Ida-Ou-Tanane"
                ],
                [
                    "id" => 4929,
                    "country_id" => 149,
                    "name" => "Berrechid"
                ],
                [
                    "id" => 4930,
                    "country_id" => 149,
                    "name" => "Casablanca"
                ],
                [
                    "id" => 4931,
                    "country_id" => 149,
                    "name" => "Driouch"
                ],
                [
                    "id" => 4932,
                    "country_id" => 149,
                    "name" => "Fès"
                ],
                [
                    "id" => 4933,
                    "country_id" => 149,
                    "name" => "Fquih Ben Salah"
                ],
                [
                    "id" => 4934,
                    "country_id" => 149,
                    "name" => "Guercif"
                ],
                [
                    "id" => 4935,
                    "country_id" => 149,
                    "name" => "Marrakech"
                ],
                [
                    "id" => 4936,
                    "country_id" => 149,
                    "name" => "M’diq-Fnideq"
                ],
                [
                    "id" => 4937,
                    "country_id" => 149,
                    "name" => "Meknès"
                ],
                [
                    "id" => 4938,
                    "country_id" => 149,
                    "name" => "Midelt"
                ],
                [
                    "id" => 4939,
                    "country_id" => 149,
                    "name" => "Mohammadia"
                ],
                [
                    "id" => 4940,
                    "country_id" => 149,
                    "name" => "Oujda-Angad"
                ],
                [
                    "id" => 4941,
                    "country_id" => 149,
                    "name" => "Ouezzane"
                ],
                [
                    "id" => 4942,
                    "country_id" => 149,
                    "name" => "Rabat"
                ],
                [
                    "id" => 4943,
                    "country_id" => 149,
                    "name" => "Rehamna"
                ],
                [
                    "id" => 4944,
                    "country_id" => 149,
                    "name" => "Salé"
                ],
                [
                    "id" => 4945,
                    "country_id" => 149,
                    "name" => "Sidi Bennour"
                ],
                [
                    "id" => 4946,
                    "country_id" => 149,
                    "name" => "Sidi Ifni"
                ],
                [
                    "id" => 4947,
                    "country_id" => 149,
                    "name" => "Skhirate-Témara"
                ],
                [
                    "id" => 4948,
                    "country_id" => 149,
                    "name" => "Tarfaya (EH-partial)"
                ],
                [
                    "id" => 4949,
                    "country_id" => 149,
                    "name" => "Tinghir"
                ],
                [
                    "id" => 4950,
                    "country_id" => 149,
                    "name" => "Tanger-Assilah"
                ],
                [
                    "id" => 4951,
                    "country_id" => 149,
                    "name" => "Youssoufia"
                ],
                [
                    "id" => 4952,
                    "country_id" => 149,
                    "name" => "Sidi Slimane"
                ],
                [
                    "id" => 4953,
                    "country_id" => 51,
                    "name" => "Lualaba"
                ],
                [
                    "id" => 4954,
                    "country_id" => 219,
                    "name" => "Chaiyaphum"
                ],
                [
                    "id" => 4955,
                    "country_id" => 218,
                    "name" => "Mbeya"
                ],
                [
                    "id" => 4956,
                    "country_id" => 218,
                    "name" => "Songwe"
                ],
                [
                    "id" => 4957,
                    "country_id" => 214,
                    "name" => "Basel-Stadt"
                ],
                [
                    "id" => 4958,
                    "country_id" => 83,
                    "name" => "Bono East"
                ],
                [
                    "id" => 4959,
                    "country_id" => 83,
                    "name" => "Bono"
                ],
                [
                    "id" => 4960,
                    "country_id" => 83,
                    "name" => "North East"
                ],
                [
                    "id" => 4961,
                    "country_id" => 83,
                    "name" => "Oti"
                ],
                [
                    "id" => 4962,
                    "country_id" => 83,
                    "name" => "Savannah"
                ],
                [
                    "id" => 4963,
                    "country_id" => 83,
                    "name" => "Western North"
                ],
                [
                    "id" => 4964,
                    "country_id" => 159,
                    "name" => "Nueva Segovia"
                ],
                [
                    "id" => 4965,
                    "country_id" => 216,
                    "name" => "Keelung"
                ],
                [
                    "id" => 4966,
                    "country_id" => 216,
                    "name" => "New Taipei"
                ],
                [
                    "id" => 4967,
                    "country_id" => 75,
                    "name" => "Ain"
                ],
                [
                    "id" => 4968,
                    "country_id" => 75,
                    "name" => "Aisne"
                ],
                [
                    "id" => 4969,
                    "country_id" => 75,
                    "name" => "Allier"
                ],
                [
                    "id" => 4970,
                    "country_id" => 75,
                    "name" => "Alpes-de-Haute-Provence"
                ],
                [
                    "id" => 4971,
                    "country_id" => 75,
                    "name" => "Hautes-Alpes"
                ],
                [
                    "id" => 4972,
                    "country_id" => 75,
                    "name" => "Alpes-Maritimes"
                ],
                [
                    "id" => 4973,
                    "country_id" => 75,
                    "name" => "Ardèche"
                ],
                [
                    "id" => 4974,
                    "country_id" => 75,
                    "name" => "Ardennes"
                ],
                [
                    "id" => 4975,
                    "country_id" => 75,
                    "name" => "Ariège"
                ],
                [
                    "id" => 4976,
                    "country_id" => 75,
                    "name" => "Aube"
                ],
                [
                    "id" => 4977,
                    "country_id" => 75,
                    "name" => "Aude"
                ],
                [
                    "id" => 4978,
                    "country_id" => 75,
                    "name" => "Aveyron"
                ],
                [
                    "id" => 4979,
                    "country_id" => 75,
                    "name" => "Bouches-du-Rhône"
                ],
                [
                    "id" => 4981,
                    "country_id" => 75,
                    "name" => "Calvados"
                ],
                [
                    "id" => 4982,
                    "country_id" => 75,
                    "name" => "Cantal"
                ],
                [
                    "id" => 4983,
                    "country_id" => 75,
                    "name" => "Charente"
                ],
                [
                    "id" => 4984,
                    "country_id" => 75,
                    "name" => "Charente-Maritime"
                ],
                [
                    "id" => 4985,
                    "country_id" => 75,
                    "name" => "Cher"
                ],
                [
                    "id" => 4986,
                    "country_id" => 75,
                    "name" => "Corrèze"
                ],
                [
                    "id" => 4987,
                    "country_id" => 75,
                    "name" => "Côte-d'Or"
                ],
                [
                    "id" => 4988,
                    "country_id" => 75,
                    "name" => "Côtes-d'Armor"
                ],
                [
                    "id" => 4989,
                    "country_id" => 75,
                    "name" => "Creuse"
                ],
                [
                    "id" => 4990,
                    "country_id" => 75,
                    "name" => "Dordogne"
                ],
                [
                    "id" => 4991,
                    "country_id" => 75,
                    "name" => "Doubs"
                ],
                [
                    "id" => 4992,
                    "country_id" => 75,
                    "name" => "Drôme"
                ],
                [
                    "id" => 4993,
                    "country_id" => 75,
                    "name" => "Eure"
                ],
                [
                    "id" => 4994,
                    "country_id" => 75,
                    "name" => "Eure-et-Loir"
                ],
                [
                    "id" => 4995,
                    "country_id" => 75,
                    "name" => "Finistère"
                ],
                [
                    "id" => 4996,
                    "country_id" => 75,
                    "name" => "Corse-du-Sud"
                ],
                [
                    "id" => 4997,
                    "country_id" => 75,
                    "name" => "Haute-Corse"
                ],
                [
                    "id" => 4998,
                    "country_id" => 75,
                    "name" => "Gard"
                ],
                [
                    "id" => 4999,
                    "country_id" => 75,
                    "name" => "Haute-Garonne"
                ],
                [
                    "id" => 5000,
                    "country_id" => 75,
                    "name" => "Gers"
                ],
                [
                    "id" => 5001,
                    "country_id" => 75,
                    "name" => "Gironde"
                ],
                [
                    "id" => 5002,
                    "country_id" => 75,
                    "name" => "Hérault"
                ],
                [
                    "id" => 5003,
                    "country_id" => 75,
                    "name" => "Ille-et-Vilaine"
                ],
                [
                    "id" => 5004,
                    "country_id" => 75,
                    "name" => "Indre"
                ],
                [
                    "id" => 5005,
                    "country_id" => 75,
                    "name" => "Indre-et-Loire"
                ],
                [
                    "id" => 5006,
                    "country_id" => 75,
                    "name" => "Isère"
                ],
                [
                    "id" => 5007,
                    "country_id" => 75,
                    "name" => "Jura"
                ],
                [
                    "id" => 5008,
                    "country_id" => 75,
                    "name" => "Landes"
                ],
                [
                    "id" => 5009,
                    "country_id" => 75,
                    "name" => "Loir-et-Cher"
                ],
                [
                    "id" => 5010,
                    "country_id" => 75,
                    "name" => "Loire"
                ],
                [
                    "id" => 5011,
                    "country_id" => 75,
                    "name" => "Haute-Loire"
                ],
                [
                    "id" => 5012,
                    "country_id" => 75,
                    "name" => "Loire-Atlantique"
                ],
                [
                    "id" => 5013,
                    "country_id" => 75,
                    "name" => "Loiret"
                ],
                [
                    "id" => 5014,
                    "country_id" => 75,
                    "name" => "Lot"
                ],
                [
                    "id" => 5015,
                    "country_id" => 75,
                    "name" => "Lot-et-Garonne"
                ],
                [
                    "id" => 5016,
                    "country_id" => 75,
                    "name" => "Lozère"
                ],
                [
                    "id" => 5017,
                    "country_id" => 75,
                    "name" => "Maine-et-Loire"
                ],
                [
                    "id" => 5018,
                    "country_id" => 75,
                    "name" => "Manche"
                ],
                [
                    "id" => 5019,
                    "country_id" => 75,
                    "name" => "Marne"
                ],
                [
                    "id" => 5020,
                    "country_id" => 75,
                    "name" => "Haute-Marne"
                ],
                [
                    "id" => 5021,
                    "country_id" => 75,
                    "name" => "Mayenne"
                ],
                [
                    "id" => 5022,
                    "country_id" => 75,
                    "name" => "Meurthe-et-Moselle"
                ],
                [
                    "id" => 5023,
                    "country_id" => 75,
                    "name" => "Meuse"
                ],
                [
                    "id" => 5024,
                    "country_id" => 75,
                    "name" => "Morbihan"
                ],
                [
                    "id" => 5025,
                    "country_id" => 75,
                    "name" => "Moselle"
                ],
                [
                    "id" => 5026,
                    "country_id" => 75,
                    "name" => "Nièvre"
                ],
                [
                    "id" => 5027,
                    "country_id" => 75,
                    "name" => "Nord"
                ],
                [
                    "id" => 5028,
                    "country_id" => 75,
                    "name" => "Oise"
                ],
                [
                    "id" => 5029,
                    "country_id" => 75,
                    "name" => "Orne"
                ],
                [
                    "id" => 5030,
                    "country_id" => 75,
                    "name" => "Pas-de-Calais"
                ],
                [
                    "id" => 5031,
                    "country_id" => 75,
                    "name" => "Puy-de-Dôme"
                ],
                [
                    "id" => 5032,
                    "country_id" => 75,
                    "name" => "Pyrénées-Atlantiques"
                ],
                [
                    "id" => 5033,
                    "country_id" => 75,
                    "name" => "Hautes-Pyrénées"
                ],
                [
                    "id" => 5034,
                    "country_id" => 75,
                    "name" => "Pyrénées-Orientales"
                ],
                [
                    "id" => 5035,
                    "country_id" => 75,
                    "name" => "Bas-Rhin"
                ],
                [
                    "id" => 5036,
                    "country_id" => 75,
                    "name" => "Haut-Rhin"
                ],
                [
                    "id" => 5037,
                    "country_id" => 75,
                    "name" => "Rhône"
                ],
                [
                    "id" => 5038,
                    "country_id" => 75,
                    "name" => "Métropole de Lyon"
                ],
                [
                    "id" => 5039,
                    "country_id" => 75,
                    "name" => "Haute-Saône"
                ],
                [
                    "id" => 5040,
                    "country_id" => 75,
                    "name" => "Saône-et-Loire"
                ],
                [
                    "id" => 5041,
                    "country_id" => 75,
                    "name" => "Sarthe"
                ],
                [
                    "id" => 5042,
                    "country_id" => 75,
                    "name" => "Savoie"
                ],
                [
                    "id" => 5043,
                    "country_id" => 75,
                    "name" => "Haute-Savoie"
                ],
                [
                    "id" => 5044,
                    "country_id" => 75,
                    "name" => "Seine-Maritime"
                ],
                [
                    "id" => 5045,
                    "country_id" => 75,
                    "name" => "Seine-et-Marne"
                ],
                [
                    "id" => 5046,
                    "country_id" => 75,
                    "name" => "Yvelines"
                ],
                [
                    "id" => 5047,
                    "country_id" => 75,
                    "name" => "Deux-Sèvres"
                ],
                [
                    "id" => 5048,
                    "country_id" => 75,
                    "name" => "Somme"
                ],
                [
                    "id" => 5049,
                    "country_id" => 75,
                    "name" => "Tarn"
                ],
                [
                    "id" => 5050,
                    "country_id" => 75,
                    "name" => "Tarn-et-Garonne"
                ],
                [
                    "id" => 5051,
                    "country_id" => 75,
                    "name" => "Var"
                ],
                [
                    "id" => 5052,
                    "country_id" => 75,
                    "name" => "Vaucluse"
                ],
                [
                    "id" => 5053,
                    "country_id" => 75,
                    "name" => "Vendée"
                ],
                [
                    "id" => 5054,
                    "country_id" => 75,
                    "name" => "Vienne"
                ],
                [
                    "id" => 5055,
                    "country_id" => 75,
                    "name" => "Haute-Vienne"
                ],
                [
                    "id" => 5056,
                    "country_id" => 75,
                    "name" => "Vosges"
                ],
                [
                    "id" => 5057,
                    "country_id" => 75,
                    "name" => "Yonne"
                ],
                [
                    "id" => 5058,
                    "country_id" => 75,
                    "name" => "Territoire de Belfort"
                ],
                [
                    "id" => 5059,
                    "country_id" => 75,
                    "name" => "Essonne"
                ],
                [
                    "id" => 5060,
                    "country_id" => 75,
                    "name" => "Hauts-de-Seine"
                ],
                [
                    "id" => 5061,
                    "country_id" => 75,
                    "name" => "Seine-Saint-Denis"
                ],
                [
                    "id" => 5062,
                    "country_id" => 75,
                    "name" => "Val-de-Marne"
                ],
                [
                    "id" => 5063,
                    "country_id" => 75,
                    "name" => "Val-d'Oise"
                ],
                [
                    "id" => 5064,
                    "country_id" => 75,
                    "name" => "Clipperton"
                ],
                [
                    "id" => 5065,
                    "country_id" => 75,
                    "name" => "French Southern and Antarctic Lands"
                ],
                [
                    "id" => 5067,
                    "country_id" => 65,
                    "name" => "Sharqia"
                ],
                [
                    "id" => 5068,
                    "country_id" => 64,
                    "name" => "Loja"
                ],
                [
                    "id" => 5069,
                    "country_id" => 55,
                    "name" => "Karlovac"
                ],
                [
                    "id" => 5070,
                    "country_id" => 37,
                    "name" => "Kampong Thom"
                ],
                [
                    "id" => 5071,
                    "country_id" => 230,
                    "name" => "Poltavska oblast"
                ],
                [
                    "id" => 5072,
                    "country_id" => 242,
                    "name" => "Saint Thomas"
                ],
                [
                    "id" => 5073,
                    "country_id" => 242,
                    "name" => "Saint John"
                ],
                [
                    "id" => 5074,
                    "country_id" => 242,
                    "name" => "Saint Croix"
                ],
                [
                    "id" => 5075,
                    "country_id" => 178,
                    "name" => "San Juan"
                ],
                [
                    "id" => 5076,
                    "country_id" => 178,
                    "name" => "Bayamon"
                ],
                [
                    "id" => 5077,
                    "country_id" => 178,
                    "name" => "Carolina"
                ],
                [
                    "id" => 5078,
                    "country_id" => 178,
                    "name" => "Ponce"
                ],
                [
                    "id" => 5079,
                    "country_id" => 178,
                    "name" => "Caguas"
                ],
                [
                    "id" => 5080,
                    "country_id" => 178,
                    "name" => "Guaynabo"
                ],
                [
                    "id" => 5081,
                    "country_id" => 178,
                    "name" => "Arecibo"
                ],
                [
                    "id" => 5082,
                    "country_id" => 178,
                    "name" => "Toa Baja"
                ],
                [
                    "id" => 5083,
                    "country_id" => 178,
                    "name" => "Mayagüez"
                ],
                [
                    "id" => 5084,
                    "country_id" => 178,
                    "name" => "Trujillo Alto"
                ],
                [
                    "id" => 5085,
                    "country_id" => 99,
                    "name" => "Komárom-Esztergom"
                ],
                [
                    "id" => 5086,
                    "country_id" => 155,
                    "name" => "Bonaire"
                ],
                [
                    "id" => 5087,
                    "country_id" => 155,
                    "name" => "Saba"
                ],
                [
                    "id" => 5088,
                    "country_id" => 155,
                    "name" => "Sint Eustatius"
                ],
                [
                    "id" => 5089,
                    "country_id" => 207,
                    "name" => "A Coruña"
                ],
                [
                    "id" => 5090,
                    "country_id" => 207,
                    "name" => "Lugo"
                ],
                [
                    "id" => 5091,
                    "country_id" => 207,
                    "name" => "Ourense"
                ],
                [
                    "id" => 5092,
                    "country_id" => 207,
                    "name" => "Badajoz"
                ],
                [
                    "id" => 5093,
                    "country_id" => 207,
                    "name" => "Araba"
                ],
                [
                    "id" => 5094,
                    "country_id" => 207,
                    "name" => "Bizkaia"
                ],
                [
                    "id" => 5095,
                    "country_id" => 207,
                    "name" => "Almeria"
                ],
                [
                    "id" => 5096,
                    "country_id" => 207,
                    "name" => "Cádiz"
                ],
                [
                    "id" => 5097,
                    "country_id" => 207,
                    "name" => "Córdoba"
                ],
                [
                    "id" => 5098,
                    "country_id" => 207,
                    "name" => "Granada"
                ],
                [
                    "id" => 5099,
                    "country_id" => 207,
                    "name" => "Huelva"
                ],
                [
                    "id" => 5100,
                    "country_id" => 207,
                    "name" => "Jaén"
                ],
                [
                    "id" => 5101,
                    "country_id" => 207,
                    "name" => "Málaga"
                ],
                [
                    "id" => 5102,
                    "country_id" => 207,
                    "name" => "Barcelona"
                ],
                [
                    "id" => 5103,
                    "country_id" => 207,
                    "name" => "Girona"
                ],
                [
                    "id" => 5104,
                    "country_id" => 207,
                    "name" => "Lleida"
                ],
                [
                    "id" => 5105,
                    "country_id" => 207,
                    "name" => "Ciudad Real"
                ],
                [
                    "id" => 5106,
                    "country_id" => 207,
                    "name" => "Cuenca"
                ],
                [
                    "id" => 5107,
                    "country_id" => 207,
                    "name" => "Guadalajara"
                ],
                [
                    "id" => 5108,
                    "country_id" => 207,
                    "name" => "Alicante"
                ],
                [
                    "id" => 5109,
                    "country_id" => 207,
                    "name" => "Albacete"
                ],
                [
                    "id" => 5110,
                    "country_id" => 207,
                    "name" => "Castellón"
                ],
                [
                    "id" => 5111,
                    "country_id" => 207,
                    "name" => "Teruel"
                ],
                [
                    "id" => 5112,
                    "country_id" => 207,
                    "name" => "Santa Cruz de Tenerife"
                ],
                [
                    "id" => 5113,
                    "country_id" => 207,
                    "name" => "Zaragoza"
                ],
                [
                    "id" => 5114,
                    "country_id" => 43,
                    "name" => "Chari-Baguirmi"
                ],
                [
                    "id" => 5115,
                    "country_id" => 174,
                    "name" => "Western Samar"
                ],
                [
                    "id" => 5116,
                    "country_id" => 224,
                    "name" => "Nabeul"
                ],
                [
                    "id" => 5117,
                    "country_id" => 213,
                    "name" => "Jämtland County"
                ],
                [
                    "id" => 5118,
                    "country_id" => 169,
                    "name" => "Bethlehem"
                ],
                [
                    "id" => 5119,
                    "country_id" => 169,
                    "name" => "Deir El Balah"
                ],
                [
                    "id" => 5120,
                    "country_id" => 169,
                    "name" => "Gaza"
                ],
                [
                    "id" => 5121,
                    "country_id" => 169,
                    "name" => "Hebron"
                ],
                [
                    "id" => 5122,
                    "country_id" => 169,
                    "name" => "Jenin"
                ],
                [
                    "id" => 5123,
                    "country_id" => 169,
                    "name" => "Jericho and Al Aghwar"
                ],
                [
                    "id" => 5124,
                    "country_id" => 169,
                    "name" => "Jerusalem"
                ],
                [
                    "id" => 5125,
                    "country_id" => 169,
                    "name" => "Khan Yunis"
                ],
                [
                    "id" => 5126,
                    "country_id" => 169,
                    "name" => "Nablus"
                ],
                [
                    "id" => 5127,
                    "country_id" => 169,
                    "name" => "North Gaza"
                ],
                [
                    "id" => 5128,
                    "country_id" => 169,
                    "name" => "Qalqilya"
                ],
                [
                    "id" => 5129,
                    "country_id" => 169,
                    "name" => "Rafah"
                ],
                [
                    "id" => 5130,
                    "country_id" => 169,
                    "name" => "Ramallah"
                ],
                [
                    "id" => 5131,
                    "country_id" => 169,
                    "name" => "Salfit"
                ],
                [
                    "id" => 5132,
                    "country_id" => 169,
                    "name" => "Tubas"
                ],
                [
                    "id" => 5133,
                    "country_id" => 169,
                    "name" => "Tulkarm"
                ],
                [
                    "id" => 5134,
                    "country_id" => 178,
                    "name" => "Adjuntas"
                ],
                [
                    "id" => 5135,
                    "country_id" => 178,
                    "name" => "Aguada"
                ],
                [
                    "id" => 5136,
                    "country_id" => 178,
                    "name" => "Aguadilla"
                ],
                [
                    "id" => 5137,
                    "country_id" => 178,
                    "name" => "Aguas Buenas"
                ],
                [
                    "id" => 5138,
                    "country_id" => 178,
                    "name" => "Aibonito"
                ],
                [
                    "id" => 5139,
                    "country_id" => 178,
                    "name" => "Añasco"
                ],
                [
                    "id" => 5140,
                    "country_id" => 178,
                    "name" => "Arecibo"
                ],
                [
                    "id" => 5141,
                    "country_id" => 178,
                    "name" => "Arroyo"
                ],
                [
                    "id" => 5142,
                    "country_id" => 178,
                    "name" => "Barceloneta"
                ],
                [
                    "id" => 5143,
                    "country_id" => 178,
                    "name" => "Barranquitas"
                ],
                [
                    "id" => 5144,
                    "country_id" => 178,
                    "name" => "Bayamón"
                ],
                [
                    "id" => 5145,
                    "country_id" => 178,
                    "name" => "Cabo Rojo"
                ],
                [
                    "id" => 5146,
                    "country_id" => 178,
                    "name" => "Caguas"
                ],
                [
                    "id" => 5147,
                    "country_id" => 178,
                    "name" => "Camuy"
                ],
                [
                    "id" => 5148,
                    "country_id" => 178,
                    "name" => "Canóvanas"
                ],
                [
                    "id" => 5149,
                    "country_id" => 178,
                    "name" => "Carolina"
                ],
                [
                    "id" => 5150,
                    "country_id" => 178,
                    "name" => "Cataño"
                ],
                [
                    "id" => 5151,
                    "country_id" => 178,
                    "name" => "Cayey"
                ],
                [
                    "id" => 5152,
                    "country_id" => 178,
                    "name" => "Ceiba"
                ],
                [
                    "id" => 5153,
                    "country_id" => 178,
                    "name" => "Ciales"
                ],
                [
                    "id" => 5154,
                    "country_id" => 178,
                    "name" => "Cidra"
                ],
                [
                    "id" => 5155,
                    "country_id" => 178,
                    "name" => "Coamo"
                ],
                [
                    "id" => 5156,
                    "country_id" => 178,
                    "name" => "Comerío"
                ],
                [
                    "id" => 5157,
                    "country_id" => 178,
                    "name" => "Corozal"
                ],
                [
                    "id" => 5158,
                    "country_id" => 178,
                    "name" => "Culebra"
                ],
                [
                    "id" => 5159,
                    "country_id" => 178,
                    "name" => "Dorado"
                ],
                [
                    "id" => 5160,
                    "country_id" => 178,
                    "name" => "Fajardo"
                ],
                [
                    "id" => 5161,
                    "country_id" => 178,
                    "name" => "Florida"
                ],
                [
                    "id" => 5162,
                    "country_id" => 178,
                    "name" => "Guánica"
                ],
                [
                    "id" => 5163,
                    "country_id" => 178,
                    "name" => "Guayama"
                ],
                [
                    "id" => 5164,
                    "country_id" => 178,
                    "name" => "Guayanilla"
                ],
                [
                    "id" => 5165,
                    "country_id" => 178,
                    "name" => "Guaynabo"
                ],
                [
                    "id" => 5166,
                    "country_id" => 178,
                    "name" => "Gurabo"
                ],
                [
                    "id" => 5167,
                    "country_id" => 178,
                    "name" => "Hatillo"
                ],
                [
                    "id" => 5168,
                    "country_id" => 178,
                    "name" => "Hormigueros"
                ],
                [
                    "id" => 5169,
                    "country_id" => 178,
                    "name" => "Humacao"
                ],
                [
                    "id" => 5170,
                    "country_id" => 178,
                    "name" => "Isabela"
                ],
                [
                    "id" => 5171,
                    "country_id" => 178,
                    "name" => "Jayuya"
                ],
                [
                    "id" => 5172,
                    "country_id" => 178,
                    "name" => "Juana Díaz"
                ],
                [
                    "id" => 5173,
                    "country_id" => 178,
                    "name" => "Juncos"
                ],
                [
                    "id" => 5174,
                    "country_id" => 178,
                    "name" => "Lajas"
                ],
                [
                    "id" => 5175,
                    "country_id" => 178,
                    "name" => "Lares"
                ],
                [
                    "id" => 5176,
                    "country_id" => 178,
                    "name" => "Las Marías"
                ],
                [
                    "id" => 5177,
                    "country_id" => 178,
                    "name" => "Las Piedras"
                ],
                [
                    "id" => 5178,
                    "country_id" => 178,
                    "name" => "Loíza"
                ],
                [
                    "id" => 5179,
                    "country_id" => 178,
                    "name" => "Luquillo"
                ],
                [
                    "id" => 5180,
                    "country_id" => 178,
                    "name" => "Manatí"
                ],
                [
                    "id" => 5181,
                    "country_id" => 178,
                    "name" => "Maricao"
                ],
                [
                    "id" => 5182,
                    "country_id" => 178,
                    "name" => "Maunabo"
                ],
                [
                    "id" => 5183,
                    "country_id" => 178,
                    "name" => "Mayagüez"
                ],
                [
                    "id" => 5184,
                    "country_id" => 178,
                    "name" => "Moca"
                ],
                [
                    "id" => 5185,
                    "country_id" => 178,
                    "name" => "Morovis"
                ],
                [
                    "id" => 5186,
                    "country_id" => 178,
                    "name" => "Naguabo"
                ],
                [
                    "id" => 5187,
                    "country_id" => 178,
                    "name" => "Naranjito"
                ],
                [
                    "id" => 5188,
                    "country_id" => 178,
                    "name" => "Orocovis"
                ],
                [
                    "id" => 5189,
                    "country_id" => 178,
                    "name" => "Patillas"
                ],
                [
                    "id" => 5190,
                    "country_id" => 178,
                    "name" => "Peñuelas"
                ],
                [
                    "id" => 5191,
                    "country_id" => 178,
                    "name" => "Ponce"
                ],
                [
                    "id" => 5192,
                    "country_id" => 178,
                    "name" => "Quebradillas"
                ],
                [
                    "id" => 5193,
                    "country_id" => 178,
                    "name" => "Rincón"
                ],
                [
                    "id" => 5194,
                    "country_id" => 178,
                    "name" => "Río Grande"
                ],
                [
                    "id" => 5195,
                    "country_id" => 178,
                    "name" => "Sabana Grande"
                ],
                [
                    "id" => 5196,
                    "country_id" => 178,
                    "name" => "Salinas"
                ],
                [
                    "id" => 5197,
                    "country_id" => 178,
                    "name" => "San Germán"
                ],
                [
                    "id" => 5198,
                    "country_id" => 178,
                    "name" => "San Juan"
                ],
                [
                    "id" => 5199,
                    "country_id" => 178,
                    "name" => "San Lorenzo"
                ],
                [
                    "id" => 5200,
                    "country_id" => 178,
                    "name" => "San Sebastián"
                ],
                [
                    "id" => 5201,
                    "country_id" => 178,
                    "name" => "Santa Isabel"
                ],
                [
                    "id" => 5202,
                    "country_id" => 178,
                    "name" => "Toa Alta"
                ],
                [
                    "id" => 5203,
                    "country_id" => 178,
                    "name" => "Toa Baja"
                ],
                [
                    "id" => 5204,
                    "country_id" => 178,
                    "name" => "Trujillo Alto"
                ],
                [
                    "id" => 5205,
                    "country_id" => 178,
                    "name" => "Utuado"
                ],
                [
                    "id" => 5206,
                    "country_id" => 178,
                    "name" => "Vega Alta"
                ],
                [
                    "id" => 5207,
                    "country_id" => 178,
                    "name" => "Vega Baja"
                ],
                [
                    "id" => 5208,
                    "country_id" => 178,
                    "name" => "Vieques"
                ],
                [
                    "id" => 5209,
                    "country_id" => 178,
                    "name" => "Villalba"
                ],
                [
                    "id" => 5210,
                    "country_id" => 178,
                    "name" => "Yabucoa"
                ],
                [
                    "id" => 5211,
                    "country_id" => 178,
                    "name" => "Yauco"
                ],
                [
                    "id" => 5212,
                    "country_id" => 234,
                    "name" => "Baker Island"
                ],
                [
                    "id" => 5213,
                    "country_id" => 234,
                    "name" => "Howland Island"
                ],
                [
                    "id" => 5214,
                    "country_id" => 234,
                    "name" => "Jarvis Island"
                ],
                [
                    "id" => 5215,
                    "country_id" => 234,
                    "name" => "Johnston Atoll"
                ],
                [
                    "id" => 5216,
                    "country_id" => 234,
                    "name" => "Kingman Reef"
                ],
                [
                    "id" => 5217,
                    "country_id" => 234,
                    "name" => "Midway Islands"
                ],
                [
                    "id" => 5218,
                    "country_id" => 234,
                    "name" => "Navassa Island"
                ],
                [
                    "id" => 5219,
                    "country_id" => 234,
                    "name" => "Palmyra Atoll"
                ],
                [
                    "id" => 5220,
                    "country_id" => 234,
                    "name" => "Wake Island"
                ]

        ];

        foreach (array_chunk($states, 1000) as $chunk) {
            DB::table('states')->insert($chunk);
        }

    }
}
