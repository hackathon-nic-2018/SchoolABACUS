
CREATE TABLE `colegios` (
  `colegio_id` int(11) NOT NULL AUTO_INCREMENT,
  `colegio_nombre` varchar(100) DEFAULT NULL,
  `activo` tinyint(4) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `direccion_linea1` vacurso_asignaturasdocentesasignaturas_gradosrchar(250) DEFAULT NULL,
  `direccion_linea2` varchar(250) DEFAULT NULL,
  `telefonos` varchar(45) DEFAULT NULL,
  `sitio_web` varchar(100) DEFAULT NULL,
  `correo_oficial` varchar(100) DEFAULT NULL,
  `fondo` varchar(250) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`colegio_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

CREATE TABLE `usuarios` (
  `usuario` varchar(100) NOT NULL,
  `usuario_nombre` varchar(100) NOT NULL,
  `clave` varchar(250) NOT NULL,
  `tipo_usuario` varchar(1) NOT NULL,
  `usuario_correo` varchar(100) NOT NULL,
  `activo` varchar(1) NOT NULL,
  `colegio_id` int(11) NOT NULL,
  PRIMARY KEY (`usuario`),
  KEY `colegio_id` (`colegio_id`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `tipo_grados` (
  `colegio_id` int(11) NOT NULL,
  `tipo_grado_id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`colegio_id`,`tipo_grado_id`),
  CONSTRAINT `tipo_grados_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `grados` (
  `colegio_id` int(11) NOT NULL,
  `grado_id` int(11) NOT NULL,
  `grado_nombre` varchar(100) NOT NULL,
  `tipo_grado_id` int(11) NOT NULL,
  `actualiza_estudiante` varchar(1) NOT NULL,
  PRIMARY KEY (`colegio_id`,`grado_id`),
  KEY `colegio_id` (`colegio_id`,`tipo_grado_id`),
  CONSTRAINT `grados_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`),
  CONSTRAINT `grados_ibfk_2` FOREIGN KEY (`colegio_id`, `tipo_grado_id`) REFERENCES `tipo_grados` (`colegio_id`, `tipo_grado_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `especialidades` (
  `colegio_id` int(11) NOT NULL,
  `especialidad_id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`colegio_id`,`especialidad_id`),
  CONSTRAINT `especialidades_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `asignaturas` (
  `colegio_id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `descripcion_detallada` longtext NOT NULL,
  `especialidad_id` int(11) NOT NULL,
  `reportar_gobierno` varchar(1) DEFAULT NULL,
  `tipo_calificacion_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`colegio_id`,`asignatura_id`),
  KEY `colegio_id` (`colegio_id`),
  KEY `colegio_id_2` (`colegio_id`,`especialidad_id`),
  CONSTRAINT `asignaturas_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`),
  CONSTRAINT `asignaturas_ibfk_2` FOREIGN KEY (`colegio_id`, `especialidad_id`) REFERENCES `especialidades` (`colegio_id`, `especialidad_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `tipo_calificaciones` (
  `colegio_id` int(11) NOT NULL,
  `tipo_calificacion_id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`colegio_id`,`tipo_calificacion_id`),
  CONSTRAINT `tipo_calificaciones_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `asignaturas_grados` (
  `colegio_id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `grado_id` int(11) NOT NULL,
  PRIMARY KEY (`colegio_id`,`asignatura_id`,`grado_id`),
  KEY `colegio_id` (`colegio_id`,`grado_id`),
  KEY `colegio_id_2` (`colegio_id`),
  CONSTRAINT `asignaturas_grados_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`),
  CONSTRAINT `asignaturas_grados_ibfk_2` FOREIGN KEY (`colegio_id`, `asignatura_id`) REFERENCES `asignaturas` (`colegio_id`, `asignatura_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `asignaturas_grados_ibfk_3` FOREIGN KEY (`colegio_id`, `grado_id`) REFERENCES `grados` (`colegio_id`, `grado_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `asignaturas_grados_ibfk_4` FOREIGN KEY (`colegio_id`) REFERENCES `tipo_calificaciones` (`colegio_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `turnos` (
  `colegio_id` int(11) NOT NULL,
  `turno_id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`colegio_id`,`turno_id`),
  CONSTRAINT `turnos_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `tipo_calificaciones_detalle` (
  `colegio_id` int(11) NOT NULL,
  `tipo_calificacion_id` int(11) NOT NULL,
  `linea` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `calificacion_maxima` decimal(18,2) NOT NULL,
  PRIMARY KEY (`colegio_id`,`tipo_calificacion_id`,`linea`),
  CONSTRAINT `tipo_calificaciones_detalle_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`),
  CONSTRAINT `tipo_calificaciones_detalle_ibfk_2` FOREIGN KEY (`colegio_id`, `tipo_calificacion_id`) REFERENCES `tipo_calificaciones` (`colegio_id`, `tipo_calificacion_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tipo_calificaciones_detalle_ibfk_3` FOREIGN KEY (`colegio_id`, `tipo_calificacion_id`) REFERENCES `tipo_calificaciones` (`colegio_id`, `tipo_calificacion_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `tipo_calificaciones_niveles` (
  `colegio_id` int(11) NOT NULL,
  `tipo_calificacion_id` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `abreviacion` varchar(10) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `minimo` decimal(18,2) NOT NULL,
  `maximo` decimal(18,2) NOT NULL,
  `color` varchar(10) NOT NULL,
  PRIMARY KEY (`colegio_id`,`tipo_calificacion_id`,`nivel`),
  CONSTRAINT `tipo_calificaciones_niveles_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`),
  CONSTRAINT `tipo_calificaciones_niveles_ibfk_2` FOREIGN KEY (`colegio_id`, `tipo_calificacion_id`) REFERENCES `tipo_calificaciones` (`colegio_id`, `tipo_calificacion_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `estatus_estudiantes` (
  `colegio_id` int(11) NOT NULL,
  `estatus_id` varchar(4) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`colegio_id`,`estatus_id`),
  CONSTRAINT `estatus_estudiantes_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `estudiantes` (
  `colegio_id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `codigo_estudiante` varchar(15) NOT NULL,
  `numero_carnet` varchar(15) NOT NULL,
  `estatus` varchar(4) NOT NULL,
  `primer_apellido` varchar(50) NOT NULL,
  `segundo_apellido` varchar(50) DEFAULT NULL,
  `nombres` varchar(70) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `grado_id` int(11) NOT NULL,
  `direccion_linea1` varchar(250) DEFAULT NULL,
  `direccion_linea2` varchar(250) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `fotografia` blob,
  `nombre_padre` varchar(250) DEFAULT NULL,
  `nombre_madre` varchar(250) DEFAULT NULL,
  `comentarios` longtext,
  PRIMARY KEY (`colegio_id`,`estudiante_id`),
  KEY `colegio_id` (`colegio_id`,`estatus`),
  CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`),
  CONSTRAINT `estudiantes_ibfk_2` FOREIGN KEY (`colegio_id`, `estatus`) REFERENCES `estatus_estudiantes` (`colegio_id`, `estatus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `estatus_docentes` (
  `colegio_id` int(11) NOT NULL,
  `estatus_id` varchar(4) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`colegio_id`,`estatus_id`),
  CONSTRAINT `estatus_docentes_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `padres` (
  `colegio_id` int(11) NOT NULL,
  `padre_id` int(11) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `identificacion` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `fotografia` blob NOT NULL,
  `direccion_linea1` varchar(250) NOT NULL,
  `direccion_linea2` varchar(250) NOT NULL,
  `comentarios` longtext NOT NULL,
  PRIMARY KEY (`colegio_id`,`padre_id`),
  CONSTRAINT `padres_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `padres_estudiantes` (
  `colegio_id` int(11) NOT NULL,
  `padre_id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `llamar_emergencia` varchar(1) NOT NULL,
  `tutor` varchar(1) NOT NULL,
  `patrocinador` varchar(1) NOT NULL,
  `parentezco` varchar(40) NOT NULL,
  PRIMARY KEY (`colegio_id`,`padre_id`,`estudiante_id`),
  KEY `colegio_id` (`colegio_id`,`estudiante_id`),
  CONSTRAINT `padres_estudiantes_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`),
  CONSTRAINT `padres_estudiantes_ibfk_2` FOREIGN KEY (`colegio_id`, `estudiante_id`) REFERENCES `estudiantes` (`colegio_id`, `estudiante_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `padres_estudiantes_ibfk_3` FOREIGN KEY (`colegio_id`, `padre_id`) REFERENCES `padres` (`colegio_id`, `padre_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `docentes` (
  `colegio_id` int(11) NOT NULL,
  `docente_id` int(11) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `identificacion` varchar(20) DEFAULT NULL,
  `fecha_ingreso` date NOT NULL,
  `estatus` varchar(4) NOT NULL,
  `especialidad_id` varchar(250) DEFAULT NULL,
  `direccion_linea1` varchar(250) DEFAULT NULL,
  `direccion_linea2` varchar(250) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `comentarios` longtext,
  `fotografia` blob,
  PRIMARY KEY (`colegio_id`,`docente_id`),
  CONSTRAINT `docentes_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `tipo_periodo` (
  `colegio_id` int(11) NOT NULL,
  `tipo_periodo_id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`colegio_id`,`tipo_periodo_id`),
  CONSTRAINT `tipo_periodo_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `estatus_periodos` (
  `colegio_id` int(11) NOT NULL,
  `estatus_id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`colegio_id`,`estatus_id`),
  CONSTRAINT `estatus_periodos_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `periodos_lectivo` (
  `colegio_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `tipo_periodo_id` int(11) NOT NULL,
  `periodo_descripcion` varchar(100) NOT NULL,
  `estatus_id` int(11) NOT NULL,
  PRIMARY KEY (`colegio_id`,`periodo_id`),
  KEY `colegio_id` (`colegio_id`,`estatus_id`),
  CONSTRAINT `periodos_lectivo_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`),
  CONSTRAINT `periodos_lectivo_ibfk_2` FOREIGN KEY (`colegio_id`, `estatus_id`) REFERENCES `estatus_periodos` (`colegio_id`, `estatus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `cursos` (
  `colegio_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `grado_id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `turno_id` int(11) NOT NULL,
  `docente_guia_id` int(11) NOT NULL,
  `comentarios` longtext NOT NULL,
  `cant_max_alumnos` int(11) NOT NULL,
  PRIMARY KEY (`colegio_id`,`periodo_id`,`curso_id`),
  KEY `colegio_id` (`colegio_id`,`grado_id`),
  KEY `colegio_id_2` (`colegio_id`,`turno_id`),
  CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`),
  CONSTRAINT `cursos_ibfk_2` FOREIGN KEY (`colegio_id`, `periodo_id`) REFERENCES `periodos_lectivo` (`colegio_id`, `periodo_id`),
  CONSTRAINT `cursos_ibfk_4` FOREIGN KEY (`colegio_id`, `grado_id`) REFERENCES `grados` (`colegio_id`, `grado_id`),
  CONSTRAINT `cursos_ibfk_5` FOREIGN KEY (`colegio_id`, `turno_id`) REFERENCES `turnos` (`colegio_id`, `turno_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `curso_asignaturas` (
  `colegio_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `docente_id` int(11) DEFAULT NULL,
  `comentarios` longtext,
  PRIMARY KEY (`colegio_id`,`periodo_id`,`curso_id`,`asignatura_id`),
  CONSTRAINT `curso_asignaturas_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `curso_estudiantes` (
  `colegio_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `estatus` int(11) NOT NULL,
  `numero_lista` int(11) NOT NULL,
  PRIMARY KEY (`colegio_id`,`periodo_id`,`curso_id`,`estudiante_id`),
  CONSTRAINT `curso_estudiantes_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `calificaciones` (
  `colegio_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `tipo_calificacion_id` int(11) DEFAULT NULL,
  `calificacion_final` int(11) DEFAULT NULL,
  `descripcion_1` varchar(100) DEFAULT NULL,
  `calificacion_1` int(11) DEFAULT NULL,
  `calificacion_nivel_1` varchar(10) DEFAULT NULL,
  `publicada_1` int(11) DEFAULT NULL,
  `descripcion_2` varchar(100) DEFAULT NULL,
  `calificacion_2` int(11) DEFAULT NULL,
  `calificacion_nivel_2` varchar(10) DEFAULT NULL,
  `publicada_2` int(11) DEFAULT NULL,
  `descripcion_3` varchar(100) DEFAULT NULL,
  `calificacion_3` int(11) DEFAULT NULL,
  `calificacion_nivel_3` varchar(10) DEFAULT NULL,
  `publicada_3` int(11) DEFAULT NULL,
  `descripcion_4` varchar(100) DEFAULT NULL,
  `calificacion_4` int(11) DEFAULT NULL,
  `calificacion_nivel_4` varchar(10) DEFAULT NULL,
  `publicada_4` int(11) DEFAULT NULL,
  `descripcion_5` varchar(100) DEFAULT NULL,
  `calificacion_5` int(11) DEFAULT NULL,
  `calificacion_nivel_5` varchar(10) DEFAULT NULL,
  `publicada_5` int(11) DEFAULT NULL,
  `descripcion_6` varchar(100) DEFAULT NULL,
  `calificacion_6` int(11) DEFAULT NULL,
  `calificacion_nivel_6` varchar(10) DEFAULT NULL,
  `publicada_6` int(11) DEFAULT NULL,
  `descripcion_7` varchar(100) DEFAULT NULL,
  `calificacion_7` int(11) DEFAULT NULL,
  `calificacion_nivel_7` varchar(10) DEFAULT NULL,
  `publicada_7` int(11) DEFAULT NULL,
  `descripcion_8` varchar(100) DEFAULT NULL,
  `calificacion_8` int(11) DEFAULT NULL,
  `calificacion_nivel_8` varchar(10) DEFAULT NULL,
  `publicada_8` int(11) DEFAULT NULL,
  `descripcion_9` varchar(100) DEFAULT NULL,
  `calificacion_9` int(11) DEFAULT NULL,
  `calificacion_nivel_9` varchar(10) DEFAULT NULL,
  `publicada_9` int(11) DEFAULT NULL,
  PRIMARY KEY (`colegio_id`,`periodo_id`,`curso_id`,`estudiante_id`,`asignatura_id`),
  CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `calificaciones_detalle` (
  `colegio_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `calificacion_id` int(11) NOT NULL,
  `linea` int(11) NOT NULL,
  `calificacion` int(11) DEFAULT NULL,
  `archivo` blob,
  PRIMARY KEY (`colegio_id`,`periodo_id`,`curso_id`,`estudiante_id`,`asignatura_id`,`calificacion_id`,`linea`),
  CONSTRAINT `calificaciones_detalle_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `curso_asignatura_detalles` (
  `colegio_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `calificacion_id` int(11) NOT NULL,
  `linea` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `calificacion_maxima` int(11) NOT NULL,
  PRIMARY KEY (`colegio_id`,`periodo_id`,`curso_id`,`asignatura_id`,`calificacion_id`,`linea`),
  CONSTRAINT `curso_asignatura_detalles_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `curso_asignatura_asignaciones` (
  `colegio_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `asignacion_id` int(11) NOT NULL,
  `calificacion_id` int(11) NOT NULL,
  `linea` int(11) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `notas_asignacion` varchar(100) NOT NULL,
  `archivo` blob NOT NULL,
  PRIMARY KEY (`colegio_id`,`periodo_id`,`curso_id`,`asignatura_id`,`asignacion_id`),
  CONSTRAINT `curso_asignatura_asignaciones_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `asistencias` (
  `colegio_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `fecha` int(11) NOT NULL,
  `asistencia` decimal(18,2) NOT NULL,
  PRIMARY KEY (`colegio_id`,`periodo_id`,`curso_id`,`estudiante_id`,`asignatura_id`,`fecha`),
  CONSTRAINT `asistencias_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `notificaciones` (
  `colegio_id` int(11) NOT NULL,
  `notificacion_id` int(11) NOT NULL,
  `enviado_por` varchar(100) NOT NULL,
  `enviado_a` varchar(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `mensaje` longtext,
  `fecha_hora_enviado` datetime DEFAULT NULL,
  `fecha_hora_recibido` datetime DEFAULT NULL,
  PRIMARY KEY (`colegio_id`,`notificacion_id`),
  CONSTRAINT `notificaciones_ibfk_1` FOREIGN KEY (`colegio_id`) REFERENCES `colegios` (`colegio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;







