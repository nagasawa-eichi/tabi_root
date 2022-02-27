
  function add() {
    const div2 = document.getElementById("div2");
    // 要素の追加
   
      const input1 = document.createElement("input");
      const textarea1 = document.createElement("textarea");
      const textarea2 = document.createElement("textarea");
      input1.setAttribute("type", "text");
      input1.setAttribute("name", "comment[destination_name][]");
      textarea1.setAttribute("name", "comment[root_comment][]");
      textarea2.setAttribute("name", "comment[destination_link][]");

      div2.appendChild(input1);
      div2.appendChild(textarea1);
      div2.appendChild(textarea2);
  }
  function clickBtn4() {
    const div2 = document.getElementById("div2");
    if (div2.hasChildNodes()) {
      div2.removeChild(div2.firstChild);
    }
  }