# 调试工具
###console模板
console.group('Zhengneng Javascipt Debugger');
var number = 11 * 9;
var color = 'red';
var languages = [
  { name: "JavaScript", fileExtension: ".js" },
  { name: "TypeScript", fileExtension: ".ts" },
  { name: "CoffeeScript", fileExtension: ".coffee" }
];
console.count();
console.log('%d %s balloons', number, color);
console.error("Error: %s (%i)", "Server is not responding",500)
console.warn('Warning! Too few nodes (%d)', document.childNodes.length)
console.table(languages);
console.dir($);
console.assert(true === false, "判断条件不成立")

console.time("Array initialize");
var array= new Array(1000000);
for (var i = array.length - 1; i >= 0; i--) {
    array[i] = new Object();
};

console.timeEnd("Array initialize");
//断点信息内容
//debugger;

console.groupEnd(); // Zhengneng







#### 相关文档
http://javascript.ruanyifeng.com/tool/console.html

