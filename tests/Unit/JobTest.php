<?php

use App\Models\Employer;
use App\Models\Job;

// The Steps
// 1-write a test where you interact with the world in way that ideal with you
// 2- run the test but test will fail
// 3- wtite the code to make the code pass


// هذا هو الاختبار الذي نتحقق من خلاله ما إذا كان الموديل Job ينتمي إلى الموديل Employer.
test('its belongs to an employer', function () {
    /// AAA Arrange, Act, Assert
    // ترتيب (Arrange):
    // ننشئ موديل Employer باستخدام الفاكتوري
    $employer = Employer::factory()->create();

    // ننشئ موديل الوظيفة مرتبطًا بـ Employer الذي تم إنشاؤه مسبقًا
    $job = Job::factory()->create([
        'employer_id' => $employer->id, // نربط الـ Job بالـ Employer عن طريق تعيين قيمة employer_id
    ]);

    // الفعل والتحقق (Act and Assert):
    // نتحقق من أن الوظيفة تنتمي إلى الموظف الذي تم إنشاؤه مسبقًا
    // نستخدم is() للتحقق من أن النموذجين الموديلين هما نفس الكائن
    expect($job->employer->is($employer))->toBeTrue();
    // expect() هي دالة من مكتبة الاختبار التي نستخدمها للتحقق من التوقعات
    // toBeTrue() تحقق أن القيمة صحيحة، مما يعني أن الـ وظيفة تنتمي بالفعل إلى الموظف
});


it('can have tag', function () {
   /// AAA
    $job = Job::factory()->create();
    $job->tag('FrontEnd');
    expect($job->tags)->toHaveCount(1);
});
