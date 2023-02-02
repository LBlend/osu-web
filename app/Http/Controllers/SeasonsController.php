<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

namespace App\Http\Controllers;

use App\Models\Multiplayer\Room;
use App\Models\Season;
use App\Transformers\RankingSelectOptionTransformer;
use App\Transformers\SeasonTransformer;

class SeasonsController extends Controller
{
    public function rooms($id)
    {
        $season = Season::latestOrId($id);

        $params = $this->paramsForResponse($season, request()->all());
        $roomsJson = Room::responseJson($params);

        return $roomsJson;
    }

    public function show($id)
    {
        $season = Season::latestOrId($id);

        $params = $this->paramsForResponse($season);
        $roomsJson = Room::responseJson($params);

        $seasonJson = json_item($season, new SeasonTransformer());

        $seasons = Season::orderByDesc('id')->get();
        $seasonsJson = json_collection($seasons, new RankingSelectOptionTransformer());

        return ext_view('seasons.show', compact('roomsJson', 'seasonJson', 'seasonsJson'));
    }

    private function paramsForResponse($season, $rawParams = null)
    {
        return [
            'cursor' => cursor_from_params($rawParams),
            'max_limit' => 50,
            'limit' => get_int($rawParams['limit'] ?? null),
            'mode' => 'all',
            'season_id' => $season->getKey(),
        ];
    }
}
