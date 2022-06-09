<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
tinymce.init({
  selector: 'textarea',
  formats: {
    removeformat: [
      {
        selector: 'h1,h2,h3,h4,h5,h6',
        remove: 'all',
        split: false,
        expand: false,
        block_expand: true,
        deep: true
      },
      {
        selector: 'a,b,strong,em,i,font,u,strike,sub,sup,dfn,code,samp,kbd,var,cite,mark,q,del,ins',
        remove: 'all',
        split: true,
        expand: false,
        deep: true
      },
      { selector: 'span', attributes: ['style', 'class'], remove: 'empty', split: true, expand: false, deep: true },
      { selector: '*', attributes: ['style', 'class'], split: false, expand: false, deep: true }
    ]
  }
});
</body>
</html>>