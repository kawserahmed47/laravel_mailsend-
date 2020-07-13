<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class QuestionStageTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('questions')->insert([
            'question' => 'Quality Manual defines scope of QMS, procedures (or reference to) within QMS, and description of the interaction of processes within QMS? (ISO 13485:2016: 4.1, 4.2.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Criteria and methods are in place to monitor and control processes for effectiveness? (ISO 13485:2016: 4.1.3(a), 4.2.1(d), 8.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm has established and conducts Management Reviews, at least annually? (ISO 13485:2016: 5.1(d), 5.6)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Management reviews examine suitability and effectiveness of quality systems, improvements needed because of customer requirements, and resource needs? (ISO 13485:2016: 4.1.3(c), 5.6.1, 5.6.3, 6.1, 8.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Management review addresses audit results, customer feedback, process performance, Corrective and Preventive Actions (CAPAs), previous management reviews, changes to QMS, recommendations for improvement, and new or revised regulatory requirements? (ISO 13485:2016: 5.6.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm has established a Quality Manual and Quality System Procedures and Instructions that are appropriate? (ISO 13485:2016: 4.1.2(a), 4.2.1(b), (c)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm has established Quality Plan? (ISO 13485:2016: 4.2.1(d), 5.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Quality Planning addresses QMS needs and Quality Objectives? (ISO 13485:2016: 5.4.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm has implemented Quality Policy and Quality Objectives? (ISO 13485:2016: 4.2.1(a), 5.1(b), (c), 5.3, 5.4.1)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Quality audits examine compliance and effectiveness? (ISO 13485:2016: 4.1.3(c), 4.2.1(d), 8.2.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Auditors are trained? (ISO 13485:2016: 6.2, 8.2.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Audits are conducted by objective parties? (ISO 13485:2016: 8.2.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Quality audits are linked to CAPA? (ISO 13485:2016: 8.2.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Review organizational structure of firm. Resources are available to support processes? (ISO 13485:2016: 4.1.3(b), 5.1(e), 5.5.1, 5.5.2, 6.1, 6.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm has defined a management representative with executive responsibility for implementing and reporting quality management system? (ISO 13485:2016: 5.1, 5.5.1, 5.5.2, 6.1, 6.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Appropriate responsibilities, authority, and resources are in place for quality system activities? (ISO 13485:2016: 5.1(e), 5.5.1, 5.5.2, 6.1, 6.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm has established procedures for identifying training needs and personnel are trained to perform assigned responsibilities? (ISO 13485:2016: 6.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Executive management ensures adequate and effective quality system is implemented? Ensure management is committed to and communicates importance of meeting customer requirements, regulatory requirements, and QMS. (ISO 13485:2016: 5.1(a), 5.2, 5.5.3)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Products are subject to design controls? (ISO 13485:2016: 7.1, 7.3)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Design control and risk management procedures are established and applied? (ISO 13485:2016: 7.3)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Design and development stages are identified? (ISO 13485:2016: 7.3.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Review, verification, validation, and design transfer activities at each stage are appropriate? (ISO 13485:2016: 7.3.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Responsibilities for design and development are defined? (ISO 13485:2016: 7.3.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Review the project design & development plan, responsibilities, and interfaces. Design & development plan is updated, reviewed, and approved? (ISO 13485:2016: 7.3.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Customer requirements are captured? (ISO 13485:2016: 7.2.1, 7.3.3)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Inputs include functional, performance, safety, and statutory and regulatory requirements? (ISO 13485:2016: 7.2.1, 7.3.3)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Incomplete, ambiguous, and/or conflicting requirements were addressed? (ISO 13485:2016: 7.3.3)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Design & development outputs are established, verifiable, reviewed, and approved? (ISO 13485:2016: 7.3.4(a), (c))',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Design & development outputs are appropriate for purchasing, production, and servicing? (ISO 13485:2016: 7.3.4(b))',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);
        DB::table('questions')->insert([
            'question' => 'Essential design & development outputs are identified? (ISO 13485:2016: 7.3.4(d))',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Acceptance criteria is referenced by design & development outputs and was defined prior to design verification and design validation activities? (ISO 13485:2016: 7.3.4(c), 7.3.6)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Design verification confirmed design outputs met design input requirements? (ISO 13485:2016: 7.3.6)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Design validation results prove device met predetermined user needs and intended uses? (ISO 13485:2016: 7.3.7)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Design validation did not leave unresolved discrepancies? (ISO 13485:2016: 7.3.7)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'If required by national or regional regulations, confirm clinical evaluations and/or evaluation of device performance were performed? (ISO 13485:2016: 7.3.7)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'If device contains software, confirm software was validated? (ISO 13485:2016: 7.3.2, 7.3.7)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Initial production units (or equivalents) were used for design validation? (ISO 13485:2016: 7.3.7)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Risk management activities were performed? (ISO 13485:2016: 7.1)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Design changes were controlled and validated (or where appropriate, verified)? (ISO 13485:2016: 7.3.2, 7.3.6, 7.3.9)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Design changes have been reviewed for effect on components and product previously made? (ISO 13485:2016: 7.3.2, 7.3.6, 7.3.9)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Design reviews were conducted at appropriate stages of design & development? (ISO 13485:2016: 7.2.2, 7.3.2, 7.3.5)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);
        DB::table('questions')->insert([
            'question' => 'Design review attendees were appropriate for stage and included independent reviewer? (ISO 13485:2016: 7.3.2, 7.3.5)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Design was correctly transferred to production? (ISO 13485:2016: 7.3.2, 7.3.8)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'DHF contains design control documentation? (ISO 13485:2016: 7.3.10)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'CAPA procedures comply with regulatory requirements? (ISO 13485:2016: 4.1, 4.2, 8.5)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Non-conforming product and CAPA procedures determine the need for investigation and notification? (ISO 13485:2016: 8.3, 8.5)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Non-conforming product and CAPA procedures define responsibilities for review and disposition? (ISO 13485:2016: 8.3, 8.5)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Procedures for rework, retesting, and re-evaluation of nonconforming product exist and are followed? (ISO 13485:2016: 8.3, 8.5)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Appropriate records of quality problems have been created and used? (ISO 13485:2016: 8.3, 8.5)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Trend analysis data indicates quality problems? Data used for CAPA decisions? 9ISO 13485:2016: 8.1, 8.2.5, 8.4, 8.5)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'CAPA data is complete, accurate, and timely? Compare results across multiple data sources to identify quality problems. (ISO 13485:2016: 8.4, 8.5)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Appropriate statistical techniques are implemented? (ISO 13485:2016: 8.1, 8.2.5, 8.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Device failure investigations determine root cause? (ISO 13485:2016: 8.3,8.5)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Failure investigations are commensurate with risks? (ISO 13485:2016: 8.3, 8.5)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Controls exist to prevent non-conforming product from being released? (ISO 13485:2016: 8.3)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);
        DB::table('questions')->insert([
            'question' => 'Appropriate actions were taken for quality problems? (ISO 13485:2016: 8.2.5, 8.5.2, 8.5.3)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'CAPA actions were effective, verified, validated, documented, and implemented appropriately? (ISO 13485:2016: 8.5)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'CAPAs and nonconformities were disseminated to personnel responsible for ensuring quality and prevention of problems? (ISO 13485:2016: 8.3, 8.5)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Quality issues and CAPAs were disseminated for Management Review? (ISO 13485:2016: 5.6.3, 8.3, 8.5)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm has procedures for handling complaints and investigation of advisory notices / recalls? Ensure provisions exist to feed in CAPA system. (ISO 13485:2016: 7.2.3, 8.2.1, 8.2.2, 8.2.3)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Medical Device Reporting (MDR) procedures comply with regulatory requirements? (ISO 13485:2016: 8.5.1)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm maintains MDR event files that comply with regulatory requirements? (ISO 13485:2016: 8.5.1)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Appropriate MDR information is identified, reviewed, reported, documented, and filed? (ISO 13485:2016: 8.5.1)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm is effective in identifying MDR reportable events? (ISO 13485:2016: 8.5.1)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm has established procedures for receiving, reviewing, and evaluating complaints? (ISO 13485:2016: 7.2.3, 8.2.1, 8.2.2, 8.5.1)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm maintains complaint files and that they are reasonably accessible? (ISO 13485:2016: 7.2.3, 8.2.1, 8.2.2, 8.5.1)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Complaints are evaluated to determine if an event should be a MDR? (ISO 13485:2016: 7.2.3, 8.2.1, 8.2.2, 8.2.3, 8.5.1)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Complaint investigations include the device name, date of complaint, device identification number, contact information of complainant, details of complaint, date and results of investigation, any corrective actions, and replies to complainant? (ISO 13485:2016: 7.2.3, 8.2.1, 8.2.2, 8.5.1)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Product realization processes are planned? Confirm that risk management occurs throughout product realization. (ISO 13485:2016: 7.1)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Planning of product realization is consistent with requirements of other processes of QMS? (ISO 13485:2016: 7.1)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Requirements have been defined for suppliers, contractors, and consultants; ensure suppliers, contractors, and consultants are selected on ability to meet requirements? (ISO 13485:2016: 7.1, 7.4.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm maintains records of acceptable suppliers, contractors, and consultants? (ISO 13485:2016: 7.4.1)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Data supporting supplier requirements is maintained? Verify that suppliers, contractors, and consultants agree to notify firm of changes in products and/or services. (ISO 13485:2016: 7.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Procedures for identifying product during all stages of receipt, production, distribution, and installation are in place? (ISO 13485:2016: 7.5.8, 7.5.9)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm maintains procedures and records for traceability of each unit, lot, or batch of finished devices and components? NOTE: may not be required for all devices. (ISO 13485:2016: 7.5.9)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Process is controlled and monitored? (ISO 13485:2016: 7.5, 7.6, 8.2.5, 8.2.6, 8.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Equipment used has been adjusted, calibrated, and maintained? (ISO 13485:2016: 7.5)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Control and oversight activities identified? Ensure control of inspection, measuring , test equipment, and calibration. (ISO 13485:2016: 7.6, 8.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm has established procedures for production and process changes? Ensure changes are verified or validated, as needed. (ISO 13485:2016: 7.3.9, 7.5.6)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Device history record (DHR) to identify rejects and/or non-conformances? (ISO 13485:2016: 8.3)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);
        DB::table('questions')->insert([
            'question' => 'Defects, rejects, non-conformances, and removal of materials were handled properly? (ISO 13485:2016: 8.3)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);
        DB::table('questions')->insert([
            'question' => 'Processes that cannot be fully verified are validated? (ISO 13485:2016: 7.5.6)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Automated or software driven processes are validated for intended uses? (ISO 13485:2016: 7.5.6)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);


        DB::table('questions')->insert([
            'question' => 'Personnel are trained per manufacturing processes and aware of potential defects? (ISO 13485:2016: 6.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Monitoring and control methods, data, date performed, individuals performing the process, and the major equipment used is documented? (ISO 13485:2016: 7.1, 8.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Linkages to other processes determined? (ISO 13485:2016: 4.1, 4.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Infrastructure and work environment are appropriate and controlled? (ISO 13485:2016: 6.3, 6.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Maintenance schedules, routine inspections, and adjustments to equipment occur? (ISO 13485:2016: 6.3, 7.5.1, 7.5.6, 7.6)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Procedures are in place for contamination control and cleanliness? (ISO 13485:2016: 6.4.2, 7.5.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Verification of purchased products is adequate? (ISO 13485:2016: 7.4.3,8.4) ',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Procedures define receiving, in-process, and final acceptance activities? (ISO 13485:2016: 7.5.11, 8.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Receiving, in-process, and final acceptance activity records exist? (ISO 13485:2016: 8.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Procedures exist and that acceptance status of product is indicated? (ISO 13485:2016: 7.1, 8.2.6)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Procedures define labeling activities, including integrity, inspection, storage, operations, and control numbers? (ISO 13485:2016: 7.5.11)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);
        DB::table('questions')->insert([
            'question' => 'Product packaging and shipping containers adequately protect device during processing, storage, handling, shipping, and distribution? (ISO 13485:2016: 7.5.11)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);
        DB::table('questions')->insert([
            'question' => 'Procedures exist to prevent mix-ups, damage, deterioration, contamination, or other adverse effects to product during handling? (ISO 13485:2016: 7.5.11)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Procedures exist for product distribution; confirm distribution records include name and address of consignee, identification and quantity shipped, date of shipment, and identification numbers? (ISO 13485:2016: 4.2.3, 7.1, 7.5.8, 7.5.9.2, 7.5.11)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Installation and inspection procedures exist (if applicable)? Verify installation records are maintained. (ISO 13485:2016: 7.5.3)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Servicing procedures exist (if applicable)? Verify servicing records are maintained. (ISO 13485:2016: 7.5.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm identifies, verifies, protects, and safeguards customer property under its care? (ISO 13485:2016: 7.5.10)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Review sterilization process procedures. Sterilization process is validated? (ISO 13485:2016: 7.5.7)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Review sterilization control and monitoring activities. Processes, equipment, and calibration are current? (ISO 13485:2016: 7.5.5)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Suppliers are evaluated for ability to meet specified requirements? (ISO 13485:2016: 7.4.1)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Adequacy of specifications of materials and/or services provided by supplier is confirmed? (ISO 13485:2016: 7.4.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Purchasing information identifies requirements for approval of product, procedures, processes, and equipment, requirements for personnel qualification, and QMS requirements? (ISO 13485:2016: 7.4.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Supplier evaluation records are maintained? (ISO 13485:2016: 7.4.1)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Verification and acceptance of purchased materials and/or services is adequate? (ISO 13485:2016: 7.4.3)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Documents and changes are approved prior to use? (ISO 13485:2016: 4.2.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Documents and records are legible and identifiable? (ISO 13485:2016:4.2.4(e), 4.2.5)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Documents of external origin are identified with controlled distribution? (ISO 13485:2016: 4.2.4(f))',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm maintains a quality system record (QSR) which includes or refers to location of procedures? (ISO 13485:2016: 4.2.1(c), (e))',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Documents and records are retained for required length of time (this includes retention of obsolete controlled documents and records)? (ISO 13485:2016: 4.2.1, 4.2.4, 4.2.5)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Change records are reviewed and approved by the same functions that performed original review and approval? (ISO 13485:2016: 4.2.4, 7.3.9)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Change records include a description of change, identification of affected documents, approval signatures, approval date, and effective date? (ISO 13485:2016: 7.3.9)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Documents are available at point of use and obsolete document are not in use? (ISO 13485:2016: 4.2.4(d), (h)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm maintains DMRs for each type of device? (ISO 13485:2016: 4.2.1)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'DMRs contain or make reference to device  pecifications, production process specifications, quality assurance procedures and specifications(including acceptance criteria), packaging and labeling specifications  (including acceptance criteria), and installation, maintenance, and servicing procedures? (ISO 13485:2016: 4.2.1)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);


        DB::table('questions')->insert([
            'question' => 'DHRs are maintained and devices are manufactured according to DMR? Realization processes and product meet requirements? (ISO 13485:2016: 7.1, 8.2.6)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'DHRs contain or make reference to dates of manufacture, quantity manufactured, quantity released for distribution, acceptance records demonstrating the device was manufactured per DMR, primary  dentification label and labeling used for each unit, and device identification and/or control numbers used? (ISO 13485:2016: 8.2.6)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm maintains records for education, training, skills, and experience of resources? (ISO 13485:2016: 6.2 (e))',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Firm maintains purchasing and supplier records? (ISO 13485:2016: 7.4.1, 7.4.3)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Sterilization process parameters and records are maintained for each batch? Ensure sterilization validation records are maintained. (ISO 13485:2016: 7.5.5, 7.5.7)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Review product requirements. The intended use, customer requirements, and regulatory requirements are addressed? (ISO 13485:2016: 7.2.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Incoming contracts and orders are reviewed to resolve conflicting information and that customer requirements can be met? (ISO 13485:2016: 7.2.2)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);


        DB::table('questions')->insert([
            'question' => 'Procedures and systems exist for customer communications and feedback? Ensure integration with CAPA system. (ISO 13485:2016: 7.2.3, 8.2.1)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Review technical file procedures (ISO 13485:2016: 4.2.1(d))',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Documents need to ensure planning, operation, and control of technical file processes? (ISO 13485:2016: 4.2.1(d))',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Documentation addresses a general description of product, intended use(s), and any variants, accessories, or other devices used in combination with product? (ISO 13485:2016: 7.1, 7.2, 7.3.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Design specifications, standards applied, and results of risk analysis are present? (ISO 13485:2016: 7.1, 7.2, 7.3.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Principal requirements have been fulfilled? (ISO 13485:2016: 7.1, 7.2, 7.3.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Techniques used to verify design and validate product(s) clinical data? (ISO 13485:2016: 7.1, 7.2, 7.3.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);


        DB::table('questions')->insert([
            'question' => 'Documentation includes instruction manual(s) and labeling? (ISO 13485:2016: 7.1, 7.2, 7.3.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);

        DB::table('questions')->insert([
            'question' => 'Major subcontractors have been documented? (ISO 13485:2016: 7.1, 7.2, 7.3.4)',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '2',
        ]);


    }
}
