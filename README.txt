# mvc_training

SQL: SELECT _code, _name FROM province WHERE _name LIKE '%keyword%';

Query: $this->db->table('province')->where('name', '=', 'Unicode')->where('id', '>', 3)->get();

SQL Result: SELECT * FROM province WHERE name='Unicode' AND id>3

1. where: $this->db->where(field, compare, value)
2. orWhere: $this->db->orWhere(field, compare, value)
3. get(): $this->db->get();
4. first(): $this->db->first();
5. table(): $this->db->table(name)
6. join(): $this->db->join(tableName, relationship)
7. limit(): $this->db->limit(offset, number)
8. insert(): $this->db->table(name)->insert($data)
9. update(): $this->db->table(name)->where(field, compare, value)->update($data)
10. delete(): $this->db->table(name)->where(field, compare, value)->delete()
11. whereLike(): $this->db->whereLike($field, $value)
12. select(): $this->db->select($field)
13. orderBy: $this->db->orderBy(field, type)
14. lastId(); $this->db->lastId();

-------------------------------------------------------------------------------------------------------
<?php
echo $title;
echo toSlug('Hoàng An');
?>
{{$title}} => <?php echo htmlentities($title); ?>
{!$title!} => <?phpecho $title; ?>
{!toSlug('Hoàng An')!} => <?php echo toSlug('Hoàng An'); ?>

@foreach ($arr as $key => $value)



@endforeach

-------------------------------------------------------------------------------------------------------
- Route middleware: Bộ lọc theo route
- Route globals: Bộ lọc tất cả request

-------------------------------------------------------------------------------------------------------
1. Set rules
- fieldname
- Rules

2. Thông báo
- fieldname
- errors

3. Run validate()
- true
- false

Khanh sua lan n