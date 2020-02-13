% Autor:
% Fecha: 11/02/2020

es_un_sintoma(pitidos_cortos_continuos).
es_un_sintoma(un_pitido_largo_y_dos_cortos).
es_un_sintoma(dos_pitidos_largos_y_uno_corto).
es_un_sintoma(seis_pitidos_cortos).
sintoma_de(pitidos_cortos_continuos,placa_base_esta_defectuosa_o_deteriorada).
sintoma_de(un_pitido_largo_y_dos_cortos,error_en_la_tarjeta_grafica).
sintoma_de(dos_pitidos_largo_y_uno_corto,error_en_la_sincronizacion_de_la_imagenes).
sintoma_de(seis_pitidos_cortos,error_en_el_teclado).
problema_de(X,Y):-es_un_sintoma(X),sintoma_de(X,Y).