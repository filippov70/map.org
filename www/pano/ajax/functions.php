<?php 
function FindNextKadr($KadrInfo)
{
    
    $arKadr = array(1,10,50);
    $CountArKadr = count($arKadr);
    for($i = 0; $i < $CountArKadr; $i++)
    {
        $Kadr = $arKadr[$i] - 1;
        
        list($sceneno, $frameno) = explode("_", $KadrInfo);
        ///////////////////Определяем имя серии//////////////////////////////////////
        $QueryScenoName = "SELECT file_name, lat, lon, position, title  
                            FROM pgr_file, pano 
                            WHERE id = $sceneno AND frame_no = $frameno AND pano.pgr_file = pgr_file.id";							
        $ResultScenoName = DB::query($QueryScenoName); 
        if($SetScenoName = DB::fetchAssoc($ResultScenoName))
        {
            $ScenoName = $SetScenoName["file_name"];  
            $LatOfCurrentKadr = $SetScenoName["lat"];
            $LonOfCurrentKadr = $SetScenoName["lon"]; 
            $PiketOfCurrentKadr = $SetScenoName["position"];
            $TitleOfCurrentKadr = $SetScenoName["title"];
        }
        ///////////////////////////////////////////////////////////////////////////////        
        $ScenenoPrev = $sceneno;
        $ScenenoNext = $sceneno;
        $QueryNF = "SELECT frame_no AS nextframe FROM pano
                    WHERE frame_no > $frameno AND pgr_file = $ScenenoNext
                    ORDER BY frame_no ASC
                    LIMIT 1 OFFSET $Kadr"; 
		$ResultNF = DB::query($QueryNF); 
        if($SetNF = DB::fetchAssoc($ResultNF)){//Если есть следующий кадр в текущей серии
            $next_frameno = $SetNF["nextframe"];
		}
        else //если нет следующего, то ищем ближайший кадр в др. сериях
        {
            /////////////////Определяем кол-во недостающих кадров в ближайшей серии/////////////
            $Query = "SELECT frame_no AS nextframe FROM pano
                    WHERE frame_no > $frameno AND pgr_file = $ScenenoNext
                    ORDER BY frame_no ASC
                    LIMIT $Kadr";	
			$Result = DB::query($Query); 
            $NumRows = DB::numRows($Result);
            $Diff = $Kadr - $NumRows;
            /////////////////////////////////////////////////////////////////
            $QueryPoint = "SELECT lat, lon FROM pano WHERE pgr_file = $ScenenoNext AND frame_no = $frameno";
            $ResultPoint = DB::query($QueryPoint);   
            if($SetPoint = DB::fetchAssoc($ResultPoint))			
            {
                $Lat = $SetPoint["lat"]; // определяем координаты граничной точки
                $Lon = $SetPoint["lon"]; //
            }
            /////////Ищем ближайшую точку в др серии, определяем серию и номер следующей точки/////////
            $QueryNextScen = "SELECT frame_no, pgr_file,  SQRT(POW($Lon-lon,2)+POW($Lat-lat,2)) AS distance 
                            FROM pano, pgr_file 
                            WHERE pano.pgr_file <> $ScenenoNext  AND pgr_file.direction = 1 AND pano.pgr_file = pgr_file.id
                            ORDER BY distance ASC                             
							LIMIT 1 OFFSET $Diff ";			
            $ResultNextScen = DB::query($QueryNextScen);   
            if($SetNextScen = DB::fetchAssoc($ResultNextScen))			
            {
                $next_frameno = $SetNextScen["frame_no"];
                $ScenenoNext = $SetNextScen["pgr_file"];
                $DistNext = $SetNextScen["distance"];
            }
        }
        /////////////////////////////////////////////////////////////////////////////////
        ////////////////////////Поиск предыдущего кадра в серии из БД////////////////////
        /////////////////////////////////////////////////////////////////////////////////
        $QueryPF = "SELECT frame_no AS prevframe 
                    FROM pano
                    WHERE frame_no < $frameno AND pgr_file = $ScenenoPrev
                    ORDER BY frame_no DESC
                    LIMIT 1 OFFSET $Kadr";			
        $ResultPF = DB::query($QueryPF);   
        if($SetPF = DB::fetchAssoc($ResultPF))		
            $prev_frameno = $SetPF["prevframe"];
        else //если нет, то ищем ближайший кадр в др. сериях
        {
            /////////////////Определяем кол-во недостающих кадров/////////////
            $Query = "SELECT frame_no AS prevframe 
                      FROM pano
                      WHERE frame_no < $frameno AND pgr_file = $ScenenoPrev
                      ORDER BY frame_no DESC
                      LIMIT $Kadr";				  
            $Result = DB::query($Query); 
            $NumRows = DB::numRows($Result);			
            $Diff = $Kadr - $NumRows;            
            //////////////////////////////////////////////////////////////////
            
            $QueryPointP = "SELECT lat, lon FROM pano WHERE pgr_file = $ScenenoPrev AND frame_no = $frameno";			
            $ResultPointP = DB::query($QueryPointP);   
            if($SetPointP = DB::fetchAssoc($ResultPointP))			
            {
                $Lat = $SetPointP["lat"];
                $Lon = $SetPointP["lon"];
            }
            $QueryPrevScen = "SELECT frame_no, pgr_file,  SQRT(POW($Lon-lon,2)+POW($Lat-lat,2)) AS distance 
                            FROM pano, pgr_file 
                            WHERE pano.pgr_file <> $ScenenoPrev  AND pgr_file.direction = 1 AND pano.pgr_file = pgr_file.id
                            ORDER BY distance
                            LIMIT 1 OFFSET $Diff";							
            $ResultPrevScen = DB::query($QueryPrevScen);   
            if($SetPrevScen = DB::fetchAssoc($ResultPrevScen))			
            {
                $prev_frameno = $SetPrevScen["frame_no"];
                $ScenenoPrev = $SetPrevScen["pgr_file"];
                $DistPrev = $SetPrevScen["distance"];
            }
        }
        /////////////////////////////////////////////////////////////////////////////////
        /////////////////////////Поиск максимального кадра в серии из БД///////////////
        /////////////////////////////////////////////////////////////////////////////////
        $QueryMF = "SELECT MAX(frame_no) AS maxframe, MIN(frame_no) AS minframe FROM pano WHERE pgr_file = $sceneno";		
        $ResultMF = DB::query($QueryMF);   
        if($SetMF = DB::fetchAssoc($ResultMF))
        {
            $MaxFrame = $SetMF["maxframe"];
            $MinFrame = $SetMF["minframe"];
        } 
        ////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////
		$next_frameno = str_pad($next_frameno, 6, "0", STR_PAD_LEFT);
		$prev_frameno = str_pad($prev_frameno, 6, "0", STR_PAD_LEFT);
                
                $arNextKadrInfo['next_frameno'][$i] = $next_frameno;   
                $arNextKadrInfo['prev_frameno'][$i] = $prev_frameno;    
                $arNextKadrInfo['ScenenoPrev'][$i] = $ScenenoPrev; 
                $arNextKadrInfo['ScenenoNext'][$i] = $ScenenoNext;
                $arNextKadrInfo['LatOfCurrentKadr'] = $LatOfCurrentKadr;
                $arNextKadrInfo['LonOfCurrentKadr'] = $LonOfCurrentKadr; 
                $arNextKadrInfo['PiketOfCurrentKadr'] = $PiketOfCurrentKadr;
                $arNextKadrInfo['TitleOfCurrentKadr'] = $TitleOfCurrentKadr;
                $arNextKadrInfo['ScenenoOfCurrentKadr'] = $sceneno;
                
        /////////////////////////////////////////////////////////////////////////////////
    }
$arNextKadrInfo['ScenoName'] = $ScenoName;

return $arNextKadrInfo;
}

?>