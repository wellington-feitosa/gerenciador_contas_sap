<?php

$arr_contas = array( "0" => array("e"=>array("IMP" => array("+"=>"412010101", "-"=>"521010138"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010138"),
                                         ),
                              "n"=>array("IMP" => array("+"=>"412010101", "-"=>"521010141"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010141"),
                                         ),
                            ),

                //frete
                "10" => array("e"=>array("IMP" => array("+"=>"521010102", "-"=>"521010102"),
                                         "EXP" => array("+"=>"412010205", "-"=>"521010132"),
                                         ),
                              "n"=>array("IMP" => array("+"=>"521010102", "-"=>"521010102"),
                                         "EXP" => array("+"=>"412010205", "-"=>"521010132"),
                                         ),
                            ),

                //imo2020
                "1247" => array("e"=>array("IMP" => array("+"=>"521010102", "-"=>"521010102"),
                                         "EXP" => array("+"=>"412010205", "-"=>"521010132"),
                                         ),
                              "n"=>array("IMP" => array("+"=>"521010102", "-"=>"521010102"),
                                         "EXP" => array("+"=>"412010205", "-"=>"521010132"),
                                         ),
                            ),

                //EFF
                "1250" => array("e"=>array("IMP" => array("+"=>"521010102", "-"=>"521010102"),
                                         "EXP" => array("+"=>"412010205", "-"=>"521010132"),
                                         ),
                              "n"=>array("IMP" => array("+"=>"521010102", "-"=>"521010102"),
                                         "EXP" => array("+"=>"412010205", "-"=>"521010132"),
                                         ),
                            ),

                //COMPLEMENTAR DE EFF
                "1257" => array("e"=>array("IMP" => array("+"=>"521010102", "-"=>"521010102"),
                                        "EXP" => array("+"=>"412010205", "-"=>"521010132"),
                                        ),
                            "n"=>array("IMP" => array("+"=>"521010102", "-"=>"521010102"),
                                        "EXP" => array("+"=>"412010205", "-"=>"521010132"),
                                        ),
                            ),

                //Origin Fee
                "1243" => array("e"=>array("IMP" => array("+"=>"521010102", "-"=>"521010102"),
                                         "EXP" => array("+"=>"412010201", "-"=>"412010201"),
                                         ),
                              "n"=>array("IMP" => array("+"=>"521010102", "-"=>"521010102"),
                                         "EXP" => array("+"=>"412010201", "-"=>"412010201"),
                                         ),
                            ),

                //Caaptazias
                "8" => array("e"=>array("IMP" => array("+"=>"412010101", "-"=>"521010138"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010138"),
                                         ),//padrï¿½o cambio capatazias (adicional frete)
                              "n"=>array("IMP" => array("+"=>"412010101", "-"=>"521010139"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010139"),
                                         ),
                            ),


                //Thc
                "3" => array("e"=>array("IMP" => array("+"=>"412010101", "-"=>"521010138"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010138"),
                                         ),//padrï¿½o cambio capatazias (adicional frete que no scoa ï¿½ somente frete e demurrage, todo o restante vira adicional de frete no cambio)
                              "n"=>array("IMP" => array("+"=>"412010101", "-"=>"521010139"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010139"),
                                         ),
                            ),

                //demurrage
                "1020" => array("e"=>array("IMP" => array("+"=>"412010101", "-"=>"521010108"),
                                         "EXP" => array("+"=>"", "-"=>""),
                                         ),
                              "n"=>array("IMP" => array("+"=>"412010101", "-"=>"521010108"),
                                         "EXP" => array("+"=>"", "-"=>""),
                                         ),
                            ),


                //desconsolidaï¿½ï¿½o
                "21" => array("e"=>array("IMP" => array("+"=>"412010101", "-"=>"521010138"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010138"),
                                         ),
                              "n"=>array("IMP" => array("+"=>"412010101", "-"=>"521010143"),
                                         "EXP" => array("+"=>"", "-"=>""),
                                         ),
                            ),


                //desova
                "22" => array("e"=>array("IMP" => array("+"=>"412010101", "-"=>"521010138"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010138"),
                                         ),
                              "n"=>array("IMP" => array("+"=>"412010101", "-"=>"521010136"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010136"),
                                         ),
                            ),

                //estufagem
                "32" => array("e"=>array("IMP" => array("+"=>"412010101", "-"=>"521010138"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010138"),
                                         ),
                              "n"=>array("IMP" => array("+"=>"412010101", "-"=>"521010136"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010136"),
                                         ),
                            ),

                //tec
                "1083" => array("e"=>array("IMP" => array("+"=>"412010101", "-"=>"521010138"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010138"),
                                         ),
                              "n"=>array("IMP" => array("+"=>"412010101", "-"=>"521010136"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010136"),
                                         ),
                            ),

                 //liberaï¿½ï¿½o
                "25" => array("e"=>array("IMP" => array("+"=>"412010101", "-"=>"521010138"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010138"),
                                         ),
                              "n"=>array("IMP" => array("+"=>"412010101", "-"=>"521010140"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010140"),
                                         ),
                            ),

                //transhipment
                "34" => array("e"=>array("IMP" => array("+"=>"412010101", "-"=>"521010138"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010138"),
                                         ),
                              "n"=>array("IMP" => array("+"=>"412010101", "-"=>"521010137"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010137"),
                                         ),
                            ),

                //truck
                "1036" => array("e"=>array("IMP" => array("+"=>"412010101", "-"=>"521010138"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010138"),
                                         ),
                              "n"=>array("IMP" => array("+"=>"412010101", "-"=>"521010137"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010137"),
                                         ),
                            ),

                //complementar truck
                "1255" => array("e"=>array("IMP" => array("+"=>"412010101", "-"=>"521010138"),
                                        "EXP" => array("+"=>"412010201", "-"=>"521010138"),
                                        ),
                            "n"=>array("IMP" => array("+"=>"412010101", "-"=>"521010137"),
                                        "EXP" => array("+"=>"412010201", "-"=>"521010137"),
                                        ),
                            ),

                //pcik up
                "1107" => array("e"=>array("IMP" => array("+"=>"412010101", "-"=>"521010138"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010138"),
                                         ),
                              "n"=>array("IMP" => array("+"=>"412010101", "-"=>"521010137"),
                                         "EXP" => array("+"=>"412010201", "-"=>"521010137"),
                                         ),
                            ),

                //seguro de carga
                "1251" => array("e"=>array("IMP" => array("+"=>"521010148", "-"=>"521010148"),
                                         "EXP" => array("+"=>"521010148", "-"=>"521010148"),
                                         ),
                              "n"=>array("IMP" => array("+"=>"521010148", "-"=>"521010148"),
                                         "EXP" => array("+"=>"521010148", "-"=>"521010148"),
                                         ),
                            )
);