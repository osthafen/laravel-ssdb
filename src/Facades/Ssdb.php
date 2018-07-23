<?php

namespace Huangdijia\Ssdb\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed set_timeout(int $timeout_ms)
 * @method static mixed easy()
 * @method static mixed close()
 * @method static mixed closed()
 * @method static boolean|null auth(string $password)
 * @method static mixed set(string $key, string $value)
 * @method static mixed setx(string $key, string $value, int $ttl)
 * @method static mixed setnx(string $key, string $value)
 * @method static mixed expire(string $key, int $ttl)
 * @method static mixed ttl(string $key)
 * @method static mixed get(string $key)
 * @method static mixed getset(string $key, string $value)
 * @method static mixed del(string $key)
 * @method static mixed incr(string $key, int $num)
 * @method static mixed exists(string $key)
 * @method static mixed getbit(string $key, int $offset)
 * @method static mixed setbit(string $key, int $offset, int $val)
 * @method static mixed bitcount(string $key, int $start, int $end)
 * @method static mixed substr(string $key)
 * @method static mixed strlen(string $key)
 * @method static mixed keys(string $key_start, string $key_end, int $limit)
 * @method static mixed rkeys(string $key_start, string $key_end, int $limit)
 * @method static mixed scan(string $key_start, string $key_end, int $limit)
 * @method static mixed rscan(string $key_start, string $key_end, int $limit)
 * @method static mixed multi_set(array $kvs)
 * @method static mixed multi_get(array $keys)
 * @method static mixed multi_del(array $keys)
 * @method static mixed hset(string $name, string $key, string $value)
 * @method static mixed hget(string $name, string $key)
 * @method static mixed hdel(string $name, string $key)
 * @method static mixed hincr(string $name, string $key, int $num)
 * @method static mixed hexists(string $name, string $key)
 * @method static mixed hsize(string $name)
 * @method static mixed hlist(string $name_start, string $name_end, int $limit)
 * @method static mixed hrlist(string $name_start, string $name_end, int $limit)
 * @method static mixed hkeys(string $name, string $key_start, string $key_end, int $limit)
 * @method static mixed hgetall(string $name)
 * @method static mixed hscan(string $name, string $key_start, string $key_end, int $limit)
 * @method static mixed hrscan(string $name, string $key_start, string $key_end, int $limit)
 * @method static mixed hclear(string $name)
 * @method static mixed multi_hset(string $name, array $kvs)
 * @method static mixed multi_hget(string $name, array $keys)
 * @method static mixed multi_hdel(string $name, array $keys)
 * @method static mixed zset(string $name, string $key, int $score)
 * @method static mixed zget(string $name, string $key)
 * @method static mixed zdel(string $name, string $key)
 * @method static mixed zincr(string $name, string $key, int $num)
 * @method static mixed zsize(string $name)
 * @method static mixed zlist(string $name_start, string $name_end, int $limit)
 * @method static mixed zrlist(string $name_start, string $name_end, int $limit)
 * @method static mixed zexists(string $name, string $key)
 * @method static mixed zkeys(string $name, string $key_start, int $score_start, int $score_end, int $limit)
 * @method static mixed zscan(string $name, string $key_start, int $score_start, int $score_end, int $limit)
 * @method static mixed zrscan(string $name, string $key_start, int $score_start, int $score_end, int $limit)
 * @method static mixed zrank(string $name, string $key)
 * @method static mixed zrrank(string $name, string $key)
 * @method static mixed zrange(string $name, int $offset, int $limit)
 * @method static mixed zrrange(string $name, int $offset, int $limit)
 * @method static mixed zclear(string $name)
 * @method static mixed zcount(string $name, int $score_start, int $score_end)
 * @method static mixed zsum(string $name, int $score_start, int $score_end)
 * @method static mixed zavg(string $name, int $score_start, int $score_end)
 * @method static mixed zremrangebyrank(string $name, int $start, int $end)
 * @method static mixed zremrangebyscore(string $name, int $start, int $end)
 * @method static mixed zpop_front(string $name, int $limit)
 * @method static mixed zpop_back(string $name, int $limit)
 * @method static mixed multi_zset(string $name, array $kvs)
 * @method static mixed multi_zget(string $name, array $keys)
 * @method static mixed multi_zdel(string $name, array $keys)
 * @method static mixed qsize(string $name)
 * @method static mixed qlist(string $name_start, string $name_end, int $limit)
 * @method static mixed qrlist(string $name_start, string $name_end, int $limit)
 * @method static mixed qclear(string $name)
 * @method static mixed qfront(string $name)
 * @method static mixed qback(string $name)
 * @method static mixed qget(string $name, int $index)
 * @method static mixed qset(string $name, int $index, string $val)
 * @method static mixed qrange(string $name, int $offset, int $limit)
 * @method static mixed qslice(string $name, int $begin, int $end)
 * @method static mixed qpush(string $name, string $item)
 * @method static mixed qpush_front(string $name, int $size)
 * @method static mixed qpush_back(string $name, string $item)
 * @method static mixed qpop(string $name, int $size)
 * @method static mixed qpop_front(string $name, int $size)
 * @method static mixed qpop_back(string $name, int $size)
 * @method static mixed qtrim_front(string $name, int $size)
 * @method static mixed qtrim_back(string $name, int $size)
 * @method static mixed batch()
 * @method static mixed exec()
 * @method static mixed dbsize()
 * @method static mixed info(string $opt)
 * @see \Huangdijia\Ssdb\Ssdb
 */

class Ssdb extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ssdb.simple'; 
    }
}