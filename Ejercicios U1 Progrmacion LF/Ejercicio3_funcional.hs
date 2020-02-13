

mayor :: Integer -> Integer -> Integer
mayor x y = div ((x + y) + abs(x - y)) 2

mayor3 :: Integer -> Integer -> Integer -> Integer
mayor3 x y z = mayor x (mayor y z)

mayor4 :: Integer -> Integer -> Integer -> Integer -> Integer
mayor4 w x y z = mayor (mayor w x) (mayor y z)


logEnBase :: Float -> Float -> Float
logEnBase b x =(log x) / (log b)