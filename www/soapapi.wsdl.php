<?php header("Content-Type: text/xml; charset=utf-8");
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>"; ?>
<definitions xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/"
             xmlns:soapenc="http://schemas.xmlsoap.org/soap/encoding/"
             xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
             xmlns:mime="http://schemas.xmlsoap.org/wsdl/mime/"
             xmlns:tns="http://localhost/"
             xmlns:xs="http://www.w3.org/2001/XMLSchema"
             xmlns:soap12="http://schemas.xmlsoap.org/wsdl/soap12/"
             xmlns:http="http://schemas.xmlsoap.org/wsdl/http/"
             name="MyServiceWsdl"
             xmlns="http://schemas.xmlsoap.org/wsdl/"
			 targetNamespace="http://localhost/">
	<!-- Типы данных, используемые в качестве аргументов и возвращаемых значений -->
	<types>
		<xs:schema elementFormDefault="qualified"
                   xmlns:tns="http://localhost/"
                   xmlns:xs="http://www.w3.org/2001/XMLSchema"
                   targetNamespace="http://localhost/">	
				    <!-- ========== Методы управления сотрудниками (People,Person)========== -->
					<!--Метод CreatePerson-->
					<xs:element name="CreatePerson_Request">					
						<xs:complexType>
							<!--Объявление формата аргументов сервиса-->
							<xs:sequence>
								<xs:element name="Name" type="xs:string" minOccurs="1" maxOccurs="1"/>
								<xs:element name="Age" type="xs:int" minOccurs="1" maxOccurs="1"/>
								<xs:element name="Mail" type="xs:string" minOccurs="1" maxOccurs="1"/>
								<xs:element name="LanguageID" type="xs:int" minOccurs="1" maxOccurs="1"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<xs:element name="CreatePerson_Response">					
						<xs:complexType>
							<!--Объявление формата возвращаемого значения-->
							<xs:sequence>
								<xs:element name="state" type="xs:boolean" minOccurs="1" maxOccurs="1"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<!--Метод ListPeople-->
					<xs:element name="ListPeople_Request">					
						<xs:complexType>
							<!--Объявление формата аргументов сервиса-->
						</xs:complexType>
					</xs:element>
					<xs:element name="ListPeople_Response">					
						<xs:complexType>
							<!--Объявление формата возвращаемого значения-->
							<xs:sequence>
								<xs:element name="Person" type="tns:SOAP_Person" minOccurs="1" maxOccurs="unbounded"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<xs:complexType name="SOAP_Person">
						<xs:sequence>
							<xs:element name="ID" type="xs:int" minOccurs="1" maxOccurs="1"/>
							<xs:element name="Name" type="xs:string" minOccurs="1" maxOccurs="1"/>
							<xs:element name="Age" type="xs:int" minOccurs="1" maxOccurs="1"/>
							<xs:element name="Mail" type="xs:string" minOccurs="1" maxOccurs="1"/>
							<xs:element name="LanguageID" type="xs:int" minOccurs="1" maxOccurs="1"/>
							<xs:element name="Language" type="xs:string" minOccurs="0" maxOccurs="1"/>							
						</xs:sequence>
					</xs:complexType>
					<!--Метод ReadLanguage-->
					<xs:element name="ReadPerson_Request">					
						<xs:complexType>
							<!--Объявление формата аргументов сервиса-->
							<xs:sequence>
								<xs:element name="ID" type="xs:int" minOccurs="1" maxOccurs="1"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<xs:element name="ReadPerson_Response">					
						<xs:complexType>
							<!--Объявление формата возвращаемого значения-->
							<xs:sequence>
								<xs:element name="Person" type="tns:SOAP_Person" minOccurs="1" maxOccurs="1"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<!--Метод UpdatePerson-->
					<xs:element name="UpdatePerson_Request">					
						<xs:complexType>
							<!--Объявление формата аргументов сервиса-->
							<xs:sequence>
								<xs:element name="ID" type="xs:int" minOccurs="1" maxOccurs="1"/>
								<xs:element name="Name" type="xs:string" minOccurs="1" maxOccurs="1"/>
								<xs:element name="Age" type="xs:int" minOccurs="1" maxOccurs="1"/>
								<xs:element name="Mail" type="xs:string" minOccurs="1" maxOccurs="1"/>
								<xs:element name="LanguageID" type="xs:int" minOccurs="1" maxOccurs="1"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<xs:element name="UpdatePerson_Response">					
						<xs:complexType>
							<!--Объявление формата возвращаемого значения-->
							<xs:sequence>
								<xs:element name="state" type="xs:boolean" minOccurs="1" maxOccurs="1"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<!--Метод DeletePerson-->
					<xs:element name="DeletePerson_Request">					
						<xs:complexType>
							<!--Объявление формата аргументов сервиса-->
							<xs:sequence>
								<xs:element name="ID" type="xs:int" minOccurs="1" maxOccurs="1"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<xs:element name="DeletePerson_Response">					
						<xs:complexType>
							<!--Объявление формата возвращаемого значения-->
							<xs:sequence>
								<xs:element name="state" type="xs:boolean" minOccurs="1" maxOccurs="1"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
				    <!-- ========== Методы управления языками (Languages)========== -->
					<!--Метод ListLanguages-->
				    <xs:element name="ListLanguages_Request">					
						<xs:complexType>
							<!--Объявление формата аргументов сервиса-->
						</xs:complexType>
					</xs:element>
					<xs:element name="ListLanguages_Response">					
						<xs:complexType>
							<!--Объявление формата возвращаемого значения-->
							<xs:sequence>
								<xs:element name="Language" type="tns:SOAP_Language" minOccurs="1" maxOccurs="unbounded"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<xs:complexType name="SOAP_Language">
						<xs:sequence>
							<xs:element name="ID" type="xs:int" minOccurs="1" maxOccurs="1"/>
							<xs:element name="Name" type="xs:string" minOccurs="1" maxOccurs="1"/>
						</xs:sequence>
					</xs:complexType>
					<!--Метод CreateLanguage-->
					<xs:element name="CreateLanguage_Request">					
						<xs:complexType>
							<!--Объявление формата аргументов сервиса-->
							<xs:sequence>
								<xs:element name="Name" type="xs:string" minOccurs="1" maxOccurs="1"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<xs:element name="CreateLanguage_Response">					
						<xs:complexType>
							<!--Объявление формата возвращаемого значения-->
							<xs:sequence>
								<xs:element name="state" type="xs:boolean" minOccurs="1" maxOccurs="1"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>					
					<!--Метод ReadLanguage-->
					<xs:element name="ReadLanguage_Request">					
						<xs:complexType>
							<!--Объявление формата аргументов сервиса-->
							<xs:sequence>
								<xs:element name="ID" type="xs:int" minOccurs="1" maxOccurs="1"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<xs:element name="ReadLanguage_Response">					
						<xs:complexType>
							<!--Объявление формата возвращаемого значения-->
							<xs:sequence>
								<xs:element name="Language" type="tns:SOAP_Language" minOccurs="1" maxOccurs="1"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<!--Метод UpdateLanguage-->
					<xs:element name="UpdateLanguage_Request">					
						<xs:complexType>
							<!--Объявление формата аргументов сервиса-->
							<xs:sequence>
								<xs:element name="ID" type="xs:int" minOccurs="1" maxOccurs="1"/>
								<xs:element name="Name" type="xs:string" minOccurs="1" maxOccurs="1"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<xs:element name="UpdateLanguage_Response">					
						<xs:complexType>
							<!--Объявление формата возвращаемого значения-->
							<xs:sequence>
								<xs:element name="state" type="xs:boolean" minOccurs="1" maxOccurs="1"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<!--Метод DeleteLanguage-->
					<xs:element name="DeleteLanguage_Request">					
						<xs:complexType>
							<!--Объявление формата аргументов сервиса-->
							<xs:sequence>
								<xs:element name="ID" type="xs:int" minOccurs="1" maxOccurs="1"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<xs:element name="DeleteLanguage_Response">					
						<xs:complexType>
							<!--Объявление формата возвращаемого значения-->
							<xs:sequence>
								<xs:element name="state" type="xs:boolean" minOccurs="1" maxOccurs="1"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
		 </xs:schema>
	</types>
	<!-- Сообщения процедуры  -->
	<message name="CreatePerson_RequestMessage">
        <part name="parameters" element="tns:CreatePerson_Request" />
    </message>
    <message name="CreatePerson_ResponseMessage">
        <part name="parameters" element="tns:CreatePerson_Response" />
    </message>
	
	<message name="ListPeople_RequestMessage">
        <part name="parameters" element="tns:ListPeople_Request" />
    </message>
    <message name="ListPeople_ResponseMessage">
        <part name="parameters" element="tns:ListPeople_Response" />
    </message>
	
	<message name="ReadPerson_RequestMessage">
        <part name="parameters" element="tns:ReadPerson_Request" />
    </message>
    <message name="ReadPerson_ResponseMessage">
        <part name="parameters" element="tns:ReadPerson_Response" />
    </message>

	<message name="UpdatePerson_RequestMessage">
        <part name="parameters" element="tns:UpdatePerson_Request" />
    </message>
    <message name="UpdatePerson_ResponseMessage">
        <part name="parameters" element="tns:UpdatePerson_Response" />
    </message>
	
	<message name="DeletePerson_RequestMessage">
        <part name="parameters" element="tns:DeletePerson_Request" />
    </message>
    <message name="DeletePerson_ResponseMessage">
        <part name="parameters" element="tns:DeletePerson_Response" />
    </message>
	
    <message name="ListLanguages_RequestMessage">
        <part name="parameters" element="tns:ListLanguages_Request" />
    </message>
    <message name="ListLanguages_ResponseMessage">
        <part name="parameters" element="tns:ListLanguages_Response" />
    </message>

	<message name="CreateLanguage_RequestMessage">
        <part name="parameters" element="tns:CreateLanguage_Request" />
    </message>
    <message name="CreateLanguage_ResponseMessage">
        <part name="parameters" element="tns:CreateLanguage_Response" />
    </message>

	<message name="ReadLanguage_RequestMessage">
        <part name="parameters" element="tns:ReadLanguage_Request" />
    </message>
    <message name="ReadLanguage_ResponseMessage">
        <part name="parameters" element="tns:ReadLanguage_Response" />
    </message>

	<message name="UpdateLanguage_RequestMessage">
        <part name="parameters" element="tns:UpdateLanguage_Request" />
    </message>
    <message name="UpdateLanguage_ResponseMessage">
        <part name="parameters" element="tns:UpdateLanguage_Response" />
    </message>
	
	<message name="DeleteLanguage_RequestMessage">
        <part name="parameters" element="tns:DeleteLanguage_Request" />
    </message>
    <message name="DeleteLanguage_ResponseMessage">
        <part name="parameters" element="tns:DeleteLanguage_Response" />
    </message>
	
	 <!-- Привязка процедуры к сообщениям -->
    <portType name="MyServicePortType">
		<operation name="CreatePerson">
            <input message="tns:CreatePerson_RequestMessage" />
            <output message="tns:CreatePerson_ResponseMessage" />
        </operation>
		
		<operation name="ListPeople">
            <input message="tns:ListPeople_RequestMessage" />
            <output message="tns:ListPeople_ResponseMessage" />
        </operation>
		
		<operation name="ReadPerson">
            <input message="tns:ReadPerson_RequestMessage" />
            <output message="tns:ReadPerson_ResponseMessage" />
        </operation>
		
		<operation name="UpdatePerson">
            <input message="tns:UpdatePerson_RequestMessage" />
            <output message="tns:UpdatePerson_ResponseMessage" />
        </operation>
		
		<operation name="DeletePerson">
            <input message="tns:DeletePerson_RequestMessage" />
            <output message="tns:DeletePerson_ResponseMessage" />
        </operation>
		
        <operation name="ListLanguages">
            <input message="tns:ListLanguages_RequestMessage" />
            <output message="tns:ListLanguages_ResponseMessage" />
        </operation>

		<operation name="CreateLanguage">
            <input message="tns:CreateLanguage_RequestMessage" />
            <output message="tns:CreateLanguage_ResponseMessage" />
        </operation>
		
		<operation name="ReadLanguage">
            <input message="tns:ReadLanguage_RequestMessage" />
            <output message="tns:ReadLanguage_ResponseMessage" />
        </operation>
		
		<operation name="UpdateLanguage">
            <input message="tns:UpdateLanguage_RequestMessage" />
            <output message="tns:UpdateLanguage_ResponseMessage" />
        </operation>
		
		<operation name="DeleteLanguage">
            <input message="tns:DeleteLanguage_RequestMessage" />
            <output message="tns:DeleteLanguage_ResponseMessage" />
        </operation>
    </portType>
	<!--Формат процедур веб-сервиса -->
    <binding name="MyServiceBinding" type="tns:MyServicePortType">
        <soap:binding transport="http://schemas.xmlsoap.org/soap/http" />
		<!--Объявление списка процедур-->
		<operation name="CreatePerson">
            <soap:operation soapAction="" />
            <input>
                <soap:body use="literal" />
            </input>
            <output>
                <soap:body use="literal" />
            </output>
        </operation>
		
		<operation name="ListPeople">
            <soap:operation soapAction="" />
            <input>
                <soap:body use="literal" />
            </input>
            <output>
                <soap:body use="literal" />
            </output>
        </operation>
		
		<operation name="ReadPerson">
            <soap:operation soapAction="" />
            <input>
                <soap:body use="literal" />
            </input>
            <output>
                <soap:body use="literal" />
            </output>
        </operation>
		
		<operation name="UpdatePerson">
            <soap:operation soapAction="" />
            <input>
                <soap:body use="literal" />
            </input>
            <output>
                <soap:body use="literal" />
            </output>
        </operation>
		
		<operation name="DeletePerson">
            <soap:operation soapAction="" />
            <input>
                <soap:body use="literal" />
            </input>
            <output>
                <soap:body use="literal" />
            </output>
        </operation>
		
        <operation name="ListLanguages">
            <soap:operation soapAction="" />
            <input>
                <soap:body use="literal" />
            </input>
            <output>
                <soap:body use="literal" />
            </output>
        </operation>
		
		<operation name="CreateLanguage">
            <soap:operation soapAction="" />
            <input>
                <soap:body use="literal" />
            </input>
            <output>
                <soap:body use="literal" />
            </output>
        </operation>
		
		<operation name="ReadLanguage">
            <soap:operation soapAction="" />
            <input>
                <soap:body use="literal" />
            </input>
            <output>
                <soap:body use="literal" />
            </output>
        </operation>
		
		<operation name="UpdateLanguage">
            <soap:operation soapAction="" />
            <input>
                <soap:body use="literal" />
            </input>
            <output>
                <soap:body use="literal" />
            </output>
        </operation>
		
		<operation name="DeleteLanguage">
            <soap:operation soapAction="" />
            <input>
                <soap:body use="literal" />
            </input>
            <output>
                <soap:body use="literal" />
            </output>
        </operation>
    </binding>
	<!--Определение сервиса -->
    <service name="MyService">
        <port name="MyServicePort" binding="tns:MyServiceBinding">
            <soap:address location="http://myservice.ru/soap.api.php"/>
        </port>
    </service>
</definitions>