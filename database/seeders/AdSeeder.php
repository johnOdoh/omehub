<?php

namespace Database\Seeders;

use App\Models\Ad;
use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    public function run(): void
    {
        $ads = [
            [
                'title'    => 'Atlantic Express Line - Shanghai to Lagos Direct Slots',
                'category' => 'Ocean Freight',
                'body'     => 'Weekly direct express vessel departures from Shanghai to Lagos Apapa with zero rollover guarantee. Integrated pre-arrival customs sync. Free 14 days demurrage time included.',
                'file'     => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=800&q=80',
                'cta'      => 'Book Slot',
                'url'      => '/public/quotes?promo=ATLANTIC26',
                'status'   => 'approved',
            ],
            [
                'title'    => 'EuroCold Terminals - Pharma & Reefer Cold Storage Rotterdam',
                'category' => 'Warehousing',
                'body'     => '15,000 m2 temperature-controlled storage at Maasvlakte II. Rapid cross-docking and EU veterinary inspection. 10% off first 90-day booking.',
                'file'     => 'https://images.unsplash.com/photo-1587293852726-70cdb56c2866?auto=format&fit=crop&w=800&q=80',
                'cta'      => 'Inquire Rates',
                'url'      => '/public/contact?inquiry=EuroCold-Ad',
                'status'   => 'approved',
            ],
            [
                'title'    => 'Nautical Shield Underwriters - Instant All-Risk Cargo Cover',
                'category' => 'Insurance',
                'body'     => 'Full ICC A All-Risk marine cargo insurance through a Lloyds Syndicate. Automated paperless claims within 48 hours. Rates from 0.18% of cargo value.',
                'file'     => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
                'cta'      => 'Get Policy',
                'url'      => '/public/quotes?inquiry=MarineInsurance',
                'status'   => 'approved',
            ],
            [
                'title'    => 'Apex Air Charter - Dubai & Europe to West Africa Cargo Flights',
                'category' => 'Air Freight',
                'body'     => 'Guaranteed 72-hour delivery on daily scheduled cargo flights from DXB and European hubs to Lagos, Accra and Abidjan. Hazmat certified. From USD 4.85/kg.',
                'file'     => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=800&q=80',
                'cta'      => 'Book Air Freight',
                'url'      => '/public/quotes?mode=air',
                'status'   => 'approved',
            ],
            [
                'title'    => 'SilkRoute Rail Logistics - China to Europe Multimodal Rail',
                'category' => 'Rail Freight',
                'body'     => 'Competitive transit of 18-22 days from Chinese hubs to Europe. DDP & DAP available. 30% cheaper than air freight with half the sea freight transit time.',
                'file'     => 'https://images.unsplash.com/photo-1474487548417-781cb71495f3?auto=format&fit=crop&w=800&q=80',
                'cta'      => 'Request Rail Quote',
                'url'      => '/public/quotes?mode=rail',
                'status'   => 'approved',
            ],
            [
                'title'    => 'PortMaster Customs Brokerage - Seamless Nigeria Import Clearance',
                'category' => 'Customs Brokerage',
                'body'     => 'NCS licensed brokerage offering SON/NAFDAC inspection coordination, Form M processing, and duty-free documentation. Real-time demurrage alerts at Apapa, Tin Can and Onne Port.',
                'file'     => 'https://images.unsplash.com/photo-1611532736597-de2d4265fba3?auto=format&fit=crop&w=800&q=80',
                'cta'      => 'Clear My Cargo',
                'url'      => '/public/contact?inquiry=Customs',
                'status'   => 'approved',
            ],
            [
                'title'    => 'BlueStar Shipping Agency - Full Container Load FCL Services',
                'category' => 'Ocean Freight',
                'body'     => 'Competitive FCL rates on Asia-West Africa, Europe-West Africa, and intra-Africa trade lanes. Weekly sailings with free container pre-inspection and port arrival notification.',
                'file'     => 'https://images.unsplash.com/photo-1557245978-9b4b2527bf70?auto=format&fit=crop&w=800&q=80',
                'cta'      => 'Get FCL Quote',
                'url'      => '/public/quotes?type=fcl',
                'status'   => 'approved',
            ],
            [
                'title'    => 'GreenMile Road Transport - Cross-Border West Africa Haulage',
                'category' => 'Road Freight',
                'body'     => 'Reliable door-to-door road freight across Nigeria, Ghana, Benin, Togo and Senegal. GPS-tracked trucks and refrigerated vehicles. Escort services for high-value cargo.',
                'file'     => 'https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?auto=format&fit=crop&w=800&q=80',
                'cta'      => 'Book Truck Now',
                'url'      => '/public/contact?inquiry=RoadFreight',
                'status'   => 'approved',
            ],
            [
                'title'    => 'OceanTech Freight - LCL Consolidation Services Worldwide',
                'category' => 'Ocean Freight',
                'body'     => 'LCL consolidation services from over 40 origins worldwide. Weekly departures from Singapore, Guangzhou, Antwerp and Houston. Groupage, fumigation and packing list included.',
                'file'     => 'https://images.unsplash.com/photo-1504309092620-4d0ec726efa4?auto=format&fit=crop&w=800&q=80',
                'cta'      => 'Consolidate Cargo',
                'url'      => '/public/quotes?type=lcl',
                'status'   => 'approved',
            ],
            [
                'title'    => 'TradeFinance Hub - Cargo Financing & Letter of Credit Solutions',
                'category' => 'Trade Finance',
                'body'     => 'Structured trade finance including Letters of Credit and pre-shipment financing. Up to USD 5M facility per transaction. Onboarding in 48 hours with 12 global correspondent banks.',
                'file'     => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=800&q=80',
                'cta'      => 'Apply for Financing',
                'url'      => '/public/contact?inquiry=TradeFinance',
                'status'   => 'approved',
            ],
        ];

        foreach ($ads as $ad) {
            Ad::create($ad);
        }
    }
}
