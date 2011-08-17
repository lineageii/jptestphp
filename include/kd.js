var onecount;
onecount=0;
    
subcat = new Array();

subcat[0]= new Array("北京外国语大学考试中心","北京","1","2","","","");
subcat[1]= new Array("清华大学外语系","北京","","","3","4","5");
subcat[2]= new Array("北京语言大学国外考试中心","北京","1","2","","","");
subcat[3]= new Array("北京师范大学国外考试中心","北京","1","2","3","","");
subcat[4]= new Array("北京第二外国语学院","北京","1","2","3","4","5");
subcat[5]= new Array("北京大学国外考试中心","北京","1","2","","3","");
subcat[6]= new Array("北京工商大学","北京","1","2","3","4","5");
subcat[7]= new Array("北京市教育考试指导中心","北京","","2","","","");

subcat[8]= new Array("上海外国语大学海外考试中心","上海","1","2","3","","");
subcat[9]= new Array("华东师范大学国外考试中心","上海","1","2","3","","");
subcat[10]= new Array("上海海事大学考试中心","上海","1","2","3","4","5");
subcat[11]= new Array("华东理工大学考试中心","上海","1","2","3","4","5");
subcat[12]= new Array("上海交通大学外国语学院","上海","1","2","3","4","");
subcat[13]= new Array("上海同济大学","上海","1","2","","","");
subcat[14]= new Array("上海大学海外考试中心","上海","1","2","3","","");
subcat[15]= new Array("上海财经大学","上海","1","2","","","");
subcat[16]= new Array("东华大学外语学院","上海","1","2","","","");
subcat[17]= new Array("上海师范大学","上海","1","2","3","4","");

subcat[18]	= new Array("吉林大学考试中心","吉林","1","2","3","4","5");                                       	
subcat[19]	= new Array("延边大学","吉林","1","2","3","4","5");      
                                         	
subcat[20]	= new Array("大连外国语学院(旅顺校区)","辽宁","1","2","","","");                                	
subcat[21]	= new Array("大连外国语学院(中山校区)","辽宁","","2","3","4","5");                                	
subcat[22]	= new Array("辽宁师范大学教务处考试中心","辽宁","1","2","3","4","5");                           	
subcat[23]	= new Array("大连理工大学外国语学院","辽宁","1","2","3","4","5");                               	
subcat[24]	= new Array("大连大学","辽宁","1","2","3","4","5");                                             	
subcat[25]	= new Array("辽宁大学","辽宁","1","2","3","4","5");                                             	
subcat[26]	= new Array("沈阳师范大学外国语学院","辽宁","1","2","3","4","5");    
                           	
subcat[27]	= new Array("广东外语外贸大学(南校区)","广东","1","2","3","","");                 	
subcat[28]	= new Array("广东外语外贸大学(北校区)","广东","1","2","3","4","5");                 	
subcat[29]	= new Array("华南师范大学","广东","1","2","3","4","");                                         	
subcat[30]	= new Array("中山大学(南校区)","广东","1","","","","");                                      	
subcat[31]	  = new Array("中山大学(东校区)","广东","","2","","","");                                      	
subcat[32]	  = new Array("深圳大学国际考试中心","广东","1","2","","","");                                 	
subcat[33]	  = new Array("深圳职业技术学院","广东","1","2","3","","");   
                                  	
subcat[34]	= new Array("天津外国语学院","天津","1","2","3","4","5");                                         	
subcat[35]	=	new Array("天津大学研究生院国外考试中心","天津","1","2","","","");    
                       
subcat[36]	=	new Array("南开大学","天津","1","2","3","","");     
                                          
subcat[37]	=	new Array("黑龙江大学","黑龙江","1","2","3","4","5");                                   
subcat[38]	=	new Array("西安交通大学外国语学院日语考试中心","陕西","1","2","3","4","5");                     
subcat[39]	=	new Array("西安外国语大学","陕西","1","2","","4","");                                         
subcat[40]	=	new Array("重庆市四川外语学院继教院","重庆","1","2","3","4","5");                               
subcat[41]	=	new Array("山东师范大学(长清校区)","山东","1","2","3","4","5");                             
subcat[42]	=	new Array("中国海洋大学","山东","1","2","3","4","5");                                           
subcat[43]	=	new Array("山东科技职业学院","山东","1","2","3","4","5");                                       
subcat[44]	=	new Array("华中科技大学外语考试中心","湖北","1","2","3","","");                               
subcat[45]	=	new Array("武汉大学考试中心","湖北","1","2","3","4","5");                                       
subcat[46]	=	new Array("厦门大学日本语能力测试考试中心","福建","1","2","3","",""); 
                        
