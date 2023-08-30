<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Interface;

interface Geraetemerkmal
{
    public const EINTARIF = 'EINTARIF';
    public const ZWEITARIF = 'ZWEITARIF';
    public const MEHRTARIF = 'MEHRTARIF';
    public const GAS_G2P5 = 'GAS_G2P5';
    public const GAS_G4 = 'GAS_G4';
    public const GAS_G6 = 'GAS_G6';
    public const GAS_G10 = 'GAS_G10';
    public const GAS_G16 = 'GAS_G16';
    public const GAS_G25 = 'GAS_G25';
    public const GAS_G40 = 'GAS_G40';
    public const GAS_G65 = 'GAS_G65';
    public const GAS_G100 = 'GAS_G100';
    public const GAS_G160 = 'GAS_G160';
    public const GAS_G250 = 'GAS_G250';
    public const GAS_G350 = 'GAS_G350';
    public const GAS_G400 = 'GAS_G400';
    public const GAS_G4000 = 'GAS_G4000';
    public const GAS_G650 = 'GAS_G650';
    public const GAS_G6500 = 'GAS_G6500';
    public const GAS_G1000 = 'GAS_G1000';
    public const GAS_G10000 = 'GAS_G10000';
    public const GAS_G12500 = 'GAS_G12500';
    public const GAS_G1600 = 'GAS_G1600';
    public const GAS_G16000 = 'GAS_G16000';
    public const GAS_G2500 = 'GAS_G2500';
    public const IMPULSGEBER_G4_G100 = 'IMPULSGEBER_G4_G100';
    public const IMPULSGEBER_G100 = 'IMPULSGEBER_G100';
    public const MODEM_GSM = 'MODEM_GSM';
    public const MODEM_GPRS = 'MODEM_GPRS';
    public const MODEM_FUNK = 'MODEM_FUNK';
    public const MODEM_GSM_O_LG = 'MODEM_GSM_O_LG';
    public const MODEM_GSM_M_LG = 'MODEM_GSM_M_LG';
    public const MODEM_FESTNETZ = 'MODEM_FESTNETZ';
    public const MODEM_GPRS_M_LG = 'MODEM_GPRS_M_LG';
    public const PLC_COM = 'PLC_COM';
    public const ETHERNET_KOM = 'ETHERNET_KOM';
    public const DSL_KOM = 'DSL_KOM';
    public const LTE_KOM = 'LTE_KOM';
    public const RUNDSTEUEREMPFAENGER = 'RUNDSTEUEREMPFAENGER';
    public const TARIFSCHALTGERAET = 'TARIFSCHALTGERAET';
    public const ZUSTANDS_MU = 'ZUSTANDS_MU';
    public const TEMPERATUR_MU = 'TEMPERATUR_MU';
    public const KOMPAKT_MU = 'KOMPAKT_MU';
    public const SYSTEM_MU = 'SYSTEM_MU';
    public const UNBESTIMMT = 'UNBESTIMMT';
    public const WASSER_MWZW = 'WASSER_MWZW';
    public const WASSER_WZWW = 'WASSER_WZWW';
    public const WASSER_WZ01 = 'WASSER_WZ01';
    public const WASSER_WZ02 = 'WASSER_WZ02';
    public const WASSER_WZ03 = 'WASSER_WZ03';
    public const WASSER_WZ04 = 'WASSER_WZ04';
    public const WASSER_WZ05 = 'WASSER_WZ05';
    public const WASSER_WZ06 = 'WASSER_WZ06';
    public const WASSER_WZ07 = 'WASSER_WZ07';
    public const WASSER_WZ08 = 'WASSER_WZ08';
    public const WASSER_WZ09 = 'WASSER_WZ09';
    public const WASSER_WZ10 = 'WASSER_WZ10';
    public const WASSER_VWZ04 = 'WASSER_VWZ04';
    public const WASSER_VWZ05 = 'WASSER_VWZ05';
    public const WASSER_VWZ06 = 'WASSER_VWZ06';
    public const WASSER_VWZ07 = 'WASSER_VWZ07';
    public const WASSER_VWZ10 = 'WASSER_VWZ10';
    public const DICHTEMENGENUMWERTER = 'DICHTEMENGENUMWERTER';
    public const TEMPERATURMENGENUMWERTER = 'TEMPERATURMENGENUMWERTER';
    public const ZUSTANDSMENGENUMWERTER = 'ZUSTANDSMENGENUMWERTER';
    public const BLOCKSTROMWANDLER = 'BLOCKSTROMWANDLER';
    public const MESSWANDLERSATZ_IMS_MME = 'MESSWANDLERSATZ_IMS_MME';
    public const KOMBIMESSWANDLER = 'KOMBIMESSWANDLER';
    public const SPANNUNGSWANDLER = 'SPANNUNGSWANDLER';
}
