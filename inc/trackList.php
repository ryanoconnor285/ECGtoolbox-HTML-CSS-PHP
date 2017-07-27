<?php

$tracks = [];
$tracks[1001] = [
  "category" => "basics",
  "title" => "Components of ECG",
  "href" => "details.php?id=",
  "description" => "No time to test the waters, we just need to dive in.  You will see many new terms that you may not be familiar with in this track.  Everything that you see here will repeat over and over again.  If you don't understand something the first time around, don't sweat it, everything will be explained along the way.",
  "topics" => [
        "P-wave",
        "QRS complex",
        "T-wave",
        "PR interval",
        "ST segment",
        "QT interval",
        "Recognize Normal Sinus Rhythm"
  ],
  "content" => 
  "<div class='container'> <!--container div--> 
  <div class='row'>
    <div class='col-lg-8'>
      <h2>P wave</h2>
      <p class='lead'>
      The P wave basically kicks off a heart beat.  A heart beat starts when the SA node depolarizes.  Depolarization and cardiac anatomy are covered in depth later on, but for now when you see ‘depolarize' just think of contraction of the heart muscle.  The P wave represents contraction of the atria.  The normal duration of the P wave is less than 0.12 seconds or 3 small squares on an ECG tracing.  The amplitude of a normal P wave should be no more that 3mm.  It should have a rounded shape.  It should be symmetrical.</p>
      <div class='card'>
        <img class='card-img-top' data-src='...' alt='Card image cap'>
        <div class='card-block'>
          <h4 class='card-title'>Key points for P waves</h4>
        </div>
        <ul class='list-group list-group-flush'>
          <li class='list-group-item'>Represents contraction of the atria.</li>
          <li class='list-group-item'>Normal Duration 0.12 seconds</li>
          <li class='list-group-item'>Normal amplitude 3mm</li>
          <li class='list-group-item'>Rounded, symmetrical appearance</li>
        </ul>
      </div>
      <h2>QRS complex</h2>
      <p class='lead'>
      The ventricles are the largest part of the heart.  So when they contract they create the most prominent part of the ECG which is the QRS complex.  The QRS complex consists of 3 waves.  It starts with a negative deflection which is the Q wave, followed by a positive deflection which is the R wave, and finally another negative deflection which is the S wave.  In most healthy patients, a Q wave will be absent or not observable.  Being able to identify a Q wave or an S wave is not important.  The most important part of the QRS complex is the R wave.  The R wave should be narrow usually 1 small box.  If the QRS complex is more than 3 boxes, it is considered to be wide.  The width of the QRS complex determines it's origin.  If it is narrow it usually originates in tissue above the ventricles and is called supraventricular.  If it is wide it is called a ventricular rhythm.</p>
      <div class='card'>
        <img class='card-img-top' data-src='...' alt='Card image cap'>
        <div class='card-block'>
          <h4 class='card-title'>Key points for QRS complex</h4>
        </div>
        <ul class='list-group list-group-flush'>
          <li class='list-group-item'>Represents contraction of the ventricles.</li>
          <li class='list-group-item'>Normal width is less than 100ms</li>
          <li class='list-group-item'>Normal amplitude 3mm</li>
          <li class='list-group-item'>Rounded, symmetrical appearance</li>
        </ul>
      </div>
      <h2>T wave</h2>
      <p class='lead'>
      The T wave represents ventricular repolarization.  During this time the ventricles reset and get ready for the next contraction.  The T wave should have a smooth and rounded appearance and is usually asymmetrical.  
      </p>
      <div class='card'>
        <img class='card-img-top' data-src='...' alt='Card image cap'>
        <div class='card-block'>
          <h4 class='card-title'>Key points for T wave</h4>
        </div>
        <ul class='list-group list-group-flush'>
          <li class='list-group-item'>Represents repolarization of the ventricles.</li>
          <li class='list-group-item'>Amplitude < 5mm in limb leads</li>
          <li class='list-group-item'>Amplitude < 10mm in precordial leads</li>
          <li class='list-group-item'>Rounded, asymmetrical appearance</li>
        </ul>
      </div>
      <h2>P-R interval</h2>
      <p class='lead'>
      The P-R interval is measured from the beginning of the P wave to the beginning of the QRS complex.  It is used to assess the electrical conduction from the SA node to the AV node.  In healthy individuals, the P-R is 0.12 to 0.20 seconds.
      </p>
      <div class='card'>
        <img class='card-img-top' data-src='...' alt='Card image cap'>
        <div class='card-block'>
          <h4 class='card-title'>Key points for QRS complex</h4>
        </div>
        <ul class='list-group list-group-flush'>
          <li class='list-group-item'>Represents conduction from SA to AV node</li>
          <li class='list-group-item'>Normal width is less than 100ms</li>
          <li class='list-group-item'>Normal amplitude 3mm</li>
          <li class='list-group-item'>Rounded, symmetrical appearance</li>
        </ul>
      </div>
      <h2>S-T segment</h2>
      <p class='lead'>
      The S-T segment is the line between the end of the QRS complex and the beginning of the T wave.  The S-T segment should be along the baseline with no elevation or depression in any leads.
      </p>
      <div class='card'>
        <img class='card-img-top' data-src='...' alt='Card image cap'>
        <div class='card-block'>
          <h4 class='card-title'>Key points for QRS complex</h4>
        </div>
        <ul class='list-group list-group-flush'>
          <li class='list-group-item'>Represents contraction of the ventricles.</li>
          <li class='list-group-item'>Normal width is less than 100ms</li>
          <li class='list-group-item'>Normal amplitude 3mm</li>
          <li class='list-group-item'>Rounded, symmetrical appearance</li>
        </ul>
      </div>
      <h2>Q-T interval </h2>
      <p class='lead'>
      Is measured from the beginning of the QRS complex to the end of the T wave.  It represents the full cycle of ventricular depolarization and repolarization.  A lengthened QT interval is a marker for the potential of ventricular tachyarrhythmias like torsades de pointes and a risk factor for sudden death.
      </p>
      <div class='card'>
        <img class='card-img-top' data-src='...' alt='Card image cap'>
        <div class='card-block'>
          <h4 class='card-title'>Key points for QRS complex</h4>
        </div>
        <ul class='list-group list-group-flush'>
          <li class='list-group-item'>Represents contraction of the ventricles.</li>
          <li class='list-group-item'>Normal width is less than 100ms</li>
          <li class='list-group-item'>Normal amplitude 3mm</li>
          <li class='list-group-item'>Rounded, symmetrical appearance</li>
        </ul>
      </div>
    </div>
  </div> <!--row div-->
</div> <!--container div--> ",
  "img" => "",
  "color" => "lightblue",
  "rhythms" => [
        "Normal Sinus Rhythm",
        "Sinus Tachycardia",
        "Sinus Bradycardia"
  ]
];
$tracks[1002] = [
  "category" => "basics",
  "title" => "Danger Zone",
  "href" => "tracks/componentsOfECG.php",
  "description" => "This track covers some of the life threatening rhythms that usually require immediate interventions.",
  "topics" => [
        "Treat Your Patient NOT Your Monitor",
        "Ventricular Tachycardia",
        "Ventricular Fibrillation",
        "Asystole",
        "Pulseless Electrical Activity"
  ],
  "content" => 
  "<div class='container'> <!--container div--> 
  <div class='row'>
    <div class='col-lg-8'>
      <h2>P wave</h2>
      <p class='lead'>
      The P wave basically kicks off a heart beat.  A heart beat starts when the SA node depolarizes.  Depolarization and cardiac anatomy are covered in depth later on, but for now when you see ‘depolarize' just think of contraction of the heart muscle.  The P wave represents contraction of the atria.  The normal duration of the P wave is less than 0.12 seconds or 3 small squares on an ECG tracing.  The amplitude of a normal P wave should be no more that 3mm.  It should have a rounded shape.  It should be symmetrical.</p>
      <div class='card'>
        <img class='card-img-top' data-src='...' alt='Card image cap'>
        <div class='card-block'>
          <h4 class='card-title'>Key points for P waves</h4>
        </div>
        <ul class='list-group list-group-flush'>
          <li class='list-group-item'>Represents contraction of the atria.</li>
          <li class='list-group-item'>Normal Duration 0.12 seconds</li>
          <li class='list-group-item'>Normal amplitude 3mm</li>
          <li class='list-group-item'>Rounded, symmetrical appearance</li>
        </ul>
      </div>
      <h2>QRS complex</h2>
      <p class='lead'>
      The ventricles are the largest part of the heart.  So when they contract they create the most prominent part of the ECG which is the QRS complex.  The QRS complex consists of 3 waves.  It starts with a negative deflection which is the Q wave, followed by a positive deflection which is the R wave, and finally another negative deflection which is the S wave.  In most healthy patients, a Q wave will be absent or not observable.  Being able to identify a Q wave or an S wave is not important.  The most important part of the QRS complex is the R wave.  The R wave should be narrow usually 1 small box.  If the QRS complex is more than 3 boxes, it is considered to be wide.  The width of the QRS complex determines it's origin.  If it is narrow it usually originates in tissue above the ventricles and is called supraventricular.  If it is wide it is called a ventricular rhythm.</p>
      <div class='card'>
        <img class='card-img-top' data-src='...' alt='Card image cap'>
        <div class='card-block'>
          <h4 class='card-title'>Key points for QRS complex</h4>
        </div>
        <ul class='list-group list-group-flush'>
          <li class='list-group-item'>Represents contraction of the ventricles.</li>
          <li class='list-group-item'>Normal width is less than 100ms</li>
          <li class='list-group-item'>Normal amplitude 3mm</li>
          <li class='list-group-item'>Rounded, symmetrical appearance</li>
        </ul>
      </div>
      <h2>T wave</h2>
      <p class='lead'>
      The T wave represents ventricular repolarization.  During this time the ventricles reset and get ready for the next contraction.  The T wave should have a smooth and rounded appearance and is usually asymmetrical.  
      </p>
      <div class='card'>
        <img class='card-img-top' data-src='...' alt='Card image cap'>
        <div class='card-block'>
          <h4 class='card-title'>Key points for T wave</h4>
        </div>
        <ul class='list-group list-group-flush'>
          <li class='list-group-item'>Represents repolarization of the ventricles.</li>
          <li class='list-group-item'>Amplitude < 5mm in limb leads</li>
          <li class='list-group-item'>Amplitude < 10mm in precordial leads</li>
          <li class='list-group-item'>Rounded, asymmetrical appearance</li>
        </ul>
      </div>
      <h2>P-R interval</h2>
      <p class='lead'>
      The P-R interval is measured from the beginning of the P wave to the beginning of the QRS complex.  It is used to assess the electrical conduction from the SA node to the AV node.  In healthy individuals, the P-R is 0.12 to 0.20 seconds.
      </p>
      <div class='card'>
        <img class='card-img-top' data-src='...' alt='Card image cap'>
        <div class='card-block'>
          <h4 class='card-title'>Key points for QRS complex</h4>
        </div>
        <ul class='list-group list-group-flush'>
          <li class='list-group-item'>Represents conduction from SA to AV node</li>
          <li class='list-group-item'>Normal width is less than 100ms</li>
          <li class='list-group-item'>Normal amplitude 3mm</li>
          <li class='list-group-item'>Rounded, symmetrical appearance</li>
        </ul>
      </div>
      <h2>S-T segment</h2>
      <p class='lead'>
      The S-T segment is the line between the end of the QRS complex and the beginning of the T wave.  The S-T segment should be along the baseline with no elevation or depression in any leads.
      </p>
      <div class='card'>
        <img class='card-img-top' data-src='...' alt='Card image cap'>
        <div class='card-block'>
          <h4 class='card-title'>Key points for QRS complex</h4>
        </div>
        <ul class='list-group list-group-flush'>
          <li class='list-group-item'>Represents contraction of the ventricles.</li>
          <li class='list-group-item'>Normal width is less than 100ms</li>
          <li class='list-group-item'>Normal amplitude 3mm</li>
          <li class='list-group-item'>Rounded, symmetrical appearance</li>
        </ul>
      </div>
      <h2>Q-T interval </h2>
      <p class='lead'>
      Is measured from the beginning of the QRS complex to the end of the T wave.  It represents the full cycle of ventricular depolarization and repolarization.  A lengthened QT interval is a marker for the potential of ventricular tachyarrhythmias like torsades de pointes and a risk factor for sudden death.
      </p>
      <div class='card'>
        <img class='card-img-top' data-src='...' alt='Card image cap'>
        <div class='card-block'>
          <h4 class='card-title'>Key points for QRS complex</h4>
        </div>
        <ul class='list-group list-group-flush'>
          <li class='list-group-item'>Represents contraction of the ventricles.</li>
          <li class='list-group-item'>Normal width is less than 100ms</li>
          <li class='list-group-item'>Normal amplitude 3mm</li>
          <li class='list-group-item'>Rounded, symmetrical appearance</li>
        </ul>
      </div>
    </div>
  </div> <!--row div-->
</div> <!--container div--> ",
  "img" => "",
  "color" => "lightblue",
  "rhythms" => [
        "Normal Sinus Rhythm",
        "Ventricullar Tachycardia",
        "Ventricular Fibrillation",
        "Asystole",
        "Pulseless Electrical Activity"
  ]
];
$tracks[1003] = [
  "category" => "basics",
  "title" => "Calculate the Rate",
  "href" => "tracks/componentsOfECG.php",
  "description" => "",
  "topics" => [
        "Box Values",
        "Methods for Calculating Rate",
        "Getting to Know Your Monitor"
  ],
  "content" => "",
  "img" => "",
  "color" => "lightblue",
  "rhythms" => [
        "Normal Sinus Rhythm",
        "Sinus Tachycardia",
        "Sinus Bradycardia",
        "Supraventricular Tachycardia"
  ]
];
$tracks[1004] = [
  "category" => "basics",
  "title" => "Leads",
  "href" => "tracks/componentsOfECG.php",
  "description" => "",
  "topics" => [
        "Electrodes vs. Leads",
        "3 Lead System",
        "5 Lead System",
        "12 Lead ECG",
        "Electrode Placement"
  ],
  "content" => "",
  "img" => "",
  "color" => "lightblue",
  "rhythms" => [
        "Normal Sinus Rhythm",
        "Sinus Tachycardia",
        "Sinus Bradycardia"
  ]
];
$tracks[1005] = [
  "category" => "basics",
  "title" => "Anatomy of the Heart",
  "href" => "tracks/componentsOfECG.php",
  "description" => "",
  "topics" => [
        "Chambers of the Heart",
        "Cardiophysiology",
        "Conduction System of the Heart",
        "Intrinsic Conduction Rates"
  ],
  "content" => "",
  "img" => "",
  "color" => "lightblue",
  "rhythms" => [
        "Normal Sinus Rhythm",
        "Junctional Rhythm",
        "Idioventricular Rhythm"
  ]
];
$tracks[1006] = [
  "category" => "basics",
  "title" => "Systematic Approach",
  "href" => "tracks/componentsOfECG.php",
  "description" => "",
  "topics" => [
        "Rate, Regularity, Rhythm",
        "QRS Complex, Wide or Narrow?",
        "Summary"
  ],
  "content" => "",
  "img" => "",
  "color" => "lightblue",
  "rhythms" => [
        "Normal Sinus Rhythm",
        "Sinus Tachycardia",
        "Sinus Bradycardia",
        "Supreventricular Tachycardia",
        "Ventricullar Tachycardia",
        "Ventricular Fibrillation",
        "Asystole",
        "Pulseless Electrical Activity"
  ]
];
$tracks[2100] = [
  "category" => "advanced",
  "title" => "Generation of the ECG",
  "href" => "tracks/componentsOfECG.php",
  "description" => "",
  "topics" => [
    "Physiology",
    "SA Node and Pacemakers",
    "Atrial Depolarization",
    "Atrio Ventricular Conduction",
    "Ventricular Depolarization",
    "Repolarization",
    "Events at the Cellular Level",
    "Electrodes",
    "ECG Leads and Placement",
  ],
  "introText" => "",
  "content" => "",
    
  "img" => "",
  "color" => "lightgreen",
  "rhythms" => [
        "Normal Sinus Rhythm"
  ]
];
$tracks[2002] = [
  "category" => "advanced",
  "title" => "The Normal Electrocardiogram",
  "href" => "tracks/componentsOfECG.php",
  "description" => "In order to recognize and interpret the abnormal electrogram, it is first necessary to be familiar with the normal electrocardiogram and to appreciate the fact that the electrocardiographic waveform is influenced by the age, sex, race, and body build of the patient. In addition, the patient's position and the location of the electrodes on the body surface will influence the waveform observed.

In this section, we will discuss the characteristics of the normal P wave, QRS complex, ST segment, T and U waves and will show how these components can be expressed as a series of spatial vectors having direction and magnitude. This approach, developed by Dr. Robert Grant in the 1950's, is of great help in defining the normal electrocardiographic waveform and in recognizing deviations from normal.",
  "topics" => [
        "P Wave",
        "PR Interval",
        "QRS Complex",
        "ST Segment",
        "T Wave",
        "QT Interval",
        "U Wave",
  ],
  "content" => "",
  "img" => "",
  "color" => "lightgreen",
  "rhythms" => [
        "Normal Sinus Rhythm"
  ]
];
$tracks[2003] = [
  "category" => "advanced",
  "title" => "Ventricular Conduction Disturbances",
  "href" => "tracks/componentsOfECG.php",
  "description" => "Disturbances of conduction within or between the ventricles are termed intra and inter ventricular conduction disturbances respectively. They may be due to diffuse prolongation or slowing of conduction throughout the ventricles, to changes in the sequence of activation within the ventricles or to both.",
  "topics" => [
        "Review",
        "Right Bundle Branch Block(RBBB)",
        "Left Bundle Branch Block(LBBB)",
        "Fascicular Blocks",
        "Aberrant Ventricular Conduction",
        "Ventricular Pre-excitation",
  ],
  "content" => "",
  "img" => "",
  "color" => "lightgreen",
  "rhythms" => [
        "Normal Sinus Rhythm"
  ]
];
$tracks[2004] = [
  "category" => "advanced",
  "title" => "Ventricular Hypertrophy",
  "href" => "tracks/componentsOfECG.php",
  "description" => "Ventricular hypertrophy may be defined as an increase in ventricular mass as determined at post-mortem exinations or as estimated pre-mortem by one of several cardiac imaging techniques including echocardiography, and magnetic resonance. Included in this definition is an increase in ventricular wall thickness, which reflects an increase in the size of the individual myocytes, and an increase in ventricular volume which occurs in association with ventricular dilatation.<br>
An increase in the thickness of the ventricular wall is a common response to a pressure or systolic overload of the ventricles. This occurs in the setting aortic or pulmonic valvular or sub-valvular stenosis and with systemic or pulmonary hypertension. Ventricular dilatation is a common response to a volume or diastolic overload of the ventricles such as that which accompanies valvular insufficiency or intracardiac shunts. Not infrequently, hypertrophy and dilatation occur together.<br>
The anatomic and physiologic changes are associated with electrophysiologic changes that together produce the electrocardiographic changes interpreted as ventricular hypertrophy. The electrocardiographic changes involve the shape and duration of the P wave, the amplitude, duration and axis of the QRS complex, and abnormalities in the ST segment and the T wave.

Studies correlating ECG patterns to increases in ventricular mass have spawned multiple sets of ECG criteria for the diagnosis of left, right and combined ventricular hypertrophy Most rely on changes in QRS amplitude as the primary criterion but some include multiple factors including frontal plane axis, QRS duration, P wave abnormalities and abnormalities in the ST segment and T wave. As was pointed out in chapter 2, QRS amplitude in healthy individuals is influenced by multiple factors including age, gender, race and body habitus and the range of normal values is quite large. Moreover, changes in left ventricular surface area, an increase in intracavitary blood volume and the closer proximity of the ventricle to the chest wall, as well as the increase in ventricular mass, may contribute to the changes in QRS amplitude associated with chamber enlargement. The various ECG criteria for hypertrophy are a trade-off of between specificity and sensitivity and the search for the most accurate and clinically relevant criteria is ongoing.<br>
In this chapter, the ECG changes associated with ventricular hypertrophy and dilatation will be discussed and examples provided to illustrate the various changes induced by diseases that alter ventricular mass and volume.",
  "topics" => [
        "Left Ventricular Hypertrophy",
        "Right Ventricular Hypertrophy",
        "Biventricular Hypertrophy",
  ],
  "content" => "",
  "img" => "",
  "color" => "lightgreen",
  "rhythms" => [
        "Normal Sinus Rhythm"
  ]
];
$tracks[2005] = [
  "category" => "advanced",
  "title" => "Electrolyte Abnormalities, Drug Effects and Long QT Syndromes",
  "href" => "tracks/componentsOfECG.php",
  "description" => "A major goal of this work is to demonstrate the relationship of the electrocardiographic waveform to the transmembrane action potential that is generated by the movement of ions across the cell membrane via various ionic channels and ionic pumps from the extracellular space to the intracellular space and vice-versa. Changes in extracellular and intracellular ionic concentrations, drugs which affect the ionic channels and ionic pumps, i.e. cardioactive drugs such as the antiarrhythmic agents, and pathological changes such as those associated with myocardial ischemia will influence the movement of ions, particularly sodium, potassium and calcium across the cell membrane and this will result in changes in the transmembrane action potential. These action potential changes will be mirrored by changes in the electrocardiographic waveform. The relationship between the ECG and the action potential is such that it is possible to predict the changes in the electrocardiographic waveform that will accompany changes in the action potential and conversely, to predict the changes in the action potential that underlie changes in the electrocardiogram.<br>
In this chapter, we will review the ionic events responsible for the action potential, discuss the changes in the action potential caused by changes in extracellular ionic concentrations, particularly potassium and calcium and show how these changes are mirrored by changes in the electrocardiogram. We will discuss the mechanism by which cardioactive drugs influence ionic fluxes to change the action potential and how these changes may actually potentiate the development of arrhythmias. We will then discuss the congenital long QT Syndrome in which genetic modifications of the sodium and potassium channels cause changes in the action potential which result in lengthening of the QT interval on the electrocardiogram and a form the substrate for a unique form of life threatening ventricular tachycardia known as Torsade de Pointes. The final section focuses on the Brugada syndrome, a genetically mediated disorder that is also associated with life threatening ventricular arrhythmias.",
  "topics" => [
        "Review",
        "Hyperkalemia",
        "Hypokalemia",
        "Changes in Calcium and Sodium",
        "Drug Effects",
        "Hypothermia",
        "Brugada"
  ],
  "content" => "",
  "img" => "",
  "color" => "lightgreen",
  "rhythms" => [
        "Normal Sinus Rhythm"
  ]
];
$tracks[2006] = [
  "category" => "advanced",
  "title" => "Ischemia and Infarction",
  "href" => "tracks/componentsOfECG.php",
  "description" => "Myocardial ischemia and infarction are the terms used to describe the sequence of events that occur when blood supply to the myocardium is inadequate to meet its metabolic demands. This imbalance between metabolic demand and supply leads to a series of metabolic, ionic and neuro-hormonal events that cause changes in the electrical and mechanical properties of the cells and fibers within the ischemic region. The electrical changes that occur during repolarization and during diastole (phases 3 and 4 of the action potential) are reflected on the body surface electrocardiogram by changes in the TQ and ST segments and by changes in the T wave. The TQ and ST segment changes are usually transient and resolve when ischemia is relieved or the cells die and/or become electrically uncoupled. The T wave changes usually persist for a longer duration, but usually eventually resolve. The electrical changes that occur during depolarization are reflected by changes in the QRS complex which indicate that the cells in the ischemic region are no longer excitable, usually the result of cell death. These changes are usually irreversible although the may evolve over time.<br>
In this chapter, we will discuss the electrophysiologic causes of the electrocardiographic changes that accompany myocardial ischemia and infarction and how these changes help to identify the involved myocardial region(s) and, in some situations, the location of the obstruction(s) within the coronary circulation. We will also discuss the situations in which electrocardiographic changes that simulate ischemia and infarction may occur in the absence of these events.",
  "topics" => [
        ""
  ],
  "content" => "",
  "img" => "",
  "color" => "lightgreen",
  "rhythms" => [
        "Normal Sinus Rhythm"
  ]
];
$tracks[2007] = [
  "category" => "advanced",
  "title" => "Tachycardias",
  "href" => "tracks/componentsOfECG.php",
  "description" => "The next two chapters discuss abnormal cardiac rhythms. This chapter, chapter 7, discusses rhythms that may be of normal rate but originate from regions other than the sinus node, and rhythms that are abnormally rapid. These abnormally rapid rhythms are referred to as the tachyarrhythmias and include those that originate in the sinus node as well as those that originate at regions other than the sinus node. The second chapter, chapter 8, discusses rhythms that are abnormally slow, the bradyarrhythmias.<br>
Some of the rhythm disturbances are physiologic, such as the increase in heart rate that occurs with exercise, the decrease in heart rate that occurs during sleep, and the variations in heart rate that occur with respiration. Others are pathologic and may be the cause of palpitations, syncope and/or sudden death. Some occur in hearts that are otherwise normal and represent isolated electrical abnormalities that may have a genetic basis, while other occur in hearts that have been damaged by a variety of cardiac diseases.<br>
All rhythm disturbances, whether fast or slow, whether physiologic or pathologic, and whether occurring in normal or diseased hearts, can be attributed to abnormalities in impulse formation, to abnormalities in impulse propagation, or to both. From an electrocardiographic standpoint, the challenge is to determine the rhythm abnormality and to deduce its electrophysiologic cause. The ability to meet both of these challenges is important because the therapeutic approach, i.e. which drug or drugs to use and whether or not to insert a pacemaker or defibrillator often depends upon the interpretation of the body surface electrocardiogram.<br>
In each of these chapters we will consider the mechanism(s) responsible for the various rhythm disturbances as well as their electrocardiographic presentations and interpretations.",
  "topics" => [
        ""
  ],
  "content" => "",
  "img" => "",
  "color" => "lightgreen",
  "rhythms" => [
        "Normal Sinus Rhythm"
  ]
];
$tracks[2008] = [
  "category" => "advanced",
  "title" => "Bradycardias",
  "href" => "tracks/componentsOfECG.php",
  "description" => "The bradycardias, like the tachycardias, can be attributed to abnormalities in impulse formation and/or to abnormalities in impulse transmission. In the bradycardias, the rate of impulse formation is slowed abnormally or impulse transmission is blocked. This results in a slowing of the rate, the presence of abnormal pauses and the emergence of escape beats and rhythms. In this chapter, we will discuss the electrocardiographic presentations of the bradycardias and group beating. We will also illustrate how the use of ladder diagrams contributes to arriving at the correct diagnosis of the rhythm disturbance.",
  "topics" => [
        ""
  ],
  "content" => "",
  "img" => "",
  "color" => "lightgreen",
  "rhythms" => [
        "Normal Sinus Rhythm"
  ]
];
$tracks[2009] = [
  "category" => "advanced",
  "title" => "The ECG of Heart Murmurs",
  "href" => "tracks/componentsOfECG.php",
  "description" => "The purpose of this chapter is to demonstrate the usefulness of the body surface electrocardiogram in determining the etiology heart murmurs and their hemodynamic significance. Heart murmurs are the result of turbulent blood flow across heart valves, intracardiac defects or vascular abnormalities. Frequently, the abnormality causing the heart murmur is also associated with ventricular hypertrophy or dilatation, intraventricular conduction disturbances or cardiac arrhythmias. The correlation of these electrocardiographic changes with the characteristics of the heart murmur, such as its location, intensity, and radiation permits a more accurate diagnosis of the abnormality causing the murmur and a more precise analysis of its hemodynamic significance. For instance, the association of a systolic heart murmur with either left or right ventricular hypertrophy would indicate that the lesion responsible for the murmur had caused a pressure or volume overload of the involved ventricle and this information would contribute to the correct diagnosis of the lesion responsible for the murmur and a more accurate assessment of its severity. In this chapter, we will present examples of heart murmurs and the associated electrocardiograms. The goals for the reader are threefold:",
  "topics" => [
        ""
  ],
  "content" => "",
  "img" => "",
  "color" => "lightgreen",
  "rhythms" => [
        "Normal Sinus Rhythm"
  ]
];
$tracks[2010] = [
  "category" => "advanced",
  "title" => "ECG in the Emergency Department",
  "href" => "tracks/componentsOfECG.php",
  "description" => "No where is it more important for the initial reading of the body surface ECG to be accurate than in the Emergency Department, for it is here that decisions that may have life or death implications for the patient are routinely made. This is most obvious in patients presenting with chest pain, but is equally true in patients presenting with symptoms of shortness of breath, palpitations and/or syncope or dizziness. In this section, the electrocardiograms of patients presenting to the Emergency Department with the these symptoms will be presented. Try to interpret the tracings and decide what you would have done in this setting. Some of the tracings were shown in earlier sections.",
  "topics" => [
        ""
  ],
  "content" => "",
  "img" => "",
  "color" => "lightgreen",
  "rhythms" => [
        "Normal Sinus Rhythm"
  ]
];