subcat[47]	=	new Array("浙江工商大学(文晖路)","浙江","","","","","");                        
subcat[48]	=	new Array("浙江大学(紫金港校区)","浙江","1","2","3","4","5");                                    
subcat[49]	=	new Array("浙江工商大学(教工路校区)","浙江","","2","","","");                    
subcat[50]	=	new Array("浙江省教育考试院服务中心(文晖路)","浙江","","2","","","");                        
subcat[51]	=	new Array("浙江工商大学(下沙校区)","浙江","1","","","","");  
subcat[52]	=	new Array("浙江省教育考试院服务中心(学院路)","浙江","1","","","","");  
subcat[53]	=	new Array("宁波大学","浙江","1","2","3","4","5");                                 
subcat[54]	=	new Array("内蒙古中日友好语言培训中心","内蒙古","1","2","3","4","5");              
subcat[55]	=	new Array("解放军外国语学院","河南","1","2","3","4","5");            
subcat[56]	=	new Array("苏州大学","江苏","1","2","3","4","5");                                  
subcat[57]	=	new Array("苏州科技学院","江苏","1","2","3","4","5");                              
subcat[58]	=	new Array("东南大学外国语学院","江苏","1","2","3","4","5");                        
subcat[59]	=   new Array("南京大学国外考试中心","江苏","1","2","3","","");                      
subcat[60]	=   new Array("南京师范大学外国语学院(随园校区)","江苏","1","2","","","");           
subcat[61]	=   new Array("南京师范大学外国语学院(紫金校区)","江苏","","","3","4","");           
subcat[62]	=   new Array("江南大学外国语学院","江苏","1","2","3","4","5");                        
subcat[63]	=	new Array("扬州大学","江苏","1","2","3","4","5");                                   
subcat[64]	=	new Array("湖南大学教务处考试中心","湖南","1","2","3","4","5");                    
subcat[65]	=	new Array("四川大学","四川","1","2","3","4","5");                
subcat[66]	=	new Array("成都信息工程学院外国语学院","四川","","2","3","","");                
subcat[67]	=	new Array("中国科学技术大学外语系","安徽","1","2","3","4","5");                    
subcat[68]	=	new Array("南昌大学外国语学院","江西","1","2","3","4","5");                        
subcat[69]	=	new Array("河北师范大学外国语学院","河北","1","2","3","4","5");                    
subcat[70]	=	new Array("保定市剑桥英语学校","河北","1","2","3","4","5");                        
subcat[71]	=	new Array("山西大学","山西","1","2","3","4","5");                          
subcat[72]	=	new Array("贵州大学外国语学院","贵州","1","2","3","4","5");                        
subcat[73]	=	new Array("新疆大学外国语学院","新疆","1","2","3","4","5");                        
subcat[74]	=	new Array("广西大学国外考试中心","广西","1","2","3","4","5");                      
subcat[75]	=	new Array("云南师范大学","云南","1","2","3","4","5");                              
subcat[76]	=	new Array("海南大学","海南","1","2","3","4","5");                                  
subcat[77]	=	new Array("兰州大学","甘肃","1","2","3","4","5");          


subcat[78]= new Array("首都师范大学","北京","1","2","","","");
subcat[79]= new Array("南通大学","江苏","1","2","3","4","5");
subcat[80]= new Array("无锡科技职业学院","江苏","1","2","","","");
subcat[81]= new Array("福建省自学考试办公室自学指导中心","福建","1","2","3","","");
subcat[82]= new Array("青海省小岛文化教育发展基地","青海","1","2","3","4","5");
subcat[83]	=	new Array("山东师范大学(校本部)","山东","1","2","3","4","5");                             
                    


onecount=84;


function changelocation(formid,locationid,level)
    {
    form=$(formid);
    form.selectCity1.length = 0; 
    form.selectCity2.length = 0; 
    form.selectCity3.length = 0; 
    

    var locationid=locationid;
    var i,j;
    
    form.selectCity2.options[0] = new Option('无','');
    form.selectCity3.options[0] = new Option('无','');
    
    for (i=0,j=0;i < onecount; i++)
        {
        	// 以选择的省 和 级别，对数组进行遍历，从而设置下拉框
            if (
               subcat[i][1] == locationid &&             
               (subcat[i][2] == level || 
                subcat[i][3] == level || 
                subcat[i][4] == level || 
                subcat[i][5] == level || 
                subcat[i][6] == level 
               )
              )

			//创建下拉列表
            { 
            
            	form.selectCity1.options[form.selectCity1.length] = new Option(subcat[i][0], subcat[i][0]);
            	form.selectCity2.options[form.selectCity2.length] = new Option(subcat[i][0], subcat[i][0]);
				form.selectCity3.options[form.selectCity3.length] = new Option(subcat[i][0], subcat[i][0]);
				
				//该省考点数递加
				j++;
            } 
            
			//如果该省考点数只有1个
       		if (j==1) {
				//默认选中第一个
       			form.selectCity1.options[0].selected = true;
       			
       		} else if (j==2){
				//如果2个，选中第二个
       			form.selectCity2.options[2].selected = true;
       		
       		}
       		
        }
        
    }    
