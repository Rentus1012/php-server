function CheckAddBook() {

	var bookId = document.getElementById("bookId");
	var name = document.getElementById("name");
	var unitPrice = document.getElementById("unitPrice");
	var unitsInStock = document.getElementById("unitsInStock");
	var description = document.getElementById("description");
	var bookImage = document.getElementById("bookImage");
	
	
	// 상품아아디 체크
	if (!check(/^ISBN[0-9]{4,11}$/, bookId,
			"[도서 코드]\nISBN과 숫자를 조합하여 5~12자까지 입력하세요\n첫 글자는 반드시 ISBN로 시작하세요")) 
		return false;
		//정규 표현식을 이용, 정해진 형식에 맞는지 겅사. 0~9자리, 4자리~ 11자리까지, $는 숫자가 마지막까지., 뒤에 문자가 들어오먄 통과 불가.
		//--> ISBN1244a 는 불가.
		//그 문자는 false, 하지만 ^ 가 있어서 true, check 함수에서 false -> false 를 반환하고 메시지 출력.

	// 상품명 체크	
	if (name.value.length < 4  || name.value.length > 50) {
		alert("[도서명]\n최소 4자에서 최대 50자까지 입력하세요");
		name.select();
		name.focus();
		return false;
	}
	// 상품 가격 체크
	if (unitPrice.value.length == 0 || isNaN(unitPrice.value)) {
		alert("[가격]\n숫자만 입력하세요");
		unitPrice.select();
		unitPrice.focus();
		return false;
	}

	if (unitPrice.value < 0) {
		alert("[가격]\n음수를 입력할 수 없습니다");
		unitPrice.select();
		unitPrice.focus();
		return false;
	} else if (!check(/^\d+(?:[.]?[\d]?[\d])?$/, unitPrice,	"[가격]\n소수점 둘째 자리까지만 입력하세요")){
		//()는 추가로.. ? 는 소수점 몇자리, 그리고 \d 는 숫자. 그런 형식이 아니면 true. 그 다음 !에서 false.
		unitPrice.select();
		unitPrice.focus();
		return false;
	}
		

	// 재고 수 체크
	if (isNaN(unitsInStock.value)) {
		alert("[재고 수]\n숫자만 입력하세요");
		unitsInStock.select();
		unitsInStock.focus();
		return false;
	}
	// 상세 설명 체크
	if (description.value.length < 80) {
		alert("[상세설명]\n최소 80자이상 입력하세요");
		description.select();
		description.focus();
		return false;
	}
	// 업로드 파일 체크
	if (bookImage.value.length =="") {
		alert("[이미지]\n업로드파일을 입력하세요 ");
		bookImage.select();
		bookImage.focus();
		return false;
	}

	function check(regExp, e, msg) {

		if (regExp.test(e.value)) {
			return true;
		}
		alert(msg);
		e.select();
		e.focus();
		return false;
	}

	document.newBook.submit()
}
